
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
            }, (30000));   
        }

        function getapi() { 
            var token = document.getElementById('token');
            // fetch token with ajax call
            fetch('http://localhost/project/consumption-return.php')
                .then(response => response.json())
                .then(data => { 
                var reading = data[0].previous_consumption;
                var new_reading = parseInt(reading)+1;

                // console.log(new_reading++);

                // display received incremented token                
                token.innerHTML=new_reading;

                // send new token by ajax call to be saved in the database
                fetch('http://localhost/project/save-new-consumption.php?new_reading='+new_reading).then(response => response.json())
               
            
            
            }
        );}

    </script>

    
</body>

</html>