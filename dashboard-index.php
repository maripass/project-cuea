
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

<body onload="launchTokenFetch();">
<?php include('header.php'); ?>

    <section class="banner">
        <div class="banner-left">
           Consumption
        </div>
    </section>

    <section>
        <div style="border:1px solid red; width:50%;height:100px;margin-left:25%;margin-top:10%;">
            <div style="text-align:center;margin-top:30px;font-size:40px; font-weight:bold;">
               <div id="token"></div> 
            </div>
        </div>
    </section>
    <script>
        function launchTokenFetch() {
            setInterval(() => {
                getapi();
            }, (10000));   
        }

        function getapi() { 
            var token = document.getElementById('token');
            // get token with ajax call
            fetch('http://localhost/project/consumption-return.php')
                .then(response => response.json())
                .then(data => { 
                var reading = data[0].previous_consumption;
                var new_reading = parseInt(reading)+Math.floor(Math.random() * 10);

                // display received random token                
                token.innerHTML=new_reading;

                // send new token by ajax call to be saved in the database
                fetch('http://localhost/project/save-new-consumption.php?new_reading='+new_reading);
                           
            }
        );}

    </script>

    
</body>

</html>