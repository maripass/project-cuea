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
        <h1 style="margin-top:100px; text-align: center;">Services</h1>
    </div>

    
    <div class="service-area" id="Services">
        <div class="text-part">
        <h1>How it works</h1>
            <p>
                The electricty bill allows the communication between the meter box </br>
                company and the users.
            </p>
            <p>
            <h1>Track use of your electricity</h1>
            <p>
            Check your balance in the dashboard and know where your money is going.
        </p>
            <h1>Check your record month and annully</h1>
            <p>
                Here,we show the previous per month and year, in the case  </br>
                of the annually report,subcribers can see thier all bill since they joined the company.
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