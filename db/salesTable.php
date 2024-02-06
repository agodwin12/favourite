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


$sql = "create table sale(
        id int  primary key auto_increment,
        agent varchar (100),
        date date,
        name varchar(100),
        quantity varchar(100),
        price varchar(100)
        
     
    )";
$check = $conn->query($sql);
if ($check){
    echo 'table created';
}else{
    echo 'failed';
}
?>
