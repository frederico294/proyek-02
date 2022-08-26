<?php include('connection.php');

$id = $_GET['id'];
$query = "DELETE FROM product where id = '$id'";
$result = mysqli_query($conn, $query);

if(!$result) {
    die("Query error: " . mysqli_error($conn));
} else {
    echo "<script>alert('Data delete successfully!'); window.location = 'index.php';</script>";
}

?>