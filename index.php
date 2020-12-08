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
    <div class="banner-area" id="Home"></div>

    <div class="about-area" id="About">
        <div class="text-part">
            <h1>About</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ipsam voluptate veritatis, ratione in architecto minima, amet,
                libero at accusantium asperiores
                repudiandae voluptates reprehenderit delectus fuga sunt dolores soluta? Vitae, asperiores!

            
            </p>
            <div style="text-align: center;">
                <button class="btn">Read More</button>
            </div>
        </div>
    </div>
    <div class="service-area" id="Services">
        <div class="text-part">
            <h1>Services</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ipsam voluptate veritatis, ratione in architecto minima, amet,
                libero at accusantium asperiores
                repudiandae voluptates reprehenderit delectus fuga sunt dolores soluta? Vitae, asperiores!

                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ipsam voluptate veritatis, ratione in architecto minima, amet,
                libero at accusantium asperiores
                repudiandae voluptates reprehenderit delectus fuga sunt dolores soluta? Vitae, asperiores!

                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ipsam voluptate veritatis, ratione in architecto minima, amet,
                libero at accusantium asperiores
                repudiandae voluptates reprehenderit delectus fuga sunt dolores soluta? Vitae, asperiores!

                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Ipsam voluptate veritatis, ratione in architecto minima, amet,
                libero at accusantium asperiores
                repudiandae voluptates reprehenderit delectus fuga sunt dolores soluta? Vitae, asperiores!
            </p>
        </div> 
    </div>

    


    <!-- BLOG  -->
    <div class="blog-area" id="Blog">
        <div class="text-part" style="margin-bottom: 25px;">
            <h1>BLOG</h1>
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