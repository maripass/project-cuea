<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
        header('location: ../login.php');
    }
    $meterBoxNumber = $_GET['id'];
    $query   = "SELECT * FROM meterbox WHERE meterBoxNumber = '$meterBoxNumber' LIMIT 1";
	$results = mysqli_query($con, $query);
	if ($results) {
		$meterBoxData = $results->fetch_assoc();		
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Meter Box</title>
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
            Update Meter Box
        </div>
    </section>
    <section>
        <div class="login">
            <form name="updateMeterBoxForm" method="POST" onsubmit="return updateMeterBoxValidation()">
                <div>
                    <?php  include("../errors.php"); ?><br>
                </div>
                <style>
                    .success {
                        padding: 0px 2px;
                        border: 1px solid #3c763d;
                        color: #3c763d; 
                        background: #dff0d8; 
                        font-size: 14px;
                        text-align: center;
                    }
                </style>

                <div style="width: 100%;">
                    <select name="meterBoxNumber" id="meterBoxNumber">
                        <option value="">Select a Meter Box</option>
                        <?php 
                            $queryMeterBox   = "SELECT * FROM meterbox ORDER BY createdAt DESC";
							$resultsMeterBox = mysqli_query($con, $queryMeterBox);

                            while($rowMeterBox = mysqli_fetch_assoc($resultsMeterBox)) {
                                if($rowMeterBox['meterBoxNumber'] == $meterBoxData['meterBoxNumber']) {
                                    ?>
                                        <option value="<?php echo $rowMeterBox['meterBoxNumber'] ?>" selected><?php echo $rowMeterBox['meterBoxNumber'] ?></option>
                                    <?php
                                }
                                ?>
                                    <option value="<?php echo $rowMeterBox['meterBoxNumber'] ?>"> <?php echo $rowMeterBox['meterBoxNumber'] ?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <select name="meterBoxActive" id="meterBoxActive">
                        <option value="">Active</option>
                        <?php
                            if($meterBoxData['isAdmin'] == 1) {
                                ?>
                                    <option value="<?php $meterBoxData['isAdmin'] ?>" selected>Yes</option>
                                <?php
                            }
                        ?>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div><br><br><br><br>

                
                <div style="width: 100%;">
                    <select name="user" id="user">
                        <option value="">Select a user</option>
                        <?php 
                            $query_user   = "SELECT * FROM user ORDER BY createdAt DESC";
							$results_user = mysqli_query($con, $query_user);

                            while($row = mysqli_fetch_assoc($results_user)) {
                                if($row['userId'] == $meterBoxData['userId']) {
                                    ?>
                                        <option value="<?php echo $row['userId'] ?>" selected><?php echo $row['userEmail'] ?></option>
                                    <?php
                                }
                                ?>
                                    <option value="<?php echo $row['userId'] ?>" selected><?php echo $row['userEmail'] ?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <input type="text" name="address" value="<?php echo $meterBoxData['address'] ?>" placeholder="Address" id="address">
                </div><br><br><br><br>


                <div style="width: 100%;">
                    <input type="text" value="<?php echo $meterBoxData['houseNumber'] ?>" name="houseNumber" id="houseNumber" placeholder="House Number">
                    <input type="text" value="<?php echo $meterBoxData['meterBoxId'] ?>" name="meterBoxId" id="meterBoxId" hidden>
                </div><br><br><br><br>

                <input type="submit" value="Update Meter Box" name="updateMeterBox">
            
            </form>
            <form method="POST">
                <input type="text" value="<?php echo $meterBoxData['meterBoxId'] ?>" name="meterBoxId" id="meterBoxId" hidden>
                <input type="submit" class="btn" style="background-color: red;" name="deleteMeterBox" value="Delete Meter Box">
                        
            </form> 
        </div>
    </section>
    <script src="js/validation.js"></script>
    
</body>
</html>