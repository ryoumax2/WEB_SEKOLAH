<?php
$coon = mysqli_connect("localhost", "root", "", "web_sekolah");

// Check connection
if (!$coon) {
    die("Connection failed: " . mysqli_connect_error());
}

function registerasi($data)
{
    global $coon;

    // Sanitize and validate inputs
    $username = strtolower(trim($data["username"]));
    $status = strtolower(trim($data["Status"])); // Ensure "status" is retrieved correctly
    $password = mysqli_real_escape_string($coon, $data["password"]);
    $password2 = mysqli_real_escape_string($coon, $data["password2"]);

    // Mengecek username sudah di guunakan atau belum
    $result = mysqli_query($coon, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Username telah digunakan');</script>";
        return false;
    }

    // Check passwordnya sama atau tidak.
    if ($password != $password2) {
        echo "<script>alert('Konfirmasi password tidak sama');</script>";
        return false;
    }

    // Encrypt password atau mengacak password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // add ke data user ke database
    $query = "INSERT INTO user (username, password, status) VALUES ('$username', '$password', '$status')";
    mysqli_query($coon, $query);

    return mysqli_affected_rows($coon);
}
