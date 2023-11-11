<?php
session_start();

if (isset($_SESSION['log'])) {
    header("location: ../index.php");
    exit;
}

include '../include/database.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    $tambahuser = mysqli_query($conn, "INSERT INTO login (namalengkap, email, password, notelp, alamat)
    VALUES ('$name', '$email', '$password', '$telp', '$alamat')");
    
    if ($tambahuser) {
        echo "<script>
                Swal.fire({
                    icon: 'success',
                    title: 'Registrasi Berhasil',
                    text: 'Selamat datang, $name!',
                    showConfirmButton: false,
                    timer: 2000
                }).then(function () {
                    window.location.href = 'login.php';
                });
            </script>";
    } else {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal Mendaftar',
                    text: 'Terjadi kesalahan, silakan coba lagi!',
                    showConfirmButton: false,
                    timer: 2000
                }).then(function () {
                    window.location.href = 'register.php';
                });
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md max-w-xs">
        <h2 class="text-2xl mb-4">Registrasi</h2>
        <form method="post">
            <div class="mb-4">
                <label for="name" class="block text-gray-600">Nama</label>
                <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="telp" class="block text-gray-600">Telepon</label>
                <input type="text" id="telp" name="telp" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-gray-600">Alamat Lengkap</label>
                <input type="text" id="alamat" name="alamat" class="w-full px-3 py-2 border rounded">
            </div>
            <button type="submit" name="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Registrasi</button>
        </form>
        <div class="mt-4">
            <p>Sudah punya akun? <a href="login.php" class="text-blue-500">Login disini</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>
