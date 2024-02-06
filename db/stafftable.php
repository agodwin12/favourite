<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'favourite';
$conn = mysqli_connect('localhost','root','','favourite');
if ($conn){
    echo 'done';
}else{
    echo 'failed';
}


$sql = "create table staff(
        id int  primary key auto_increment,
        name varchar (100),
        position varchar(100),
        address varchar(100),
        date_employed varchar(100),
        username varchar(100),
        password varchar(100),
        phoneNumber varchar(100),
        picture varchar(100),
        salary int
    )";
$check = $conn->query($sql);
if ($check){
    echo 'table created';
}else{
    echo 'failed';
}
?>
