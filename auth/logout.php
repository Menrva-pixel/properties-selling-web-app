<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'success',
                title: 'Logout Berhasil',
                text: 'Anda telah berhasil logout!',
                showConfirmButton: false,
                timer: 2000  
            }).then(function () {
                window.location.href = "../index.php";
            });
        });
    </script>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>
