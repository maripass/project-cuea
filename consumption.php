
<?php 
	require_once('config/db.php');
	
	if (!isset($_SESSION['userId'])) {
		header('location: login.php');
  }
  
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/dashboard.css">
    
</head>

<body>
<?php include('header.php'); ?>

    <section class="banner">
        <div class="banner-left">
           Consumption
        </div>
    </section>
    <style>

    </style>

    <section>
        <div style="border:1px solid red; width:50%;height:100px;margin-left:25%;margin-top:10%;">
            <div style="text-align:center;margin-top:30px;font-size:40px; font-weight:bold;">
                <?php 
                    $userId = $_SESSION['userId'];
                    $query="SELECT * FROM meterbox WHERE userId='$userId' LIMIT 1";
                    $result=mysqli_query($con, $query);
                    if($result) {
                        $query2="SELECT * FROM consumption WHERE userId='$userId' LIMIT 1";
                        $result2=mysqli_query($con, $query2);
                        if($result2) {
                            echo "YES";
                        }
                    }
                ?>
               <!-- <div id="token"></div>  -->
            </div>
        </div>
    </section>
    <script>
        var x = 0;
        var token = document.getElementById('token');
        setInterval(() => {
            incrementToken();
        }, (5000));
        function incrementToken() {
            token.innerHTML=x++;
        }
    </script>

    
</body>

</html>