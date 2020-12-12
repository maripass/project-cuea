
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
               <div id="token">0000100</div> 
            </div>
        </div>
    </section>
    <script>
        setInterval(() => {
            incrementToken();
            // var consumption=getElementById('consumption').innerHTML ="1";
        }, (3000));
        function incrementToken() {
            
            let x++;
            console.log(x);
        }
    </script>
</body>

</html>