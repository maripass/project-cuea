
<?php 
	require_once('../config/db.php');
	
	if (!isset($_SESSION['userId'])) {
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
    <div class="sidebar">
        <header>Dashboard</header>
        <ul>
            <li><a href="meter-box.php">Meter Box</a></li>
            <li><a href="monthly-report.php">Monthly Report</a></li>
            <li><a href="annually-report.php">Annually Report</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a style="color:red;" href="../logout.php">Logout</a></li>
        </ul>
    </div>

    <section class="banner">
        <div class="banner-left">
            Help
        </div>
    </section>
    <section>
        
        
        <div style="width: 50%; margin: auto;">
            <div style="float: right; right: 0px; background-color: #3274d6; width: 70%; padding: 10px; margin: 10px -25px 0 0;">
                <div style="margin-bottom: 10px; font-size: 20px;">Me</div>
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut enim qui ullam soluta asperiores architecto molestiae aperiam dolore doloremque sapiente iusto ducimus iste ratione, mollitia rem, id harum laborum expedita!
                </div>
            </div>
    
            <div style="float: left; left: 0px; background-color: #dcdcdc; width: 70%; padding: 10px; margin: 10px 0 0 0px;">
                <div style="margin-bottom: 10px; font-size: 20px;">Admin</div>
                <div>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut enim qui ullam soluta asperiores architecto molestiae aperiam dolore doloremque sapiente iusto ducimus iste ratione, mollitia rem, id harum laborum expedita!
                </div>
            </div>
        </div>

        <div style="width: 50%; position: fixed; bottom: 0px; margin-left: 25%;">
            <form name="loginForm" method="POST" onsubmit="return loginValidation()" action="dashboard/index.html">
                <div>
                    <textarea name="" id="" style="height: 100px;"></textarea>
                </div>
                
                <div style="margin-right: -30px;">
                    <input type="submit" value="Send">
                </div>
            </form>
        </div>
    </section>

</body>

</html>