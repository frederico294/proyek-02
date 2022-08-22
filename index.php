<?php 
include('connection.php'); 
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <style type = "text/css">
        * {
            font-family: "Trebuchet MS";
        }
        
        h1 {
            text-transform: uppercase;
            color: #34e8eb;
            float: right;
            font-family: "Marker Felt, fantasy";
            font-size: 40px;
            margin-right: 140px;
        }

        h2 {
            text-transform: uppercase;
            color: #34e8eb;
            margin: 10px;
            margin-bottom: 40px;
            margin-top: 40px;
            font-family: "Marker Felt, fantasy";
            font-size: 50px;
        }

        table {
            border: 1px solid #ddeeee;
            border-collapse: collapse;
            border-spacing: 0;
            width: 60%;
            margin: 10px;
            margin-top: 50px;
            border-width: 5px;
        }

        table thead th {
            background-color: #34e8eb;
            border: 1px solid white;
            color: black;
            padding: 10px;
            text-align: left;
            border-width: 5px;
        }

        table tbody td {
            border: 1px solid white;
            background-color: #34e8eb;
            color: black;
            padding: 10px;
            text-align: left;
            border-width: 5px;
        }

        a {
            background-color: red;
            color: white;
            padding: 10px;
            font-size: 20px;
            text-decoration: none;
            margin: 10px;
        }

        body {
            background-color: black;
        }

        img{
            float: right;
        }
    </style>
</head>
<body>
    <h1>Sportifun</h1>
    <h2>Data Product</h2>
    <a href = "add_product.php">+ &nbsp; Add product</a>
    <br>
    <img src = "phoo2.jpg" alt = "Trulli" width = "500" height = "300">
    <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Buy Price</th>
                    <th>Sell Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM product ORDER BY id ASC";
                    $result = mysqli_query($conn, $query);

                    if(!$result) {
                        die("Query error: " . mysqli_error($conn));
                    }
                    $no = 1;

                    while($row = mysqli_fetch_assoc($result)) {
                ?>

                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['name_product']; ?></td>
                    <td><?php echo substr($row['description'], 0, 200); ?></td>
                    <td>Rp <?php echo number_format($row['buy_price'], 0, ',', '.'); ?></td>
                    <td>Rp <?php echo number_format($row['sell_price'], 0, ',', '.'); ?></td>
                    <td><img style = "width: 120px;" src = "image/<?php echo $row['image_product']; ?>"></td>
                    <td>
                        <a href = "edit_product.php?id=<?php echo $row['id']; ?>">Edit</a><br><br><br>
                        <a href = "delete_process.php?id=<?php echo $row['id']; ?>" onclick = "return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>

                <?php
                   $no++;
                }
                ?>
            </tbody>
        </table>
    <br><br>
        <a href = "logout.php">Logout</a>
        <h1><?php date_default_timezone_set("Asia/Jakarta"); echo date("l, d F Y h:i a"); ?></h1>
    <script src="script.js"></script>
</body>
</html>