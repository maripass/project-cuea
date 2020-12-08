
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
            <tr onclick="window.location.href='contact-response.html'">
                <td>Azziza</td>
                <td>Victoria</td>
                <td>azzizasolmemvictoria@gmail.com</td>
                <td>01-03-2015</td>
            
            </tr >
            <tr onclick="window.location.href='contact-response.html'">
                <td>Pascal</td>
                <td>Heza</td>
                <td>pascal@gmail.com</td>
                <td>01-03-2015</td>
            
            </tr >
            <tr onclick="window.location.href='contact-response.html'">
                <td>Eric</td>
                <td>Balole</td>
                <td>eric@gmail.com</td>
                <td>01-03-2015</td>
            
            </tr >
            <tr onclick="window.location.href='contact-response.html'">
                <td>Anna</td>
                <td>Poline</td>
                <td>anna@gmail.com</td>
                <td>01-03-2015</td>
            
            </tr >

        </table>
    </section>

</body>

</html>