<?php
session_start();

$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'favourite';
$conn = mysqli_connect('localhost','root','','favourite');
if ($conn){
    echo '';
}else{
    echo '';
}



if(isset($_POST['signup'])){
   $name = $_POST['name'];
    $position = $_POST['position'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $salary = $_POST['salary'];
    $filename = $_FILES["file"]["name"];
    $tmpName = $_FILES["file"]["tmp_name"];
    $newfilename =uniqid(). "-" . $filename;

    move_uploaded_file($tmpName, 'images/'. $newfilename);

    $query ="INSERT INTO staff VALUES('','$name','$position','$address','$date','$user','$password','$phone','$newfilename','$salary')";
   $check =  mysqli_query($conn, $query);
    if ($check){
        echo '';
        header("location:Staff.php");
    }else{
        echo '';
    }




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
        <header>NEW STAFF</header>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Names" name="name" required>
            <input type="text" placeholder="Position" name="position" required>
            <input type="text" placeholder="Address" name="address" required>
            <input type="date" placeholder="date" name="date" required>
            <input type="text" placeholder="username"  name="user" required>
            <input type="password" placeholder="password" name="password" required>
            <input type="text" placeholder="Phone Number" name="phone" required>
            <input type="text" placeholder="Salary" name="salary" required>
            <input type="file" name="file" required>

            <div class="checkbox">
                <input type="checkbox" id="signupcheck">
                <label for="">I accept all rules of the company</label>
            </div>

            <input type="submit" value="ENROLL" name="signup">
        </form>
    </div>


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