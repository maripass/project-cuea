<?php
    require_once('../config/db.php');


    //profile change password
    if(isset($_POST['profileAdminChangePassword'])){
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
            header('Location: ../login.php');
        } else {
            array_push($errors,"Current password is not correct.");
        } 
    }

    
    //Newsletter
    if(isset($_POST['newsletter'])){
        $name= mysqli_real_escape_string($con, $_POST['name']);
        $message= mysqli_real_escape_string($con, $_POST['description']);
        $staffId= $_SESSION['userId'];
        
        $checkName= "SELECT * FROM newsletterresponse WHERE name='$name' LIMIT 1";
        $checkNameResult=mysqli_query($con, $checkName);
        $row=mysqli_fetch_assoc($checkNameResult);
        if($row) {
            if($row['name'] ==$name ){
                array_push($errors, "Newsletter with this name already exists.");
            }
        } else {
            $query="INSERT INTO newsletterresponse (staffId, message ,name) VALUES('$staffId', '$message','$name')";
            mysqli_query($con, $query);
            $subscribersQuery="SELECT * FROM newsletter";
            $subscriberst=mysqli_query($con, $subscribersQuery);
            if(mysqli_num_rows($subscriberst) > 0){
                while($rowResult= $subscriberst->fetch_assoc()) {
                    $to      = $rowResult['email'];
                    $subject = $name;
                    $msg     = $message;
                    $retval = mail($to, $subject, $msg);
                }
                $_SESSION['success'] = "Newsletter created successfully.";
                header('Location: newsletter.php');
            }

            

        } 
    }

    // help
    if(isset($_POST['helpAdminSubmit'])){
        $message= mysqli_real_escape_string($con, $_POST['message']);
        $userId= mysqli_real_escape_string($con, $_POST['userId']);
        $staffId=$_SESSION['userId'];
        
        
        $query="INSERT INTO helpresponse (userId, staffId,message) VALUES('$userId', '$staffId', '$message')";
        $result=mysqli_query($con, $query);
        if($result){
            // $_SESSION['success'] = "your message has been sent successfully. we will response shortly.";
        } else{
            array_push($errors,"error connection fail. $query");
        }   
    }



    //Add meter box
    if(isset($_POST['addMeterBox'])){
        $userId= mysqli_real_escape_string($con, $_POST['user']);
        $address= mysqli_real_escape_string($con, $_POST['address']);
        $address= mysqli_real_escape_string($con, $_POST['address']);
        $houseNumber= mysqli_real_escape_string($con, $_POST['houseNumber']);
        $active= mysqli_real_escape_string($con, $_POST['meterBoxActive']);
        $query="INSERT INTO meterbox (userId, active, address, houseNumber) VALUES('$userId', '$active', '$address', '$houseNumber')";
        $result=mysqli_query($con, $query);
        if($result){
            $_SESSION['success'] = "Meter box created successfully. with user";
            header('Location: meter-box.php');
        } else{
            array_push($errors,"error connection fail. $query");
        }  
    }
?>