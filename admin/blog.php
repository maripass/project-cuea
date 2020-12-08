
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
            Blog
        </div>
    </section>
    <section>
        <button class="btn"
            style="float: right; right: 10px; position: absolute; background-color: #2dd36f; margin-top: -60px;">
            <a href="blog-add.html" style="color: white;">
                Add blog</a>
        </button>
        <table id="customers">
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Date</th>
            </tr>
            <tr onclick="window.location.href='blog-update.html'">
                <td>Name1</td>
                <td>Category1</td>
                <td>20-21-2014</td>
        
            </tr>
            <tr onclick="window.location.href='blog-update.html'">
                <td>Name2</td>
                <td>Category2</td>
                <td>21-12-2015</td>
                
            </tr>
            <tr onclick="window.location.href='blog-update.html'" >
                <td>Name3</td>
                <td>Category3</td>
                <td>22-11-2016</td>
        
            </tr>
            <tr onclick="window.location.href='blog-update.html'">
                <td>Name4</td>
                <td>Category4</td>
                <td>12-12-2017</td>
                
            </tr>

        </table>
    </section>

</body>

</html>