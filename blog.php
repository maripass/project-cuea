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
            <?php
                $query="SELECT * FROM blog ORDER BY createdAt DESC";
                $result=mysqli_query($con, $query);
                while($row= $result->fetch_assoc()) {
                    ?>
                        <div class="blog-content" > 
                            <div class="blog-image">
                                <a href="blog-view.php?id=<?php echo $row['blogId'] ?>">
                                    <img src="admin/images/blog/<?php echo $row['image'] ?>" style="width: 250px;height: 200px;" alt="">
                                </a>
                            </div>
                            <div style="color: #fff; position: absolute; margin-top: -190px; margin-left: 280px; height: 170px; width: 450px;">
                                <a href="blog-view.php?id=<?php echo $row['blogId'] ?>">
                                    <div style=" font-size: 22px;"><?php echo $row['name'] ?></div>
                                </a></br>
                                <div>
                                    <?php echo substr($row['description'],0, 250) ?>
                                </div>
                                <div style="margin-bottom: 0px; bottom: 0px; position: absolute;"><?php echo date('M d Y',strtotime($row['createdAt'])) ?></div>
                            </div>
                        </div>
                        <br>
                    <?php
                }
            ?>  
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