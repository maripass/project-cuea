<?php 
session_start();
$userEmail = "";
$userId = "";
$errors = array();

$host = "localhost";
$user ="root";
$password ="";
$dbname ="electricitybill";
$con = mysqli_connect($host,$user,$password,$dbname);
if(!$con){
die("connection failed: ".mysqli_connect_error());
}


//create new user
if(isset($_POST['createNewUser'])){
    $firstName= mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName= mysqli_real_escape_string($con, $_POST['lastName']);
    $userEmail= mysqli_real_escape_string($con, $_POST['userEmail']);
    $userPassword= mysqli_real_escape_string($con, $_POST['userPassword']);

    $checkEmailQuery="SELECT * FROM user WHERE userEmail='$userEmail' LIMIT 1";
    $checkEmailResult=mysqli_query($con, $checkEmailQuery);
    $user=mysqli_fetch_assoc($checkEmailResult);
    if($user) {
        if($user['userEmail'] ==$userEmail ){
            array_push($errors, "Email already exists.");
        }
    }
    
    if(count($errors) ==0 ){
        $userPasswordh= crypt($userPassword, "salt@#.com");
        $creatUserQuery="INSERT INTO user (firstName,lastName,userEmail,userPassword) VALUES('$firstName', '$lastName','$userEmail','$userPasswordh')";
        mysqli_query($con, $creatUserQuery);
        $_SESSION['success'] = "Account created successfully";
        header('Location: login.php');
    }
}

//User Login
if(isset($_POST['UserLogin'])){
    $userEmail= mysqli_real_escape_string($con, $_POST['userEmail']);
    $userPassword= mysqli_real_escape_string($con, $_POST['userPassword']);
    $userPasswordh= crypt($userPassword, "salt@#.com");

    $query="SELECT * FROM user WHERE userEmail='$userEmail' AND userPassword='$userPasswordh' LIMIT 1";
    $result=mysqli_query($con, $query);
    if(mysqli_num_rows($result) == 1){
        $userData=mysqli_fetch_assoc($result);
        if($userData['isAdmin'] == 1){
            $_SESSION['isAdmin'] = $userData['isAdmin'];
            $_SESSION['userId'] = $userData['userId'];
            $_SESSION['userEmail'] = $userData['userEmail'];
            header('Location: admin/index.php');
        } else {
            $_SESSION['userId'] = $userData['userId'];
            $_SESSION['userEmail'] = $userData['userEmail'];
            header('Location: dashboard-index.php');
        }
    } else {
        array_push($errors,"Wrong email/password combination.");
    }
}


//create new user
if(isset($_POST['updateProfile'])){
    $firstName= mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName= mysqli_real_escape_string($con, $_POST['lastName']);
    $Telephone= mysqli_real_escape_string($con, $_POST['phoneNumber']);
    $Address= mysqli_real_escape_string($con, $_POST['userAddress']);
    $userId= $_SESSION['userId'];
    
    $query="UPDATE user SET firstName='$firstName', lastName='$lastName', telephone='$Telephone', address='$Address' WHERE userId='$userId'";
    $result=mysqli_query($con, $query);
    if($result){
        $_SESSION['success'] = "Profile updated successfully";
    } else{
        array_push($errors,"Could not update.");
    }
}


//profile change password
if(isset($_POST['profileChangePassword'])){
    $oldPassword= mysqli_real_escape_string($con, $_POST['oldPassword']);
    $newPassword= mysqli_real_escape_string($con, $_POST['newPassword']);
    $userId= $_SESSION['userId'];
    $oldPasswordHash =  crypt($oldPassword, "salt@#.com");
    $newPasswordHash =  crypt($newPassword, "salt@#.com");
    
    $checkUser= mysqli_query($con, "SELECT * FROM user WHERE userId='$userId'");
    $row = mysqli_fetch_assoc($checkUser);
    if($oldPasswordHash == $row['userPassword']) {
        mysqli_query($con, "UPDATE user SET userPassword='$newPasswordHash' WHERE userId='$userId'");
        $_SESSION['success'] = "Password changed successfully.";
        session_destroy();
        header('Location: login.php');
    } else {
        array_push($errors,"Current password is not correct.");
    } 
}


//profile Delete Account
if(isset($_POST['profileDeleteAccount'])){
    $password= mysqli_real_escape_string($con, $_POST['password']);;
    $userId= $_SESSION['userId'];
    $passwordHash =  crypt($password, "salt@#.com");
    
    $checkUser= mysqli_query($con, "SELECT * FROM user WHERE userId='$userId' LIMIT 1");
    $row = mysqli_fetch_assoc($checkUser);
    if($passwordHash == $row['userPassword']) {
        mysqli_query($con, "DELETE FROM user WHERE userId='$userId'");
        $_SESSION['success'] = "Password changed successfully.";
        session_destroy();
        header('Location: login.php');
    } else {
        array_push($errors,"Current password is not correct.");
    } 
}

//create new user
if(isset($_POST['ContactSubmit'])){
    $firstName= mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName= mysqli_real_escape_string($con, $_POST['lastName']);
    $email= mysqli_real_escape_string($con, $_POST['email']);
    $telephone= mysqli_real_escape_string($con, $_POST['telephone']);
    $subject= mysqli_real_escape_string($con, $_POST['subject']);
    $message= mysqli_real_escape_string($con, $_POST['message']);
    
    
    $query="INSERT INTO contact (firstName,lastName,email,subject,telephone,message) VALUES('$firstName', '$lastName','$email', '$subject','$telephone','$message')";
    $result=mysqli_query($con, $query);
    if($result){
        $_SESSION['success'] = "your message has been sent successfully. we will get back to you as soon as possible";
    } else{
        array_push($errors,"error connection fail. $query");
    }

}

// help
if(isset($_POST['helpSubmit'])){
    $message= mysqli_real_escape_string($con, $_POST['message']);
    $userId=$_SESSION['userId'];
    
    
    $query="INSERT INTO help (userId,message) VALUES('$userId', '$message')";
    $result=mysqli_query($con, $query);
    if($result){
        $_SESSION['success'] = "your message has been sent successfully. we will response shortly.";
    } else{
        array_push($errors,"error connection fail. $query");
    }   
}






?>