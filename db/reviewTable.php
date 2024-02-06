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


$sql = "create table review(
        id int  primary key auto_increment,
        agent varchar (100),
        review varchar(10000)
  
    )";
$check = $conn->query($sql);
if ($check){
    echo 'table created';
}else{
    echo 'failed';
}
?>
