
<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
        header('location: ../login.php');
    }
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
   
</head>

<body>
    <input type="checkbox" id="check">
    <label for="check">
        <div id="btn">
            <img src="images/icons/menu.svg" width="20px" height="20px" alt="">
        </div>
        <div id="cancel">
            <img src="images/icons/close.svg" width="20px" height="20px" alt="">
        </div>
    </label>
    <?Php include('header.php'); ?>


    <section class="banner">
        <div class="banner-left">
            Help
        </div>
    </section>
    <section>
        
        
        <div style="width: 50%; margin: auto;">

            <?php 
                $query="SELECT * FROM help WHERE userId='$id'";
                $result=mysqli_query($con, $query);
                if(mysqli_num_rows($result) > 0){
                    while($row= $result->fetch_assoc()) {
                        $userId = $row['userId'];
                        $query2   = "SELECT * FROM user WHERE userId = '$userId'";
                        $result2 = mysqli_query($con, $query2);
                        if (mysqli_num_rows($result2)) {
                            $userData = $result2->fetch_assoc();		
                        }
                        ?>      
                            <div style="float: left; left: 0px; background-color: #dcdcdc; width: 70%; padding: 10px; margin: 10px 0 0 0px;">
                                <div style="margin-bottom: 10px; font-size: 20px;"><?php echo $userData['firstName'] ?> <?php echo $userData['lastName'] ?></div>
                                <div>
                                    <?php echo $row['message'] ?>
                                </div>
                            </div>
                        <?php
                    }
                }
            ?>

            <?php 
                $query="SELECT * FROM helpresponse WHERE userId='$id'";
                $result=mysqli_query($con, $query);
                if(mysqli_num_rows($result) > 0){
                    while($row= $result->fetch_assoc()) {
                        $userId = $row['staffId'];
                        $query2   = "SELECT * FROM user WHERE userId = '$userId'";
                        $result2 = mysqli_query($con, $query2);
                        if (mysqli_num_rows($result2)) {
                            $userData = $result2->fetch_assoc();		
                        }
                        ?>
                            <div style="float: right; right: 0px; background-color: #3274d6; width: 70%; padding: 10px; margin: 10px -25px 0 0;">
                                <div style="margin-bottom: 10px; font-size: 20px;"><?php echo $userData['firstName'] ?> <?php echo $userData['lastName'] ?></div>
                                <div style="margin-bottom: 10px; font-size: 15px;"><?php echo date('M d Y',strtotime($row['createdAt'])) ?></div>
                                <div>
                                <?php echo $row['message'] ?>
                                </div>
                            </div>
                        <?php
                    }
                }
            ?>

        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br>

        <div style="width: 50%; position: fixed; bottom: 0px; margin-left: 25%;">
            <form method="POST">
                <div>
                    <textarea name="message" id="message" style="height: 100px;"></textarea>
                    <input type="text" hidden name="userId" id="userId" value="<?php echo $id ?>">
                </div>
                
                <div style="margin-right: -30px;">
                    <input type="submit" value="Send" name="helpAdminSubmit">

                </div>
            </form>
        </div>
    </section>

</body>

</html>