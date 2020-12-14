
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
    <title>Update Blog</title>
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
            Update Blog
        </div>
    </section>
    <section>
        <div class="login">
            <!-- <h1>Login</h1> -->
            <form name="UpdateMeterBoxForm" method="POST" onsubmit="return UpdateMeterBoxValidation()">
                <div style="width: 100%;">
                    <select name="user" >
                        <option value="">Select a user</option>
                        <option value="asas">User 1</option>
                        <option value="asas">User 2</option>
                        <option value="asas">User</option>
                    </select>
                </div><br><br><br><br>

                
                <div style="width: 100%;">
                    <select name="meterBoxActive" >
                        <option value="">Active</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div><br><br><br><br>
                
                <div style="width: 100%;">
                    <select name="electricityActive" >
                        <option value="">Electricity Active</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div><br><br><br><br>
                
                
                
                <input type="submit" value="Update Meter box">
            
                    
                
                
            </form>
        </div>
    </section>
    
    <script src="js/validation.js"></script>
    
</body>
</html>