
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
            Contact
        </div>
    </section>
    <section>
        <table id="customers">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Date</th>
            </tr>
            <?php
                $query="SELECT * FROM contact ORDER BY createdAt DESC";
                $result=mysqli_query($con, $query);
                if(mysqli_num_rows($result) > 0){
                    while($row= $result->fetch_assoc()) {
                        ?>
                            <tr onclick="window.location.href='contact-response.php'">
                                <td><?php echo $row['firstName'] ?></td>
                                <td><?php echo $row['lastName'] ?></td>
                                <td><?php echo $row['email'] ?></td>
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