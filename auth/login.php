<?php
session_start();

if (!isset($_SESSION['log'])) {
    header("location: ../index.php");
} else {
}
;

include '../include/database.php';
date_default_timezone_set('Asia/Jakarta');
$timenow = date("Y-m-d H:i:s");

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $queryuser = mysqli_query($conn, "SELECT * FROM login WHERE email = '$email'");
    $cariuser = mysqli_fetch_assoc($queryuser);

    if (password_verify($password, $cariuser['password'])) {
        $_SESSION['id'] = $cariuser['id'];
        $_SESSION['role'] = $cariuser['role'];
        $_SESSION['notelp'] = $cariuser['notelp'];
        $_SESSION['name'] = $cariuser['namalengkap'];
        $_SESSION['log'] = "Logged";
        header("location: ../index.php");
    } else {
        echo "
        <script>
        alert('Username atau Password Anda Salah');
        document.location.href = 'login.php';
        </script>
        <meta http-equiv='refresh' content='0; url=login.php'>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md max-w-xs">
        <h2 class="text-2xl mb-4">Login</h2>
        <form method="post">
            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded">
            </div>
            <button type="submit" name="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Login</button>
        </form>
        <div class="mt-4">
            <p>Belum punya akun? <a href="register.php" class="text-blue-500">Registrasi disini</a></p>
        </div>
    </div>
</body>
</html>
