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
        <form action="login_act.php" method="post">
            <div class="mb-4">
                <label for="username" class="block text-gray-600">Username</label>
                <input type="text" id="username" name="username" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-600">Password</label>
                <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Login</button>
        </form>
        <div class="mt-4">
            <p>Belum punya akun? <a href="register.php" class="text-blue-500">Registrasi disini</a></p>
        </div>
    </div>
</body>
</html>
