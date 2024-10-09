<?php
require 'route.php';

if (isset($_POST["submit"])) {
    $username = mysqli_real_escape_string($coon, $_POST["username"]);
    $password = $_POST["password"];

    // Check credentials
    $result = mysqli_query($coon, "SELECT * FROM user WHERE username = '$username'");
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Start session and store user info
            session_start();
            $_SESSION['username'] = $user['username'];
            $_SESSION['status'] = $user['status'];

            // Redirect based on status
            if ($user['status'] === 'guru') {
                header("Location: about.php");
                echo "
                    '<script>
                    alert('Selamat datang di Menu Guru');
                    </script>'
                ";
                exit;
            } else if ($user['status'] === 'murid') {
                header("Location: about.php");

                exit;
            }
        } else {
            echo "<script>alert('Password salah');</script>";
        }
    } else {
        echo "<script>alert('Username tidak Ada silahkan registerasi');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <div class="border">
            <form action="" method="post"> <!-- Fixed the typo from 'from' to 'form' -->
                <h1>Login</h1>

                <ul>
                    <li>
                        <label for="username">Username: </label>
                        <br>
                        <input type="text" name="username" id="username" required>
                    </li>
                    <li>
                        <label for="password">Password: </label>
                        <br>
                        <input type="password" name="password" id="password" placeholder="********" required>
                    </li>
                    <li>
                        <a href="register.php">Register!</a> <!-- Link to register.php -->
                    </li>
                    <li>
                        <button type="submit" name="submit">Submit</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</body>

</html>