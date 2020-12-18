
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

<body onload="getapi();">
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

$url = "http://localhost/project/file.json"; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

echo $characters[0]->gender;
                    $userId = $_SESSION['userId'];
                    $meterCostVar = 0;
                    $query3="SELECT * FROM metercost";
                    $result3=mysqli_query($con, $query3);
                    while($meterCost= $result3->fetch_assoc()) {
                        $meterCostVar= $meterCost['costPerKwatt'];
                    }
                    $query="SELECT * FROM meterbox WHERE userId='$userId'";
                    $result1=mysqli_query($con, $query);
                    if(mysqli_num_rows($result1) > 0){
                        while($meterBoxData= $result1->fetch_assoc()) {	
                            $meterBoxId = $meterBoxData['meterBoxId'];
                            $query2="SELECT * FROM consumption WHERE meterBoxId='$meterBoxId'";
                            $result2=mysqli_query($con, $query2);
                            if(mysqli_num_rows($result2) > 0){
                                while($consumptionData= $result2->fetch_assoc()) {	
                                    echo  $consumptionData['currentMeterReading'];
                                    // ignore_user_abort(true);//Run in persistent mode 
                                    // set_time_limit(0);
                                    
                                    // while (true) 
                                    // { 
                                    //   echo "Current timestamp is: "; 
                                    //   flush();
                                    //   sleep( 10 );
                                    // } 
                                } 
                            } else {
                                
                                $queryInsert="INSERT INTO consumption (meterBoxId, currentMeterReading, previoustMeterReading, meterCostId) VALUES('$meterBoxId', 0, 0, 1)";
                                $getResult=mysqli_query($con, $queryInsert);
                            }     
                        }
                    } else {
                        echo "Do not have a meter box."; 
                    }
                ?>
               <!-- <div id="token"></div>  -->
            </div>
        </div>
    </section>
    <script>
        // var x = 0;
        // var token = document.getElementById('token');
        
        function launchTokenFetch() {

            setInterval(() => {
                getapi();
        }, (5000));

            // token.innerHTML=x++;




            





            // fetch token with ajax call


            
  





            // increment received token

            // display received incremented token

            // send new token by ajax call to be saved in the database





        }














        // Defining async function 
async function getapi() { 




    // api url 
    const api_url =  "http://localhost/project/file.json"; 
    
    // Storing response 
    const response = await fetch(api_url); 

    const formatted_data = response.json();



    for (x in formatted_data) {
  alert(x);
}



 
    
    console.log(formatted_data[0].gender); 


    // Storing data in form of JSON 
    // var data = await response.json(); 
    // console.log(data); 
    // if (response) { 
    //     hideloader(); 
    // } 
    // console.log(data); 

    
}

    </script>

    
</body>

</html>