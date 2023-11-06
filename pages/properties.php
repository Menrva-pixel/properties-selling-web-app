<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Property Market</title>
    
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="../css/style.css"/>
    </head>
<body>
    <!--------------Navbar------------------------>
    <?php
    include '../include/navbar.php';
    ?>

    <section>
        <div class="container mx-auto">
            <h1 class="text-2xl font-semibold mb-4">List Perumahan</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" id="houses-container">         
            </div>
        </div>
    </section>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script src="../js/dataLoader.js"></script>
</body>
</html>