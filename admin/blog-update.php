
<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
        header('location: ../login.php');
    }
    $blogId = $_GET['id'];
    $query   = "SELECT * FROM blog WHERE blogId = '$blogId' LIMIT 1";
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
    <title>Update Blog</title>
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>

    <input type="checkbox" id="check">
    <label for="check">
        <div id="btn">
            <img src="images/icons/menu.svg" width="20px" height="20px" alt="">
        </div>
        <div id="cancel">
            <img src="images/icons/close.svg" width="20px" height="20px" alt="">
        </div>
    </label>
    <?Php include('header.php'); ?>

    <section class="banner">
        <div class="banner-left">
            Update Blog
        </div>
    </section>
    <section>
        <div class="login">
            <form method="POST" enctype="multipart/form-data" name="updateBlogpForm" onsubmit="return updateBlogValidation()">
            <div>
                <?php  include("../errors.php"); ?><br>
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
                <?php  include("../success.php"); ?><br>
            </div>
                <div style="width: 100%;">
                    <input type="text" value="<?php echo $blogData['name'] ?>" name="name" id="name" placeholder="Name">
                    <input type="text" value="<?php echo $blogData['blogId'] ?>" name="blogId" id="blogId" hidden>
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <img src="images/blog/<?php echo $blogData['image'] ?>" alt="" width="100%">
                    <input type="file" name="image" id="image" value="<?php echo $blogData['image'] ?>">
                </div><br><br><br><br>

                
                <div style="width: 100%;">
                    <textarea name="description" id="description" cols="30" rows="10" style="height:250px; padding: 10px;">
                        <?php echo $blogData['description'] ?>
                    </textarea>
                </div><br><br><br><br>
                
                <input type="submit" value="Update Blog" name="updateBlog">  
                        
                
            </form>
            <form method="POST">
                <input type="text" value="<?php echo $blogData['blogId'] ?>" name="blogId" id="blogId" hidden>
                <input type="submit" class="btn" style="background-color: red;" name="deleteBlog" value="Delete Blog">
                        
            </form> 
        </div>
    </section>
    <script src="js/validation.js"></script>
    
</body>
</html>