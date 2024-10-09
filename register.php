<?php
require 'route.php';

if (isset($_POST["register"])) {
    if (registerasi($_POST) > 0) {
        // Redirect to login after successful registration
        header("Location: login.php");
        exit;
    } else {
        echo "<script>alert('Terjadi kesalahan: " . mysqli_error($coon) . "');</script>";
    }
}

if (isset($_POST["logout"])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registrasi.css">
</head>

<body>
    <div class="container">
        <div class="border">
            <form action="" method="post">
                <h1>Register</h1>

                <ul>
                    <li>
                        <label for="username">Username: </label>
                        <br>
                        <input type="text" name="username" id="username" required>
                    </li>
                    <li>
                        <label for="Status">Status: </label>
                        <br>
                        <input type="text" name="Status" id="Status" placeholder="Guru / Murid" required>
                    </li>
                    <li>
                        <label for="password">Password: </label>
                        <br>
                        <input type="password" name="password" id="password" placeholder="********" required>
                    </li>
                    <li>
                        <label for="password2">Konfirmasi Password: </label>
                        <br>
                        <input type="password" name="password2" id="password2" placeholder="********" required>
                    </li>
                    <li>
                        <button type="submit" name="register">Submit</button>
                        <br>
                        <br>
                        <button type="submit" name="logout" class="batal"><a href="login.php">Batal</a></button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>

</html>