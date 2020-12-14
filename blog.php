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
        <h1 style="margin-top:100px; text-align: center;">Blog</h1>
    </div>
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