<?php 
    require_once('config/db.php');
    $blogId = $_GET['id'];
	$query   = "SELECT * FROM blog WHERE blogId = '$blogId'";
	$results = mysqli_query($con, $query);
	if ($results) {
		$blogData = $results->fetch_assoc();		
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog view || EBMS</title>
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
        <h1 style="margin-top:100px; text-align: center;"><?php echo $blogData['name'] ?></h1>
        <p><?php echo date('M d Y',strtotime($blogData['createdAt'])) ?></p>
    </div>
    <!-- BLOG  -->
    <div class="blog-area" id="Blog" style="margin-top:30px;">
        
        <div class="text-part" style="margin-bottom: 25px;">

            <div class="blog-content" > 
                <img src="admin/images/blog/<?php echo $blogData['image'] ?>" style="width: 100%;" alt="">
                <p><?php echo $blogData['description'] ?></p>
            </div>
                        
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