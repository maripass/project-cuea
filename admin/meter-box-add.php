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
            <!-- <h1>Login</h1> -->
            <form name="UpdateMeterBoxForm" method="POST" onsubmit="return UpdateMeterBoxValidation()">
                <div style="width: 100%;">
                    <select name="user" id="user" >
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

                
                <div style="width: 100%;">
                    <select name="meterBoxActive" id="meterBoxActive" >
                        <option value="">Active</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div><br><br><br><br>

                
                
                <input type="submit" value="Add Meter box" name="addMeterBox">
            
                    
                
                
            </form>
        </div>
    </section>

    <script src="js/validation.js"></script>
    
</body>
</html>