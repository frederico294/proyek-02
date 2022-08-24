<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportifun</title>
    <style type="text/css">
        * {
            font-family: 'Poppins', sans-serif;
        }

        .add-text {
            text-transform: uppercase;
            color: #34e8eb;
            font-weight: 500;
            font-size: 1.1rem;
            text-align: center;
            display: block;
            text-transform: capitalize;
            font-style: bold;
            margin: 10px;
            float: left;
            margin-left: 150px;
            font-size: 40px;
        }

        body {
            background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(bg12.jpg);
            background-position: center;
            background-size: cover;
        }

        .base {
            width: 400px;
            padding: 20px;
            margin: 10px;
            margin-top: 50px;
            min-height: 400px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, .3);
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
    <p class="add-text">Add Product</p>
    <form method="POST" action="add_process.php" enctype="multipart/form-data">
        <section class="base">
            <div>
                <label>Name</label>
                <input type="text" name="name" autofocus="" required="" />
            </div>
            <div>
                <label>Description</label>
                <input type="text" name="desc" />
            </div>
            <div>
                <label>Buy Price</label>
                <input type="text" name="buy" required="" />
            </div>
            <div>
                <label>Sell Price</label>
                <input type="text" name="sell" required="" />
            </div>
            <div>
                <label>Image</label>
                <input type="file" name="image" />
            </div>
            <div>
                <button type="submit">Save</button>
            </div>
        </section>
    </form>
</body>

</html>