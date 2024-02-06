<?php
session_start();

$conn = mysqli_connect("localhost","root","","favourite") ;

if(isset($_POST['login'])){
    $user = $_POST["user"];
    $password = $_POST["password"];

    $sql = mysqli_query($conn, "SELECT count(*) as total from staff where username = '".$user."' and password = '".$password."'") or die(
    mysqli_error($conn));
    $rw = mysqli_fetch_array($sql);



}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <title>ACCESS</title>
</head>
<body>
<section class="wrapper">
    <div class="form signup">
        <header>SIGN UP</header>
        <form action="" method="post">
            <input type="text" placeholder="username" required name="user">
     <!--       <input type="email" placeholder="email" required> -->
            <input type="password" placeholder="password" required name="password">
        <!--    <input type="file" required>
            <div class="checkbox">
                <input type="checkbox" id="signupcheck">
                <label for="">I accept all rules of the company</label>
            </div> -->
            <input type="submit" value="SIGN UP" name="login">
        </form>
    </div>


    <!--<div class="form login">
        <header>SIGN IN</header>
        <form action="" method="post">

            <input type="text" placeholder="username" required name="user">
            <input type="password" placeholder="password" required name="password">
            <a href="">Forgot password?</a>
            <input type="submit" value="SIGN IN" name="login">
        </form>
    </div>-->
</section>


<script>
    const wrapper = document.querySelector(".wrapper"),
        signupHeader=document.querySelector(".signup header"),
        loginHeader=document.querySelector(".login header");

    loginHeader.addEventListener("click", ()=>{
        wrapper.classList.add("active");
    } )
    signupHeader.addEventListener("click", ()=>{
        wrapper.classList.remove("active");
    } )


</script>
</body>
</html>