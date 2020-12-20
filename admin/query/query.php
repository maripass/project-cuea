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
        $meterBoxNumber= mysqli_real_escape_string($con, $_POST['meterBoxNumber']);
        $active= mysqli_real_escape_string($con, $_POST['meterBoxActive']);
        $userId= mysqli_real_escape_string($con, $_POST['user']);
        $address= mysqli_real_escape_string($con, $_POST['address']);
        $houseNumber= mysqli_real_escape_string($con, $_POST['houseNumber']);

        $checkBoxNumberQuery = "SELECT * FROM meterbox WHERE meterBoxNumber='$meterBoxNumber' OR userId='$userId' LIMIT 1";
        $result2    = mysqli_query($con, $checkBoxNumberQuery);
        $nameResult = mysqli_fetch_assoc($result2);
        if ($nameResult) { 
            if ($nameResult['meterBoxNumber'] === $meterBoxNumber) { array_push($errors, "Meter Box Number already exist."); }
            if ($nameResult['userId'] === $userId) { array_push($errors, "User already exists."); }
        }
        if (count($errors) == 0) {
            $query="INSERT INTO meterbox (meterBoxNumber, active, address, houseNumber, userId) VALUES('$meterBoxNumber', '$active', '$address', '$houseNumber', '$userId')";
            $result=mysqli_query($con, $query);
            if($result){
                $checkEmailQuery="SELECT * FROM meterbox WHERE meterBoxNumber='$meterBoxNumber' LIMIT 1";
                $checkEmailResult=mysqli_query($con, $checkEmailQuery);
                $user=mysqli_fetch_assoc($checkEmailResult);
                echo "1";
                if($user) {
                    $meterBox = $user['meterBoxId'];
                    echo $user['meterBoxId'];
                    $consumptionQuery="INSERT INTO consumption (meterBoxId, currentMeterReading, previoustMeterReading, meterCostId) VALUES('$meterBox', 0, 0, NULL)";
                    mysqli_query($con, $consumptionQuery);
                } else {
                    echo "NO";
                }
                $_SESSION['success'] = "Meter Box created successfully.";
                header('Location: meter-box.php');
            } else{
                array_push($errors,"error connection fail. $query");
            } 
        }
         
    }


    //Add meter box
    if(isset($_POST['addNewUser'])){
        $firstName= mysqli_real_escape_string($con, $_POST['firstName']);
        $lastName= mysqli_real_escape_string($con, $_POST['lastName']);
        $userEmail= mysqli_real_escape_string($con, $_POST['userEmail']);
        $isAdmin= mysqli_real_escape_string($con, $_POST['isAdmin']);
        $phoneNumber= mysqli_real_escape_string($con, $_POST['phoneNumber']);
        $password= mysqli_real_escape_string($con, $_POST['password']);
        $userPassword= crypt($password, "salt@#.com");

        $user_check_query = "SELECT * FROM user WHERE userEmail='$userEmail' LIMIT 1";
        $result           = mysqli_query($con, $user_check_query);
        $user             = mysqli_fetch_assoc($result);
        if ($user) { 
            if ($user['userEmail'] === $userEmail) { array_push($errors, "Email already exists"); }
        }
        if (count($errors) == 0) { 
            $query="INSERT INTO user (firstName, lastName, userEmail, userPassword, telephone, isAdmin) VALUES('$firstName', '$lastName', '$userEmail', '$userPassword', '$phoneNumber', '$isAdmin')";
            $result=mysqli_query($con, $query);
            if($result){
                $_SESSION['success'] = "User created successfully.";
                header('Location: users.php');
            } else{
                array_push($errors,"error connection fail. $query");
            }  
        } 
    }


    // Contact Response
    if(isset($_POST['contactResponse'])){
        $message= mysqli_real_escape_string($con, $_POST['message']);
        $contactId= mysqli_real_escape_string($con, $_POST['contactId']);
        $userEmail= mysqli_real_escape_string($con, $_POST['userEmail']);
        $staffId=$_SESSION['userId'];

        $query="INSERT INTO contactresponse (contactId, staffId, message) VALUES('$contactId', '$staffId', '$message')";
        mysqli_query($con, $query);
   
        // $to      = $userEmail;
        // $subject = 'Contact';
        // $msg     = $message;
        // $retval = mail($to, $subject, $msg);
    }


    // Create a new blog
    if(isset($_POST['createBlog'])){
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $name= mysqli_real_escape_string($con, $_POST['name']);
        // $image= $_FILES['image'];
        $description= mysqli_real_escape_string($con, $_POST['description']);


        $check_name_query = "SELECT * FROM blog WHERE name='$name' LIMIT 1";
        $result           = mysqli_query($con, $check_name_query);
        $blog             = mysqli_fetch_assoc($result);
        if ($blog) { 
            if ($blog['name'] === $name) { array_push($errors, "Name already exists"); }
        }
        if (count($errors) == 0) { 
            move_uploaded_file($file_tmp,"images/blog/".$file_name);
            $query="INSERT INTO blog (name, image, description) VALUES('$name', '$file_name', '$description')";
            $result=mysqli_query($con, $query);
            if($result){
                $_SESSION['success'] = "Blog created successfully.";
                header('Location: blog.php');
            } else{
                array_push($errors,"error connection fail. $query");
            }  
        }
    }

    // Update Blog
    if(isset($_POST['updateBlog'])){
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $blogId= mysqli_real_escape_string($con, $_POST['blogId']);
        $name= mysqli_real_escape_string($con, $_POST['name']);
        $description= mysqli_real_escape_string($con, $_POST['description']);

        if($file_name == '') {
            $query="UPDATE blog SET name='$name', description='$description' WHERE blogId='$blogId'";
            $result=mysqli_query($con, $query);
            if($result){
                $_SESSION['success'] = "Blog created successfully.";
                header('Location: blog.php');
            } else{
                array_push($errors,"error connection fail. $query");
            }
        } else {
            move_uploaded_file($file_tmp,"images/blog/".$file_name);
            $query="UPDATE blog SET name='$name', image='$file_name', description='$description' WHERE blogId='$blogId'";
            $result=mysqli_query($con, $query);
            if($result){
                $_SESSION['success'] = "Blog created successfully.";
                header('Location: blog.php');
            } else{
                array_push($errors,"error connection fail. $query");
            }
        }  
    }

    // Update User
    if(isset($_POST['updateUser'])){
        $firstName= mysqli_real_escape_string($con, $_POST['firstName']);
        $lastName= mysqli_real_escape_string($con, $_POST['lastName']);
        $isAdmin= mysqli_real_escape_string($con, $_POST['isAdmin']);
        $userId= mysqli_real_escape_string($con, $_POST['userId']);
        $phoneNumber= mysqli_real_escape_string($con, $_POST['phoneNumber']);

        $query   = "UPDATE user SET firstName='$firstName', lastName='$lastName', isAdmin='$isAdmin', telephone='$phoneNumber' WHERE userId = '$userId'";
        $results = mysqli_query($con, $query);

        if ($results) {
            $_SESSION['success'] = "User updated successfully.";
            header('Location: users.php');
        } else {
            array_push($errors, "Could update your profile: $query");
        }
    }


    // Update Meter Box
    if(isset($_POST['updateMeterBox'])){
        $meterBoxNumber= mysqli_real_escape_string($con, $_POST['meterBoxNumber']);
        $meterBoxId= mysqli_real_escape_string($con, $_POST['meterBoxId']);
        $userId= mysqli_real_escape_string($con, $_POST['user']);
        $address= mysqli_real_escape_string($con, $_POST['address']);
        $houseNumber= mysqli_real_escape_string($con, $_POST['houseNumber']);
        $active= mysqli_real_escape_string($con, $_POST['meterBoxActive']);

        $query   = "UPDATE meterbox SET meterBoxNumber='$meterBoxNumber', active='$active', address='$address', houseNumber='$houseNumber', userId='$userId' WHERE meterBoxId = '$meterBoxId'";
        $results = mysqli_query($con, $query);

        if ($results) {
            $_SESSION['success'] = "Meter Box updated successfully.";
            header('Location: meter-box.php');
        } else {
            array_push($errors, "Could not update Meter Box: $query");
        }
    }



    // Create a new Meter Cost
    if(isset($_POST['addMeterCost'])){
        $costPerKwatt= mysqli_real_escape_string($con, $_POST['costPerKwatt']);

        $query="INSERT INTO metercost (costPerKwatt) VALUES('$costPerKwatt')";
        $result=mysqli_query($con, $query);
        if($result){
            $_SESSION['success'] = "Meter Cost created successfully.";
            header('Location: meter-cost.php');
        } else{
            array_push($errors,"error connection fail. $query");
        }  
    }

    // DELETE BLOG
    if(isset($_POST['deleteBlog'])){
        $blogId= mysqli_real_escape_string($con, $_POST['blogId']);

        $query="DELETE FROM blog WHERE blogId='$blogId'";
        $result=mysqli_query($con, $query);
        if($result){
            $_SESSION['success'] = "Blog deleted successfully.";
            header('Location: blog.php');
        } else{
            array_push($errors,"error connection fail. $query");
        }  
    }

    // Delete Meter Box
    if(isset($_POST['deleteMeterBox'])){
        $meterBoxId= mysqli_real_escape_string($con, $_POST['meterBoxId']);
        
        $query="DELETE FROM meterbox WHERE meterBoxId='$meterBoxId'";
        $result=mysqli_query($con, $query);
        if($result){
            $_SESSION['success'] = "Meter Box deleted successfully.";
            header('Location: meter-box.php');
        } else{
            array_push($errors,"error connection fail. $query");
        }  
    }


        // Update User
        if(isset($_POST['deleteUser'])){
            $userId= mysqli_real_escape_string($con, $_POST['userId']);
            $currentUserId = $_SESSION['userId'];
            // DELETE METERBOX
            $query1="DELETE FROM meterbox WHERE userId='$userId'";
            mysqli_query($con, $query1);

            // DELETE NEWSLETTER RESPONSE
            $query2="DELETE FROM newsletterresponse WHERE staffId='$userId'";
            mysqli_query($con, $query2);

            // DELETE HELP RESPONSE
            $query4="DELETE FROM helpresponse WHERE staffId='$userId'";
            mysqli_query($con, $query4);

            // DELETE HELP RESPONSE
            $query7="DELETE FROM helpresponse WHERE userId='$userId'";
            mysqli_query($con, $query7);

            // DELETE HELP
            $query5="DELETE FROM help WHERE userId='$userId'";
            mysqli_query($con, $query5);

            // DELETE CONTACT RESPONSE
            $query6="DELETE FROM contactresponse WHERE staffId='$userId'";
            mysqli_query($con, $query6);

            $query3="DELETE FROM user WHERE userId='$userId'";
            $result = mysqli_query($con, $query3);
            if($result) {
                if($userId == $currentUserId) { 
                    session_destroy();
                    header('Location: ../login.php');
                } else {
                    $_SESSION['success'] = "User deleted successfully.";
                    header('Location: users.php');
                }
            } else {
                array_push($errors,"error connection fail. $query2");
            }
        }
    

?>

