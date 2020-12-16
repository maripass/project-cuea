
<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
        header('location: ../login.php');
    }
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
            Dasboard
        </div>

    </section>
    <section>
        
        <div style="margin-bottom: 20px;">
            <?php 
                $query1  = "SELECT COUNT(*) as total from user";
                $result1 = mysqli_query($con, $query1);
                $data1 	= mysqli_fetch_assoc($result1);
                ?>
                    <div style="width: 49.5%; height: 100px; background-color: cyan;text-align: center; font-size: 25px; margin-top: 10px;">
                        <p style="margin-top: 20px;"> <?php echo $data1['total']; ?></p>
                        <p>Users</p>
                    </div>
                <?php
            ?>

            <?php 
                $query2  = "SELECT COUNT(*) as total from meterbox";
                $result2 = mysqli_query($con, $query2);
                $data2 	= mysqli_fetch_assoc($result2);
                ?>
                    <div style="width: 49.5%; height: 100px; background-color:teal;text-align: center; font-size: 25px; float: right; right: 0px; margin-top: -100px;">
                        <p style="margin-top: 20px;"><?php echo $data2['total']; ?></p>
                        <p>Meta Box</p>
                    </div>
                <?php
            ?>
        </div>


        <div style="margin-bottom: 20px;">
            <?php 
                $query3  = "SELECT COUNT(*) as total from consumption";
                $result3 = mysqli_query($con, $query3);
                $data3 	= mysqli_fetch_assoc($result3);
                ?>
                    <div style="width: 49.5%; height: 100px; background-color: cyan;text-align: center; font-size: 25px; margin-top: 10px;">
                        <p style="margin-top: 20px;"> <?php echo $data3['total']; ?></p>
                        <p>Consumption</p>
                    </div>
                <?php
            ?>

            <?php 
                $query4  = "SELECT COUNT(*) as total from blog";
                $result4 = mysqli_query($con, $query4);
                $data4 	= mysqli_fetch_assoc($result4);
                ?>
                    <div style="width: 49.5%; height: 100px; background-color:teal;text-align: center; font-size: 25px; float: right; right: 0px; margin-top: -100px;">
                        <p style="margin-top: 20px;"><?php echo $data4['total']; ?></p>
                        <p>Blog</p>
                    </div>
                <?php
            ?>
        </div>

        <div style="margin-bottom: 20px;">
            <div style="width: 49.5%; height: 100px; background-color: cyan;text-align: center; font-size: 25px; margin-top: 10px;">
                <p style="margin-top: 20px;">00</p>
                <p>Consumption</p>
            </div>
            <div style="width: 49.5%; height: 100px; background-color:teal;text-align: center; font-size: 25px; float: right; right: 0px; margin-top: -100px;">
                <p style="margin-top: 20px;">00</p>
                <p>Blog</p>
            </div>
        </div>
    </section>
    
</body>
</html>