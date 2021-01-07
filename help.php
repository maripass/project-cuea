
<?php 
	require_once('config/db.php');
	
	if (!isset($_SESSION['userId'])) {
        header('location: login.php');

    }
  
  ?>
  <!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/dashboard.css">
   
</head>

<body>
   <?php include('header.php'); ?>

    <section class="banner">
        <div class="banner-left">
            Help
        </div>
    </section>
    <section>
        
        
        <div style="width: 50%; margin: auto;">
            <div>
                <?php 
                    $userId=$_SESSION['userId'];
                    $query="SELECT * FROM help WHERE userId='$userId'";
                    $result=mysqli_query($con, $query);
                    if(mysqli_num_rows($result) > 0){
                        while($row= $result->fetch_assoc()) {
                            ?>
                                <div style="float: right; right: 0px; background-color: #3274d6; width: 70%; padding: 10px; margin: 10px -25px 0 0;">
                                    <div style="margin-bottom: 10px; font-size: 20px;">Me</div>
                                    <div style="margin-bottom: 10px; font-size: 15px;"><?php echo date('M d Y',strtotime($row['createdAt'])) ?></div>
                                    <div>
                                    <?php echo $row['message'] ?>
                                    </div>
                                </div>
                            <?php
                        }
                    }
                ?>
            </div>
            <div>
                <?php
                    $queryAdmin="SELECT * FROM helpresponse WHERE userId='$userId'";
                    $resultAdmin=mysqli_query($con, $queryAdmin);
                    if(mysqli_num_rows($resultAdmin) > 0){
                        while($rowAdmin= $resultAdmin->fetch_assoc()) {
                            ?>
                            <div style="float: left; left: 0px; background-color: #dcdcdc; width: 70%; padding: 10px 10px 10px 10px; margin: 10px 0 0 0px;">
                                <div style="margin-bottom: 10px; font-size: 20px;">Admin</div>
                                <div style="margin-bottom: 10px; font-size: 15px;"><?php echo date('M d Y',strtotime($rowAdmin['createdAt'])) ?></div>
                                <div>
                                <?php echo $rowAdmin['message'] ?>
                                </div>
                            </div>
                        <?php
                        }
                    }  
                ?>
        </div>
        </div>
        <br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br>



        <div style="width: 50%; position: fixed; bottom: 0px; margin-left: 25%;">
            <form name="helpForm" method="POST" onsubmit="return helpValidation()">
                <div>
                    <textarea name="message" id="message" style="height: 100px;"></textarea>
                </div>
                
                <div style="margin-right: -30px;">
                    <input type="submit" value="Send" name="helpSubmit">

                </div>
            </form>
        </div>
    </section>

    <script src="js/dashboard-validation.js"></script>

</body>

</html>