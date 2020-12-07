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
        <h1 style="margin-top:100px; text-align: center;">FAQ</h1>
    </div>

    
    

    <div class="faq-area" id="FAQ" style="margin-top:30px;">
        <div class="text-part" style="margin-bottom: 25px;">
           

            <button class="accordion">Can I check my bill online?</button>
            <div class="panel">
            <p>Yes. You can view your bill on My Vodafone. When your latest bill is available online, we will send you a notification text and email. Please ensure you have a valid email address recorded in your personal details on My Vodafone. </p>
            </div>

            <button class="accordion">Can I receive my bill by email?</button>
            <div class="panel">
            <p>Yes. We can email you a copy of your bill (if the billing period is over 12 months). Please connect with our live chat team through the 'Chat' button on the right of the screen.</p>
            </div>

            <button class="accordion">How do I change my billing format?  </button>
            <div class="panel">
            <p>Log in to My Vodafone and choose 'Account preferences' from the main menu then under 'Invoice' you will be able to change your invoice format type. Please note, choosing 'Email' will mean that you will get a notification advising that your bill is available online.</p>
            </div>
            <button class="accordion">If I change the billing format to Email will I still receive a paper bill?</button>
            <div class="panel">
            <p>No. You will receive an email notifcation to view your bills online. </p>
            </div>

            <button class="accordion">Can I get a paper bill?</button>
            <div class="panel">
            <p>Yes. However, paperless billing is the preferred option. With paperless billing you have access to all of the same information that you receive in a paper bill as well as additional benefits:</br>
•	Detailed analysis </br>
•	Call details </br>
•	Less paper waste </br>
•	Account control </br>
•	Names on bills not just numbers
Please note online bills are also valid for tax and accounts.
If you'd like to change your billing format, simply log into My Vodafone and choose 'Account preferences' and change the option under 'Invoice'.
</p>
            </div>

            <button class="accordion">Can I download a copy of my bill in PDF Format?</button>
            <div class="panel">
            <p>Yes, you can do this on My Vodafone. Simply log in and go to 'Bills & payments' then just click the download icon. </p>
            </div>
            <button class="accordion">Can I view or analyse bills that are more than 12 months old?</button>
            <div class="panel">
            <p>No, bills are only available for analysis or download for the previous 12 months.

</p>
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