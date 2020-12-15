
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
                <th>Meter Box Number</th>
                <th>Address</th>
                <th>House Number</th>
                <th>Active</th>
                <th>Date</th>
                
                
            </tr>
            <?php
            
                $userId=$_SESSION['userId'];
                $query="SELECT * FROM meterbox WHERE userId='$userId' ORDER BY createdAt DESC";
                $result=mysqli_query($con, $query);
                while($row= $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['meterBoxNumber'] ?></td>
                            <td>
                                <?php
                                    if($row['address']) {
                                        echo $row['address'];
                                    }
                                ?>
                            </td>
                            <td>
                                <?php
                                    if($row['houseNumber']) {
                                        echo $row['houseNumber'];
                                    }
                                ?>
                            </td>
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
            ?>
        </table>
    </section>
</body>

</html>