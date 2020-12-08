
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
            Meter box
        </div>
    </section>
    <style>

    </style>

    <section>
        <button class="btn"
            style="float: right; right: 10px; position: absolute; background-color: #2dd36f; margin-top: -60px;">
            <a href="Add-Meter-box.html" style="color: white;"> 
                Add Meter box
            </a>
        </button>
        <table id="customers">
            <tr>
                <th>meter-box</th>
                <th>Users</th>
                <th>Active</th>
                <th>Date</th>
                
                
            </tr>
            <tr onclick="window.location.href='update-meter-box.html'">
                <td>12345679876</td>
                <td>106078</td>
                <td>on</td>
                <td>Date</td>
                
            </tr>
            <tr onclick="window.location.href='update-meter-box.html'">
                <td>25638686322</td>
                <td>200721</td>
                <td>on</td>
                <td>Date</td>
                
            </tr >
            <tr onclick="window.location.href='update-meter-box.html'">
                <td>30007654321</td>
                <td>435903</td>
                <td>off</td>
                <td>Date</td>
                
            </tr>

        </table>
    </section>
</body>

</html>