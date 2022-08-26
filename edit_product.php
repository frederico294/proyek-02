<?php include('connection.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM product where id = '$id'";
    $result = mysqli_query($conn, $query);

    if(!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    $data = mysqli_fetch_assoc($result);

    if(!count($data)) {
        echo "<script>alert('Data not found.'); window.location = 'index.php';</script>";
    }
} else {
    echo "<script>alert('Input ID'); window.location = 'index.php';</script>";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sportifun</title>
        <style type = "text/css">
        * {
            font-family: "Trebuchet MS";
        }

        body {
            background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(bg12.jpg);
            background-position: center;
            background-size: cover;
        }
        
        .edit-text {
            text-transform: uppercase;
            color: #34e8eb;
            font-weight: 500;
            text-align: center;
            display: block;
            text-transform: capitalize;
            font-style: bold;
            margin: 10px;
            float: left;
            margin-left: 90px;
            font-size: 40px;
        }

        .base {
            width: 400px;
            padding: 20px;
            margin: 10px;
            margin-top: 50px;
            min-height: 400px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0,0,0,.3);
            padding: 40px 30px;
            margin-left: 80px;
        }

        label {
            margin-top: 10px;
            margin-bottom: 10px;
            float: left;
            text-align: left;
            width: 100%;
            color: #34e8eb;
            font-family: "Nunito";
            font-size: 20px;
        }

        input {
            padding: 6px;
            width: 100%;
            box-sizing: border-box;
            background-color: white;
            border: 2px solid #ccc;
            outline-color: #34e8eb;
            height: 100%;
            border: 2px solid #e7e7e7;
            padding: 15px 20px;
            font-size: 1rem;
            border-radius: 30px;
            background: transparent;
            outline: none;
            transition: .3s;
        }

        button {
            background-color: #34e8eb;
            color: black;
            padding: 10px;
            font-size: 12px;
            border: 0;
            margin-top: 20px;
        }
        </style>
    </head>

    <body>
        <p class = "edit-text">Edit Product <?php echo $data['name_product']; ?></p>
        <form method = "POST" action = "edit_process.php" enctype = "multipart/form-data">
        <section class = "base">
            <div>
                <label>Name</label>
                <input type = "text" name = "name" autofocus = "" required = "" value = "<?php echo $data['name_product']; ?>"/>
                <input type = "hidden" name = "id" value = "<?php echo $data['id']; ?>"/>
            </div>
            <div>
                <label>Description</label>
                <input type = "text" name = "desc"  value = "<?php echo $data['description']; ?>"/>
            </div>
            <div>
                <label>Buy Price</label>
                <input type = "text" name = "buy" required = "" value = "<?php echo $data['buy_price']; ?>"/>
            </div>
            <div>
                <label>Sell Price</label>
                <input type = "text" name = "sell" required = "" value = "<?php echo $data['sell_price']; ?>"/>
            </div>
            <div>
                <label>Image</label>
                <img src = "gambar/<?php echo $data['image_product']; ?>" style = "width: 120px; float: left; margin-botton: 5px;">
                <input type = "file" name = "image"  />
                <i style = "float: left; font-size: 11px; color: red;">Ignore if you do not put a picture</i>
            </div>
            <div>
                <br>
                <button type = "submit">Save</button>
            </div>
        </section>
        </form>
    </body>
</html>