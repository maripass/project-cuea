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
        <h1 style="margin-top:100px; text-align: center;">Blog</h1>
    </div>
    <!-- BLOG  -->
    <div class="blog-area" id="Blog" style="margin-top:30px;">
        <div class="text-part" style="margin-bottom: 25px;">
        
            <div class="blog-content" > 
                <div class="blog-image">
                    <img src="images/image.jpg" style="width: 250px;height: 200px;" alt="">
                </div>
                <div style="color: #fff; position: absolute; margin-top: -190px; margin-left: 265px; height: 170px; width: 450px;">
                    <div style=" font-size: 22px;">Blog Name Here</div></br>
                    <div>
                        Description Here Description Here Description Here Description Here
                        Description Here Description Here Description Here Description Here
                    </div>
                    <div style="margin-bottom: 0px; bottom: 0px; position: absolute;">Date: 10/10/2020</div>
                </div>
            </div>
        </br>
            <div class="blog-content" > 
                <div class="blog-image">
                    <img src="images/image.jpg" style="width: 250px;height: 200px;" alt="">
                </div>
                <div style="color: #fff; position: absolute; margin-top: -190px; margin-left: 265px; height: 170px; width: 450px;">
                    <div style=" font-size: 22px;">Blog Name Here</div></br>
                    <div>
                        Description Here Description Here Description Here Description Here
                        Description Here Description Here Description Here Description Here
                    </div>
                    <div style="margin-bottom: 0px; bottom: 0px; position: absolute;">Date: 10/10/2020</div>
                </div>
            </div>

            
            <div style="text-align: center;">
                <button class="btn">View More</button>
            </div>
        </div>
    </div>

    
    <footer>
        <p style="color:white;"> 
            Subcribe to our newsletter
            <div>
                <form style="width: 100px;">
                    <input type="email" id="email" name="email" placeholder="Your email..">
                    <input  type="submit" value="Subcribe">
                </form>
            </di>
            
            Nairobi Kenya <br>
            <a href="terms-of-use.html" style="color: white;">TERMS OF USE</a><br>
            <a href="privacy-and-policy.html" style="color: white;">PRIVACY AND POLICY</a><br>
            Copyright © 2020 E-B-M-S. All rights reserved.
        
        </p>
    </footer>
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