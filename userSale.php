<?php
session_start();

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


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="css/admin.css">

    <title>Total Sales</title>
</head>
<body>

    <!-- NAVBAR -->
    <div class="topic">
        <h1 style="text-align: center">Sales Records</h1>
    </div>
    <!-- MAIN -->
    <main>
        <table id="example" class="table table-striped" style="width:100%" >
            <thead>
            <tr>
                <th>Agent Name</th>
                <th>Date</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Bepanda</td>
                <td>21-03-1995</td>
                <td>tigerNixon</td>

            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Bepanda</td>
                <td>21-03-1995</td>
                <td>tigerNixon</td>

            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Bepanda</td>
                <td>21-03-1995</td>
                <td>tigerNixon</td>

            </tr>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Bepanda</td>
                <td>21-03-1995</td>
                <td>tigerNixon</td>

            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th>Agent Name</th>
                <th>Date</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
            </tfoot>
        </table>


    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->


<script src="js/adminscript.js"></script>
<script>
    new DataTable('#example');

</script>

</body>
</html>