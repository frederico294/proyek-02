<?php include('connection.php');

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

        $query = "INSERT INTO product (name_product, description, buy_price, sell_price, image_product) VALUES ('$name', '$desc', '$buy', '$sell', '$new_image_name')";
        $result = mysqli_query($conn, $query);

        if(!$result) {
            die("Query error: " . mysqli_error($conn));
        } else {
            echo "<script>alert('Data added successfully!'); window.location = 'index.php';</script>";
        }

    } else {
        echo "<script>alert('Image format only can jpg and png!'); window.location = 'add_product.php';</script>";
    }
} else {
    $query = "INSERT INTO product (name_product, description, buy_price, sell_price) VALUES ('$name', '$desc', '$buy', '$sell')";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        die("Query error: " . mysqli_error($conn));
    } else {
        echo "<script>alert('Data added successfully!'); window.location = 'index.php';</script>";
    }
}

?>