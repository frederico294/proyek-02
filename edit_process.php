<?php include('connection.php');

$id = $_POST['id'];
$name = $_POST['name'];
$desc = $_POST['desc'];
$buy = $_POST['buy'];
$sell = $_POST['sell'];
$image = $_FILES['image']['name'];

if($image != "") {
    $allow = array('png', 'jpg');
    $x = explode('.', $image);
    $format = strtolower(end($x));
    $file_tmp = $_FILES['image']['tmp_name'];
    $random_number = rand(1, 999);
    $new_image_name = $random_number . '-' . $image;

    if(in_array($format, $allow) === true) {
        move_uploaded_file($file_tmp, 'image/' . $new_image_name);

        $query = "UPDATE product SET name_product = '$name', description = '$desc', buy_price = '$buy', sell_price = '$sell', image_product = '$new_image_name' WHERE id = '$id'";
        $result = mysqli_query($conn, $query);

        if(!$result) {
            die("Query error: " . mysqli_error($conn));
        } else {
            echo "<script>alert('Data change successfully!'); window.location = 'index.php';</script>";
        }

    } else {
        echo "<script>alert('Image format only can jpg and png!'); window.location = 'edit_product.php';</script>";
    }
} else {
    $query = "UPDATE product SET name_product = '$name', description = '$desc', buy_price = '$buy', sell_price = '$sell' WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        die("Query error: " . mysqli_error($conn));
    } else {
        echo "<script>alert('Data change successfully!'); window.location = 'index.php';</script>";
    }
}
