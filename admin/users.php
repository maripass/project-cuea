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
            Users
        </div>
    </section>
    <section>
        <button class="btn"
            style="float: right; right: 10px; position: absolute; background-color: #2dd36f; margin-top: -60px;">
            <a href="add-user.html" style="color: white;">
                Add user</a>
        </button>
        <table id="customers">
            <tr>
                <th>Email</th>
                <th>Date</th>
                
            </tr>
            <tr onclick="window.location.href='update-user.html'">
                <td>azzizasolmemvictoria@gmail.com</td>
                <td>20-21-2014</td>
                
                </td>
            </tr>
            <tr onclick="window.location.href='update-user.html'">
                <td>allarassem@gmail.com</td>
                <td>13-09-2012</td>
                
                </td>
            </tr>
            <tr onclick="window.location.href='update-user.html'">
                <td>Denembayefelicite@yahoo.com</td>
                <td>01-03-2015</td>
                
                
                </td>
            </tr>
            <tr onclick="window.location.href='update-user.html'">
                <td>victoriasolmem@gmail.com</td>
                <td>12-12-2017</td>
                
                </td>
            </tr>

        </table>
    </section>

</body>

</html>