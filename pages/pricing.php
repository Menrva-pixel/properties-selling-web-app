<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Properties Pricing</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<?php
    include '../include/navbar.php';
    ?>

    <div class="bg-gray-200 w-auto overflow-hidden">
            <div class="relative">
                <div class="absolute top-2 left-2 lg:top-10 lg:left-10 bg-white p-4 rounded z-10">
                    <h1 class="xl:text-2xl font-semibold">Special Offer!</h1>
                    <p class="text-xs lg:text-lg">Hemat hingga 15% untuk pembelian rumah hari ini.</p>
                </div>
                <div class="w-screen bg-cover">
                <img src="../public/images/banner-1.jpg" alt="Promo 1" class="w-full relative">
                <div class="absolute top-0 left-0 w-full h-full bg-gray-800/60"></div>

            </div>
        </div>
    </div>
    


    <!--- kontak --->  
    <div id="bottom-banner" class="fixed bottom-0 left-0 z-50 flex justify-between w-full p-4 border-t border-gray-200 bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
        <div class="flex items-center mx-auto">
            <p class="flex items-center text-sm font-normal text-gray-500 dark:text-gray-400">
                <span class="inline-flex p-1 mr-3 bg-gray-200 rounded-full dark:bg-gray-600 w-6 h-6 items-center justify-center">
                    <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M18.435 7.546A2.32 2.32 0 0 1 17.7 5.77a3.354 3.354 0 0 0-3.47-3.47 2.322 2.322 0 0 1-1.776-.736 3.357 3.357 0 0 0-4.907 0 2.281 2.281 0 0 1-1.776.736 3.414 3.414 0 0 0-2.489.981 3.372 3.372 0 0 0-.982 2.49 2.319 2.319 0 0 1-.736 1.775 3.36 3.36 0 0 0 0 4.908A2.317 2.317 0 0 1 2.3 14.23a3.356 3.356 0 0 0 3.47 3.47 2.318 2.318 0 0 1 1.777.737 3.36 3.36 0 0 0 4.907 0 2.36 2.36 0 0 1 1.776-.737 3.356 3.356 0 0 0 3.469-3.47 2.319 2.319 0 0 1 .736-1.775 3.359 3.359 0 0 0 0-4.908ZM8.5 5.5a1 1 0 1 1 0 2 1 1 0 0 1 0-2Zm3 9.063a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm2.207-6.856-6 6a1 1 0 0 1-1.414-1.414l6-6a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="sr-only">Discount</span>
                </span>
                <span>Dapatkan diskon hingga 5% <a href="../auth/register.php" class="flex items-center ml-0 text-sm font-medium text-blue-600 md:ml-1 md:inline-flex dark:text-blue-500 hover:underline">Daftar sekarang <svg class="w-3 h-3 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
    </svg></a></span>
            </p>
        </div>
        <div class="flex items-center">
            <button data-dismiss-target="#bottom-banner" type="button" class="flex-shrink-0 inline-flex justify-center w-7 h-7 items-center text-gray-400 hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 dark:hover:bg-gray-600 dark:hover:text-white">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
                <span class="sr-only">Close banner</span>
            </button>
        </div>
    </div>

    <!-----Pricing---->
    <section class="py-12" id="pricing">
        <h2 class="text-3xl font-extrabold text-gray-800 text-center">Marketing Hub</h2>
        <div class="container mx-auto mt-8 p-4 md:p-0">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-0">
                <div
                    class="p-4 bg-white border border-gray-400 text-center flex flex-col justify-between space-y-10">
                    <h3 class="text-xl font-semibold flex flex-row items-center justify-center gap-2">
                        <svg width="18px" height="18px" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1"
                            xmlns="http://www.w3.org/2000/svg" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #020202;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <polyline class="cls-1" points="6 22.5 4 22.5 4 8.5"></polyline>
                                <polyline class="cls-1" points="23 10.5 12 1.5 1 10.5"></polyline>
                                <line class="cls-1" x1="15" y1="22.5" x2="21" y2="22.5"></line>
                                <line class="cls-1" x1="8" y1="22.5" x2="14" y2="22.5"></line>
                                <line class="cls-1" x1="15" y1="19.5" x2="21" y2="19.5"></line>
                                <line class="cls-1" x1="8" y1="19.5" x2="14" y2="19.5"></line>
                                <line class="cls-1" x1="15" y1="16.5" x2="21" y2="16.5"></line>
                                <line class="cls-1" x1="15" y1="13.5" x2="21" y2="13.5"></line>
                            </g>
                        </svg>
                        Rumah</h3>
                    <div>
                        <p class="text-gray-700 text-xs">Mulai dari</p>
                        <p class="text-gray-600/90 text-2xl my-2 font-bold">Rp <a
                                class="text-4xl font-semibold">400</a>jt
                        </p>
                        <p class="text-gray-800/70 text-xs mb-6">*Jakarta Pusat</p>
                        <p class="text-gray-800/70 text-xs">Discount <a
                                class="text-lg font-semibold text-red-600">10%</a> untuk pembelian sekarang.</p>
                        <p class="text-gray-800/70 text-xs">Cicilan <a class="font-semibold text-red-600 text-lg">5
                            </a><a class="text-gray-600 font-semibold">hingga</a> <a
                                class="font-semibold text-red-600 text-lg">20</a> tahun.</p>
                    </div>
                </div>
                <div
                    class="p-4 bg-white border border-gray-400 text-center flex flex-col justify-between space-y-10">
                    <h3 class="text-xl font-semibold flex flex-row items-center justify-center gap-2">
                        <svg fill="#000000" width="18px" height="18px" viewBox="-9.22 0 122.88 122.88" id="Layer_1"
                            data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>apartment</title>
                                <path
                                    d="M3.55,119.32H0v3.56H92.49v-3.56h-2v-17a1.22,1.22,0,0,0-1.22-1.22H75.54a1.22,1.22,0,0,0-1.22,1.22v17H48.47V95.23a1.63,1.63,0,0,0-1.63-1.62H19.94a1.63,1.63,0,0,0-1.63,1.62v24.09H0V2.6A2.79,2.79,0,0,1,.82.85h0a2.84,2.84,0,0,1,2-.84H63.93a2.82,2.82,0,0,1,2,.84l.13.13a2.83,2.83,0,0,1,.72,1.89V34.57H102a2.39,2.39,0,0,1,1.69.7h0a2.36,2.36,0,0,1,.7,1.68v84.29a1.63,1.63,0,0,1-1.63,1.63H92.49v-3.56H101V38H66.79v81.34H63.23V3.56H3.55V119.32Zm84.54,0H76.76V103.5H88.09v15.82ZM85.45,45h8.81c.07,0,.13.1.13.22v5.71c0,.1-.06.21-.13.21H85.45c-.07,0-.13-.09-.13-.21V45.22c0-.12.06-.22.13-.22Zm0,39.6h8.81c.07,0,.13.1.13.21v5.71c0,.11-.06.22-.13.22H85.45c-.07,0-.13-.1-.13-.22V84.81c0-.11.06-.21.13-.21Zm-14.85,0h8.8c.08,0,.14.1.14.21v5.71c0,.11-.06.22-.14.22H70.6c-.08,0-.14-.1-.14-.22V84.81c0-.11.06-.21.14-.21ZM85.45,71.4h8.81c.07,0,.13.1.13.22v5.71c0,.11-.06.22-.13.22H85.45c-.07,0-.13-.1-.13-.22V71.62c0-.13.06-.22.13-.22Zm0-13.2h8.81c.07,0,.13.1.13.22v5.71c0,.11-.06.22-.13.22H85.45c-.07,0-.13-.1-.13-.22V58.42c0-.12.06-.22.13-.22ZM70.6,45h8.8c.08,0,.14.1.14.22v5.71c0,.1-.06.21-.14.21H70.6c-.08,0-.14-.09-.14-.21V45.22c0-.12.06-.22.14-.22Zm0,26.4h8.8c.08,0,.14.1.14.22v5.71c0,.11-.06.22-.14.22H70.6c-.08,0-.14-.1-.14-.22V71.62c0-.13.06-.22.14-.22Zm0-13.2h8.8c.08,0,.14.1.14.22v5.71c0,.11-.06.22-.14.22H70.6c-.08,0-.14-.1-.14-.22V58.42c0-.12.06-.22.14-.22ZM45.21,119.32H21.57V96.86H45.21v22.46ZM12.13,12.52h9.58a.28.28,0,0,1,.27.27v9.59a.28.28,0,0,1-.27.27H12.13a.28.28,0,0,1-.27-.27V12.79a.28.28,0,0,1,.27-.27Zm32.94,0h9.58a.28.28,0,0,1,.27.27v9.59a.28.28,0,0,1-.27.27H45.07a.28.28,0,0,1-.27-.27V12.79a.28.28,0,0,1,.27-.27Zm-16.47,0h9.58a.28.28,0,0,1,.27.27v9.59a.28.28,0,0,1-.27.27H28.6a.28.28,0,0,1-.27-.27V12.79a.28.28,0,0,1,.27-.27ZM12.13,33.28h9.58a.28.28,0,0,1,.27.27v9.59a.28.28,0,0,1-.27.27H12.13a.28.28,0,0,1-.27-.27V33.55a.28.28,0,0,1,.27-.27Zm32.94,0h9.58a.28.28,0,0,1,.27.27v9.59a.28.28,0,0,1-.27.27H45.07a.28.28,0,0,1-.27-.27V33.55a.28.28,0,0,1,.27-.27Zm-16.47,0h9.58a.28.28,0,0,1,.27.27v9.59a.28.28,0,0,1-.27.27H28.6a.28.28,0,0,1-.27-.27V33.55a.28.28,0,0,1,.27-.27ZM12.13,74.8h9.58a.27.27,0,0,1,.27.27v9.58a.27.27,0,0,1-.27.27H12.13a.27.27,0,0,1-.27-.27V75.07a.27.27,0,0,1,.27-.27Zm32.94,0h9.58a.27.27,0,0,1,.27.27v9.58a.27.27,0,0,1-.27.27H45.07a.27.27,0,0,1-.27-.27V75.07a.27.27,0,0,1,.27-.27Zm-16.47,0h9.58a.27.27,0,0,1,.27.27v9.58a.27.27,0,0,1-.27.27H28.6a.27.27,0,0,1-.27-.27V75.07a.27.27,0,0,1,.27-.27ZM12.13,54h9.58a.27.27,0,0,1,.27.27V63.9a.28.28,0,0,1-.27.27H12.13a.28.28,0,0,1-.27-.27V54.31a.27.27,0,0,1,.27-.27Zm32.94,0h9.58a.27.27,0,0,1,.27.27V63.9a.28.28,0,0,1-.27.27H45.07a.28.28,0,0,1-.27-.27V54.31a.27.27,0,0,1,.27-.27ZM28.6,54h9.58a.27.27,0,0,1,.27.27V63.9a.28.28,0,0,1-.27.27H28.6a.28.28,0,0,1-.27-.27V54.31A.27.27,0,0,1,28.6,54Z">
                                </path>
                            </g>
                        </svg>
                        Apartemen</h3>
                    <div>
                        <p class="text-gray-700 text-xs">Mulai dari</p>
                        <p class="text-gray-600/90 text-2xl my-2 font-bold">Rp <a
                                class="text-4xl font-semibold">500</a>jt</p>
                        <p class="text-gray-800/70 text-xs mb-6">*D.K.I. Jakarta</p>
                        <p class="text-gray-800/70 text-xs">Discount <a
                                class="text-lg font-semibold text-red-600">10%</a> untuk pembelian sekarang.</p>
                        <p class="text-gray-800/70 text-xs">Cicilan <a class="font-semibold text-red-600 text-lg">5
                            </a><a class="text-gray-600 font-semibold">hingga</a> <a
                                class="font-semibold text-red-600 text-lg">20</a> tahun.</p>
                    </div>
                </div>
                <div
                    class="p-4 bg-white border border-gray-400 text-center flex flex-col justify-between space-y-10">
                    <h3 class="text-xl font-semibold flex flex-row items-center justify-center gap-2">
                        <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5 9.5C5 6.09371 8.00993 3 12 3C15.9901 3 19 6.09371 19 9.5C19 11.6449 17.6877 14.0406 15.9606 16.2611C14.5957 18.016 13.0773 19.5329 12 20.5944C10.9227 19.5329 9.40427 18.016 8.03935 16.2611C6.31229 14.0406 5 11.6449 5 9.5ZM12 1C6.99007 1 3 4.90629 3 9.5C3 12.3551 4.68771 15.2094 6.46065 17.4889C7.99487 19.4615 9.7194 21.1574 10.7973 22.2173C10.9831 22.4001 11.1498 22.564 11.2929 22.7071C11.4804 22.8946 11.7348 23 12 23C12.2652 23 12.5196 22.8946 12.7071 22.7071C12.8502 22.564 13.0169 22.4001 13.2027 22.2174L13.2028 22.2173C14.2806 21.1573 16.0051 19.4615 17.5394 17.4889C19.3123 15.2094 21 12.3551 21 9.5C21 4.90629 17.0099 1 12 1ZM12 12.5C13.3807 12.5 14.5 11.3807 14.5 10C14.5 8.61929 13.3807 7.5 12 7.5C10.6193 7.5 9.5 8.61929 9.5 10C9.5 11.3807 10.6193 12.5 12 12.5Z"
                                    fill="#000000"></path>
                            </g>
                        </svg>
                        Tanah</h3>
                    <div>
                        <p class="text-gray-700 text-xs">Mulai dari</p>
                        <p class="text-gray-600/90 text-2xl my-2 font-bold">Rp <span
                                class="text-4xl font-semibold">24</span>jt</p>
                        <p class="text-gray-800/70 text-xs mb-6">*Harga per meter persegi untuk D.K.I. Jakarta</p>
                        <p class="text-gray-800/70 text-xs">Harga dapat bervariasi tergantung wilayah</p>
                        <p class="text-gray-800/70 text-xs">Harga dapat bervariasi tergantung tipe dan fasilitas</p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-12">
    <div class="container mx-auto">
        <div class="text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-6">Hubungi Kami</h2>
            <p class="text-gray-600 text-lg mb-8">Jika Anda ingin segera mendapatkan penawaran eksklusif, jangan ragu untuk menghubungi kami. Kami siap melayani Anda dengan proses yang mudah, cepat, dan hasilkan kesepakatan yang sesuai dengan kebutuhan Anda. Anda bisa menghubungi kami melalui nomor telepon, alamat kantor, dan email di bawah ini:</p>
        </div>

        <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="md:w-1/2 mb-6 md:mb-0">
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Kontak</h3>
                <p class="text-gray-600">Anda dapat menghubungi kami melalui email atau nomor telepon berikut:</p>
                <p class="text-gray-600 mb-2"><strong>Email:</strong> info@propertymarket.com</p>
                <p class="text-gray-600"><strong>Telepon:</strong> +123 4567 8901</p>
            </div>
            <div class="md:w-1/2">
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Kantor Pemasaran</h3>
                <p class="text-gray-600">Kami juga menyambut Anda untuk datang langsung ke kantor pemasaran kami:</p>
                <p class="text-gray-600 mb-2"><strong>Alamat:</strong> Jl. Contoh No. 123, Jakarta</p>
                <p class="text-gray-600"><strong>Jam Buka:</strong> Senin - Jumat, 09:00 - 17:00</p>
            </div>
        </div>
    </div>
</section>







    <?php 
        include '../include/footer.php';
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script src="../js/dataLoader.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>