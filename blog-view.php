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
    <?php include('home-header.php') ?>
    <div class="other-banner-area">
        <h1 style="margin-top:100px; text-align: center;"><?php echo $blogData['name'] ?><br><div style="font-size:13px;"><?php echo date('M d Y',strtotime($blogData['createdAt'])) ?></div></h1>

    </div>
    <!-- BLOG  -->
    <div style="width:50%; margin:auto; padding-top:50px; padding-bottom:10px;">
        <img src="admin/images/blog/<?php echo $blogData['image'] ?>" style="width: 100%;" alt="">
        <p><?php echo $blogData['description'] ?></p>
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