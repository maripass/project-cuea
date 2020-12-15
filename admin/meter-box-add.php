<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
        header('location: ../login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update meta-box</title>
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
            Update Meter box
        </div>
    </section>
    <section>
        <div class="login">
            <form method="POST">
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
                <div>
                    <?php  include("../success.php"); ?><br>
                </div>
                <div style="width: 100%;">
                    <input type="text" name="meterBoxNumber" id="meterBoxNumber" placeholder="Meter Box Number" required>
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <select name="meterBoxActive" id="meterBoxActive" required>
                        <option value="">Active</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <select name="user" id="user" required>
                        <option value="">Select a user</option>
                        <?php 
                            $query_user   = "SELECT * FROM user ORDER BY createdAt DESC";
							$results_user = mysqli_query($con, $query_user);

                            while($row = mysqli_fetch_assoc($results_user)) {
                                echo '<option value="' . $row['userId'] . '" selected>' . $row['userEmail'] . '</option>';
                            }
						
                        ?>
                    </select>
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <input type="text" name="address" id="address" placeholder="Address">
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <input type="text" name="houseNumber" id="houseNumber" placeholder="House Number">
                </div><br><br><br><br>
           
        
                <input type="submit" value="Add Meter box" name="addMeterBox">             
            </form>
        </div>
    </section>

    <script src="js/validation.js"></script>
    
</body>
</html>