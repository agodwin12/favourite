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
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $salary = $_POST['salary'];
    $new_img = $_FILES["img"]["name"];
    $old_img = $_POST['old_img'];

    if ($new_img != '') {
        $update_fileName = $_FILES["img"]["name"];
    } else {
        $update_fileName = $old_img;
    }

    if (file_exists("images/" . $_FILES["img"]["name"])) {
        $filename = $_FILES["img"]["name"];
        $_SESSION['status'] = "image already exist" . $filename;
        header("location:Staff.php");
    } else {
        $query = "UPDATE staff SET name='$name',position='$position',address='$address',date_employed='$date',username='$user',password='$password',phoneNumber='$phone',picture='$update_fileName',salary='$salary' WHERE id='$id'";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {

            $_SESSION['status'] = "Updated Successfully";
            header("location:Staff.php");
        } else {
            $_SESSION['status'] = "Data Not Updated";
            header("location:Staff.php");
        }
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
    <link rel="stylesheet" href="update.css">
    <title>Update Data</title>
</head>
<body>
<section class="wrapper">
    <div class="form signup">
        <header>UPDATE STAFF INFO</header>
        <?php
        if(isset($_GET['id'])){
        $id = $_GET['id'];
        $users = "SELECT * FROM staff where id='$id' ";
        $user_run = mysqli_query($conn, $users);
        if (mysqli_num_rows($user_run)>0){
            foreach ($user_run as $user){



                ?>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $user['id'];?>">
            <input type="text" placeholder="Names" name="name" value="<?php echo $user['name'];?>" required>
            <input type="text" placeholder="Position" name="position" value="<?php echo $user['position'];?>" required>
            <input type="text" placeholder="Address" name="address" value="<?php echo $user['address'];?>" required>
            <input type="date" placeholder="date" name="date" value="<?php echo $user['date_employed'];?>" required>
            <input type="text" placeholder="username"  name="user" value="<?php echo $user['username'];?>" required>
            <input type="password" placeholder="password" name="password" value="<?php echo $user['password'];?>" required>
            <input type="text" placeholder="Phone Number" name="phone" value="<?php echo $user['phoneNumber'];?>" required>
            <input type="text" placeholder="Salary" name="salary" value="<?php echo $user['salary'];?>" required>
            <input type="file" name="img" value="<?php echo $user['picture'];?>" required>
            <input type="file" name="img" value="<?php echo $user['picture'];?>" width="100px" required>
            <input type="hidden" name="old_img" value="<?php echo $user['picture'];?>">


            <input type="submit" value="UPDATE" name="update">
        </form>
        <?php
                }
            }
            else{
            ?>
         <h4>No record found</h4>
        <?php
            }
        }
        ?>
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