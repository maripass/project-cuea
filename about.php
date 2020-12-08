<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || EBMS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <a href="index.php" class="logo">EBMS</a>
        <ul class="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="login.php">Login</a></li>
            
        </ul>
    </div>
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
   
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
    </script>   
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
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