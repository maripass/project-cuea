
<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
        header('location: ../login.php');
    }
    $id = $_GET['id'];
    $query   = "SELECT * FROM newsletterresponse WHERE newLetterResponseId = '$id'";
	$results = mysqli_query($con, $query);
	if (mysqli_num_rows($results) == 1) {
		$newsletterData = $results->fetch_assoc();		
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Newsletter</title>
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
            Newsletter
        </div>
    </section>
    <section>
        <div class="login">
            <form>
                <div style="width: 100%;">
                    <input type="text" name="name" placeholder="Name" id="name" value="<?php echo $newsletterData['name'] ?>" disabled>
                </div><br><br><br><br>

                <div style="width: 100%;">
                    <textarea name="description" id="description" style="height:300px" disabled>
                    <?php echo $newsletterData['message'] ?>
                    </textarea>
                </div><br><br><br><br>
    
            </form>
        </div>
    </section>

    <script src="js/validation.js"></script>

</body>
</html>