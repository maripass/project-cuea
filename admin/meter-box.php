
<?php 
	require_once('query/query.php');
	if (!isset($_SESSION['isAdmin'])) {
        header('location: ../login.php');
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
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
            Meter Box
        </div>
    </section>
    <style>

    </style>

    <section>
        <button class="btn"
            style="float: right; right: 10px; position: absolute; background-color: #2dd36f; margin-top: -60px;">
            <a href="Add-Meter-box.php" style="color: white;"> 
                Add Meter box
            </a>
        </button>
        <table id="customers">
            <tr>
                <th>meter Box Number</th>
                <!-- <th>Users</th> -->
                <th>Active</th>
                <th>Date</th>
                
                
            </tr>
            <?php
                $query="SELECT * FROM meterbox ORDER BY createdAt DESC";
                $result=mysqli_query($con, $query);
                if(mysqli_num_rows($result) > 0){
                    while($row= $result->fetch_assoc()) {
                        ?>
                            <tr onclick="window.location.href='meter-box-update.php'">
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
                            </tr >
                        <?php
                    }
                }
            ?>
            
        </table>
    </section>
</body>

</html>