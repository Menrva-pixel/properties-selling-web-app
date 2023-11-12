<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
    <?php
    include '../include/navbar.php';
    ?>
    <header class="text-center py-8 mt-8">
        <h1 class="mb-4 text-3xl md:text-5xl tracking-tight font-extrabold text-gray-700 text-center drop-shadow-md" data-aos="fade-right" data-aos-duration="1000">About Us</h1>
    </header>
    <div class="w-1/2 mx-auto">
        <img src="../public/images/prop.jpg" alt="prop" class="">
    </div>
    <section class="mx-auto w-1/2 p-4 text-xl my-4">
    <p class="text-gray-800 font-semibold">Kami adalah perusahaan properti yang berfokus pada menyediakan hunian berkualitas untuk semua. Dengan pengalaman lebih dari 10 tahun, kami telah berhasil membantu ribuan pelanggan menemukan rumah impian mereka. Kami berkomitmen untuk memberikan pelayanan terbaik, dan kami selalu berusaha untuk mengembangkan properti yang ramah lingkungan dan berkelanjutan.</p>

        <h2 class="text-3xl font-black mb-4 my-4">Visi Kami</h2>
        <p class="text-gray-700/80 font-bold">Visi perusahaan adalah menjadi pemimpin dalam industri properti dengan memberikan hunian berkualitas untuk semua.</p>

        <h2 class="text-3xl font-black my-4">Misi Kami</h2>
        <ul class="list-disc list-inside text-gray-700/80 font-bold">
            <li>Menghadirkan berbagai pilihan properti berkualitas kepada pelanggan.</li>
            <li>Memberikan pelayanan terbaik dan pengalaman terbaik kepada pelanggan.</li>
            <li>Mengembangkan properti yang ramah lingkungan dan berkelanjutan.</li>
            <li>Menjadi mitra yang berkomitmen untuk pertumbuhan ekonomi lokal.</li>
        </ul>
    </section>

    <?php 
    include '../include/footer.php';
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script src="../js/dataLoader.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
