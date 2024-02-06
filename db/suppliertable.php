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


$sql = "create table suppliers(
        id int  primary key auto_increment,
        name varchar (100),
        product varchar(100),
        address varchar(100),
        phone varchar(100),
        email varchar(100),
        picture varchar(100)
        
     
    )";
$check = $conn->query($sql);
if ($check){
    echo 'table created';
}else{
    echo 'failed';
}
?>
