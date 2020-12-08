
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
    <title>Update Contact</title>
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
            Contact Response
        </div>
    </section>
    <section>
        <br><br>
        <div style="width: 50%;margin-left: 25%;">
            <form name="loginForm" method="POST" onsubmit="return loginValidation()" action="dashboard/index.html">
                <div>
                    <input disabled type="text" name="" id="" value="Eric" placeholder="First Name">
                </div>

                <div>
                    <input disabled type="text" name="" id="" value="Balole" placeholder="Last Name">
                </div>

                <div>
                    <input disabled type="text" name="" id="" value="eric@gmail.com" placeholder="Email Address">
                </div>

                <div>
                    <input disabled type="text" name="" id="" placeholder="Change user to a new metter box">
                </div>

                <div>
                    <textarea name="" disabled id="" style="height: 140px; padding: 15px;" placeholder="Message">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod consequuntur laborum qui sit animi, quia odio quaerat nam quae eligendi distinctio quam quis neque eveniet recusandae numquam soluta nisi asperiores.
                </textarea>
                </div>
                
            </form><br><br><br><br><br><br><br><br><br><br><br>
        </div>

        
        <div style="width: 50%; position: fixed; bottom: 0px; margin-left: 24%;">
            <form name="loginForm" method="POST" onsubmit="return loginValidation()" action="dashboard/index.html">
                <div>
                    <textarea name="" id="" style="height: 100px; padding: 15px;" placeholder="Respond to the message"></textarea>
                </div>
                
                <div style="margin-right: -30px;">
                    <input type="submit" value="Send">
                </div>
            </form>
        </div>
    </section>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <!-- import validation page -->
    <script src="js/validation.js"></script>
    
</body>
</html>