<?php 
	require_once('config/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || EBMS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('home-header.php') ?>
    <div class="other-banner-area">
        <h1 style="margin-top:100px; text-align: center;">Contact</h1>
    </div>


    <div class="contact-area" id="Contact" >
        <div class="text-part" style="padding-top: 20px;">
            
            <form name="contactForm" method="POST" onsubmit="return contactValidation()">
            <div>
            <?php
            include("errors.php");
            ?><br>
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
            <?php
            include("success.php");
            ?><br>
        </div>
                <div>
                    <input type="text" id="firstNae" name="firstName" placeholder="First Name">
                </div>
            
                <div>
                    <input type="text" id="lastName" name="lastName" placeholder="Last Name">

                </div>
                <div>
                    <input type="email" id="email" name="email" placeholder="Email">
                </div>
                <div>
                    <input type="text" id="telephone" name="telephone" placeholder="Phone Number">
                </div>
                        
                
                <div>
                    <input type="text" id="subject" name="subject" placeholder="Subject">
                </div>
                
                
                <div>
                    <textarea id="message" name="message" placeholder="Write Message.." style="height:200px"></textarea>
                </div>
            
                <input type="submit" value="Submit" name="ContactSubmit">
            </form>

        </div>
    </div>
    
    <?php include('footer.php');      

?>
   
    <script src="js/main.js"></script>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
    </script>

     <script src="js/validation.js"></script> 
</body>

</html>