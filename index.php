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
    </style>
</head>
<body>
    <h1>Sportifun</h1>
    <h2>Data Product</h2>
    <script src="script.js"></script>
</body>
</html>