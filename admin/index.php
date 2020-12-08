
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
                <div style="width: 49.5%; height: 100px; background-color: cyan;text-align: center; font-size: 25px; margin-top: 10px;">
                    <p style="margin-top: 20px;">00</p>
                    <p>Users</p>
                </div>
                <div style="width: 49.5%; height: 100px; background-color:teal;text-align: center; font-size: 25px; float: right; right: 0px; margin-top: -100px;">
                    <p style="margin-top: 20px;">00</p>
                    <p>Meta Box</p>
                </div>
               
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