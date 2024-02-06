<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>OUR SERVICES</title>
    <link rel="stylesheet" href="css/userHome.css">
</head>
<body>
<div class="container">
    <h1 class="heading">HOME</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/sell.png" alt="">
            <h3><a href="newSale.php" class="btn">SELL</a></h3>

        </div>
        <div class="box">
            <img src="images/review.png" alt="">
            <h3><a href="review.php" class="btn">TAKE A REVIEW</a></h3>

        </div>
        <div class="box">
            <img src="images/salesrecord.jpg" alt="">
            <h3><a href="userSale.php" class="btn">VIEW SALES</a></h3>

        </div>
        <div class="box">
            <img src="images/store.png" alt="">
            <h3><a href="availaibleProducts.php" class="btn">AVAILAIBLE PRODUCTS</a></h3>

        </div>
        <div class="box">
            <img src="images/settings.png" alt="">
            <h3><a href="userUpdate.php" class="btn">UPDATE PROFILE</a></h3>

        </div>
        <div class="box">
            <img src="images/logout.jpg" alt="">
            <h3> <a href="logout.php" class="btn">LOGOUT</a></h3>

        </div>
    </div>





</div>
</body>
</html>