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
        <h1 style="margin-top:100px; text-align: center;">About</h1>
    </div>

    <div class="about-area">
        <div class="text-part">
            <h1>Meet Us</h1>
            <p>
                Eectricity bill management system it is simple system was created </br>
                in 2020 by SOLMEM VICTORIA to see the issues about the post_paid system.</br>
                the idea was born when i used the post-paid system at the end of the month if i didn't pay </br>
                on time the company send people to put off the meter box.</br>
                there come the idea to come up with system which can communication directly the meter box and company.
            </p>
            <p>
            <h1>Vision</h1>
            Become the best and most complete  website </br>
            and post-paid education platform.</p>
            <h1>Mission</h1>
            <p>
                We dedicate our time on helping people.we make their dreams come true by </br>
                making a good system  to manage their electricty bill.
           </p>
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