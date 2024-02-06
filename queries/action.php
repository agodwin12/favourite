<?php
$conn = new PDO('mysql:host=localhost;dbname=favourite', 'root','');

if (isset($_POST['addBtn'])){
    $agent = $_POST['agent'];
    $date= $_POST['date'];
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "INSERT INTO sale  (agent,date,name,quantity,price)VALUES('$agent','$date','$name','$quantity','$price')";
    $res = $conn->query($sql);
    if ($res){
        echo 'good';
    }else{
        echo 'failed';
    }
}



?>