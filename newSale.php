<?
/*
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

*/
/*
if(isset($_POST['addBtn'])){

    $product = $_POST['name'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];

        $sql = "INSERT INTO sales VALUES('','$product','$qty','$price')";
        $check =mysqli_query($conn, $sql);


    if ($check){
        echo 'good';
    }else{
        echo 'failed';
    }

*/









?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Sale</title>
</head>
<body class="bg-dark">
<div class="container">
    <div class="row my-4">
        <div class="col-lg-10 mx-auto">
            <div class="card shadow">
                <div class="card-header">
                    <h4>ADD ITEMS</h4>
                    <div class="right text-end">
                        <h3><a href="admin.php" class="btn btn-danger">HOME</a></h3>
                    </div>
                </div>
                <div class="card-body p-4">


                    <form action="" method="post" id="add_form">
                        <div class="col-md-3 mb-3">
                            <input type="date" class="form-control" name="date" >
                        </div>
                        <div class="col-md-3 mb-3">
                            <input type="text" class="form-control" name="agent" >
                        </div>
                        <div id="show_items">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <input type="text" placeholder="product name" class="form-control" name="name" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <input type="number" placeholder="quantity" class="form-control" name="quantity" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <input type="number" placeholder="price" class="form-control" name="price" required>
                                </div>
                                <div class="col-md-2 mb-3 d-grid">
                                    <button class="btn btn-success add_item-btn sell" type="submit">ADD MORE</button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input type="submit" value="ADD" class="btn btn-primary w-25 add" id="add_btn" name="addBtn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $(".add_item-btn").click(function (e) {
            e.preventDefault();
            $("#show_items").prepend(`                       <div class="row append_item">
                                <div class="col-md-4 mb-3">
                                    <input type="text" placeholder="product name" class="form-control" name="name" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <input type="number" placeholder="quantity" class="form-control" name="quantity" required>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <input type="number" placeholder="price" class="form-control" name="price" required>
                                </div>
                                <div class="col-md-2 mb-3 d-grid">
                                    <button class="btn btn-danger remove_item-btn" type="submit">REMOVE</button>
                                </div>
                            </div>`);

        });
        $(document).on('click', '.remove_item-btn', function (e) {
            e.preventDefault();
            let row_item = $(this).parent().parent();
            $(row_item).remove();
        });
        $("#add_form").submit(function (e) {
            e.preventDefault();
            $("#add_btn").val('adding....');
            $.ajax({
                url:'',
                method:'post',
                data:$(this).serialize(),
                success:function (response) {
                    $("#add_btn").val('add');
                    $("#add_form")[0].reset();
                    $(".append_item").remove();
                    $("#show_alert").html(`<div class="alert alert-success" role="alert">${response}</div>`);
                }
            })

        })
    });
</script>
</body>
</html>
