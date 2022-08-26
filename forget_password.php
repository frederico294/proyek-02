<?php
include 'connection.php';
error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $sql = "UPDATE users SET password = '$password' WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Wow! Change password completed.')</script>";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                header("Location: login.php");
            } else {
                echo "<script>alert('Woops! Something went wrong.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email does not exists.')</script>";
        }
    } else {
        echo "<script>alert('Password not matched.')</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="stylee1.css">

    <title>Register Form</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Forget Password</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="New Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Change Password</button>
            </div>
            <p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
            <p class="login-register-text">Do not have an account? <a href="register.php">Register Here</a>.</p>
        </form>
    </div>
</body>

</html>