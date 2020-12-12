
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
            Meter box
        </div>
    </section>
    <style>

    </style>

    <section>
        <table id="customers">
            <tr>
                <th>Meter box number</th>
                <th>Active</th>
                <th>Date</th>
                
                
            </tr>
            <?php
            
                $userId=$_SESSION['userId'];
                $query="SELECT * FROM meterbox WHERE userId='$userId' ORDER BY createdAt DESC";
                $result=mysqli_query($con, $query);
                if(mysqli_num_rows($result) > 0){
                    while($row= $result->fetch_assoc()) {
                        ?>
                            <tr onclick="window.location.href='help-reponse.php'">
                            <td><?php echo $row['meterBoxNumber'] ?></td>
                               <td>
                                   <?php 
                                        if($row['active']) {
                                            echo "On";
                                        } else {
                                            echo "Off";
                                        }   
                                   ?>
                                </td>
                                <td><?php echo date('M d Y',strtotime($row['createdAt'])) ?></td>
                            </tr>
                        <?php
                    }
                }
            ?>
        </table>
    </section>
</body>

</html>