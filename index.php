<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Property Market</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>

    <!--------------Navbar------------------------>
    <nav class="sticky top-0 left-0 px-4 py-4 flex justify-between items-center bg-white z-50">
        <a class="text-3xl font-bold leading-none" href="index">
            <img src="public/images/logo.png" alt="logo" class="w-20 h-auto">
        </a>
        <div class="lg:hidden">
            <button class="navbar-burger flex items-center text-blue-600 p-3">
                <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Mobile menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                </svg>
            </button>
        </div>
        <ul
            class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
            <li><a class="text-sm text-gray-400 hover:text-blue-600 font-semibold hover:font-bold duration-300" href="#">Home</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="text-sm text-gray-400 hover:text-blue-600 font-semibold hover:font-bold duration-300" href="pages/about">About Us</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="text-sm text-gray-400 hover:text-blue-600 font-semibold hover:font-bold duration-300" href="#pricing">Pricing</a></li>
            <li class="text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                </svg>
            </li>
            <li><a class="text-sm text-gray-400 hover:text-blue-600 font-semibold hover:font-bold duration-300" href="#">Contact</a></li>
        </ul>
        <?php
        if (isset($_SESSION['log'])) {
            echo '<a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" href="#">' . $_SESSION['name'] . '</a>';
            echo '<a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" href="auth/logout">Logout</a>';
        } else {
            echo '<a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-300 text-sm text-gray-900 font-bold border border-gray-600/40 rounded-xl transition duration-200" href="auth/login">Sign In</a>';
            echo '<a class="hidden lg:inline-block py-2 px-6 bg-blue-500/40 hover:bg-blue-600 text-sm text-gray-800 hover:text-white font-bold rounded-xl border border-blue-600/40 transition duration-200" href="auth/register">Sign up</a>';
        }
        ?>
    </nav>
    <div class="navbar-menu relative z-50 hidden">
        <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
        <nav
            class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
            <div class="flex items-center mb-8">
                <a class="mr-auto text-3xl font-bold leading-none" href="#">
                    <img src="public/images/logo.png" alt="logo" class="w-20 h-auto">
                </a>
                <button class="navbar-close">
                    <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
            <div>
                <ul>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                            href="#">Home</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                            href="pages/about">About Us</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                            href="#pricing">Pricing</a>
                    </li>
                    <li class="mb-1">
                        <a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded"
                            href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="mt-auto">
                <div class="pt-6">
                    <?php
                    if (isset($_SESSION['log'])) {
                        echo '<a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="#">' . $_SESSION['name'] . '</a>';
                        echo '<a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl" href="auth/logout">Logout</a>';
                    } else {
                        echo '<a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="auth/login">Sign in</a>';
                        echo '<a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl" href="auth/register">Sign Up</a>';
                    }
                    ?>
                </div>

                <p class="my-4 text-xs text-center text-gray-400">
                    <span>Copyright © 2023</span>
                </p>
            </div>
        </nav>
    </div>
    <!-- end of navbar -->

    <!-------JumbroTron-->
    <section
        class="bg-[url('public/images/banner.jpg')] bg-no-repeat bg-sticky bg-gray-800/90 bg-blend-overlay py-52 z-10">
        <div class="py-8 px-4 mx-auto text-center lg:py-16 lg:px-12 h-auto">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-8xl text-gray-200" data-aos="fade-up" data-aos-duration="1000">
                Kualitas Hidup Mulai dari Rumah</h1>
            <p class="mb-8 text-sm font-semibold text-gray-200/60 lg:text-xl sm:px-16 xl:px-48" data-aos="fade-up" data-aos-duration="2000">Kualitas hidup yang luar
                biasa dimulai dari rumah yang Anda pilih. Di sinilah Anda akan menemukan kenyamanan, keamanan, dan cinta
                yang mendalam.</p>
            <div class="flex flex-row mb-8 lg:mb-16 space-y-0 sm:flex-row justify-center items-center">
                <a  data-aos="fade-right" data-aos-duration="2000"
                    class="cursor-default inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-300 rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Mulai mencari
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#houses"
                    class="inline-flex space-y-0 justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-400 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100">
                    <svg fill="#949494" width="18px" height="18px" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg" stroke="#949494"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M224,115.53906V208a16.01833,16.01833,0,0,1-16,16H48a16.01833,16.01833,0,0,1-16-16V115.53857a16.03346,16.03346,0,0,1,5.23633-11.83837l79.99414-72.73438a15.93607,15.93607,0,0,1,21.52637-.001l80.00683,72.73536.001.001A16.03466,16.03466,0,0,1,224,115.53906Z"></path> </g></svg>
                    houses
                </a>
            </div>
        </div>
    </section>

    <section class="my-10">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-200 sm:text-lg">
                <h2 class="mb-4 text-3xl md:text-5xl tracking-tight font-extrabold text-gray-700 md:text-end drop-shadow-md" data-aos="fade-up" data-aos-duration="2000">For a superior home and lifestyle, choose Sotheby's International Realty.</h2>
                <div class="flex flex-row">
                    <div class="my-4">
                        <p class="mb-4 text-gray-700 md:text-base font-normal text-sm" data-aos="fade-up" data-aos-duration="3000">Kami adalah mitra terpercaya Anda dalam mencari hunian yang sempurna. Dengan pengalaman
                            dalam industri real estate, kami hadir untuk membantu Anda menemukan rumah impian Anda.</p>
                        <p class="mb-4 text-gray-700 md:text-base font-normal text-sm" data-aos="fade-up" data-aos-duration="3000">Kami menawarkan berbagai pilihan properti berkualitas tinggi dan layanan terbaik untuk memenuhi
                            kebutuhan perumahan Anda. Temukan keindahan di setiap rumah yang kami tawarkan.</p>
                    </div>
                </div>


            </div>
            <div class="grid grid-cols-2 gap-4 mt-8 overflow-hidden">
                <img class="w-full rounded-lg" data-aos="fade-right" data-aos-duration="2000"
                    src="https://images.unsplash.com/photo-1600566752355-35792bedcfea?auto=format&fit=crop&q=80&w=1974&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="property 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" data-aos="fade-left" data-aos-duration="2000"
                    src="https://images.unsplash.com/photo-1620641622320-cca44cddd341?auto=format&fit=crop&q=60&w=500&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Njd8fHByb3BlcnRpZXN8ZW58MHx8MHx8fDA%3D"
                    alt="property 2">
            </div>
        </div>
    </section>

    <!----- List Perumahan ---->
    <section class="lg:my-40 my-14">
    <div class="container px-2 flex flex-col-reverse gap-8 xl:flex-row-reverse items-center justify-center mx-auto md:px-0">
        <div class="flex flex-col xl:w-1/2 px-4">
            <h2 class="text-4xl md:text-6xl font-extrabold text-gray-700 drop-shadow-md" data-aos="fade-right" data-aos-duration="2000">DISCOVER YOURS</h2>
            <p class="text-xs md:text-sm my-2 md:my-0 md:mb-16 tracking-wider" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="2000">dapatkan penawaran khusus sekarang juga dengan cara <a href="">mendaftar</a>, dan dapatkan diskon hingga 15% untuk pembelian pertama</p>
            <p class="text-xs md:text-lg tracking-wider space-y-5" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="2000">Dengan bangga kami mempersembahkan koleksi properti eksklusif kami, di mana kemewahan bertemu dengan kenyamanan, dan desain yang inovatif memenuhi standar kehidupan modern. Setiap rumah adalah kisah hidup yang menanti untuk ditulis, dan kami berkomitmen untuk membantu Anda menemukan rumah yang tidak hanya memenuhi kebutuhan Anda, tetapi juga merangkul gaya hidup impian Anda. </p>
            <a href="pages/properties" class="my-6 cursor-default p-4 xl:w-4/12 border border-gray-700 duration-300 cursor-pointer inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-700 hover:text-gray-200 rounded-lg bg-primary-700 hover:bg-blue-600 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Explore more
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
        </div>
        
        <div class="grid grid-cols-1 gap-4" id="houses">
            <div class="bg-white shadow-lg rounded relative" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                <img src="public/images/house/house-1.jpg" class="w-full rounded">
                <p class="absolute left-2 top-2 p-1 bg-gray-700/70 text-gray-200 text-sm flex items-center gap-1">
                    <svg class="invert" width="18px" height="18px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M5 9.5C5 6.09371 8.00993 3 12 3C15.9901 3 19 6.09371 19 9.5C19 11.6449 17.6877 14.0406 15.9606 16.2611C14.5957 18.016 13.0773 19.5329 12 20.5944C10.9227 19.5329 9.40427 18.016 8.03935 16.2611C6.31229 14.0406 5 11.6449 5 9.5ZM12 1C6.99007 1 3 4.90629 3 9.5C3 12.3551 4.68771 15.2094 6.46065 17.4889C7.99487 19.4615 9.7194 21.1574 10.7973 22.2173C10.9831 22.4001 11.1498 22.564 11.2929 22.7071C11.4804 22.8946 11.7348 23 12 23C12.2652 23 12.5196 22.8946 12.7071 22.7071C12.8502 22.564 13.0169 22.4001 13.2027 22.2174L13.2028 22.2173C14.2806 21.1573 16.0051 19.4615 17.5394 17.4889C19.3123 15.2094 21 12.3551 21 9.5C21 4.90629 17.0099 1 12 1ZM12 12.5C13.3807 12.5 14.5 11.3807 14.5 10C14.5 8.61929 13.3807 7.5 12 7.5C10.6193 7.5 9.5 8.61929 9.5 10C9.5 11.3807 10.6193 12.5 12 12.5Z"
                                    fill="#000000"></path>
                            </g>
                        </svg>Jakarta</p>
                <div>
                <div class="flex flex-col items-start justify-between p-4 my-2">
                        <h2 class="text-2xl font-semibold">Minimalist Modern Residence</h2>
                        <p class="text-gray-500 text-sm my-2">Jl. Bunga Indah No. 123, Perumahan Citra Damai, Kota Bahagia</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

    <!-----Pricing---->
    <section class="py-12" id="pricing">
    <h2 class="mb-4 text-3xl md:text-5xl tracking-tight font-extrabold text-gray-700 text-center drop-shadow-md" data-aos="fade-right" data-aos-duration="1000">Marketing Hub</h2>
    <p data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="2000" class="text-center">dapatkan penawaran khusus sekarang juga dengan cara <a href="">mendaftar</a>, dan dapatkan diskon hingga 15% untuk pembelian pertama</p>
    <div class="container mx-auto mt-8 p-4 md:p-0">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 rounded-sm">
                <div
                    class="p-4 bg-white border border-gray-200 shadow-xl text-center flex flex-col justify-between space-y-10">
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
                                class="text-4xl font-bold">400</a>jt
                        </p>
                        <p class="text-gray-800/70 text-xs mb-6">*Jakarta Pusat</p>
                        <p class="text-gray-800/70 text-xs">Discount <a
                                class="text-lg font-semibold text-red-600">10%</a> untuk pembelian sekarang.</p>
                        <p class="text-gray-800/70 text-xs">Cicilan <a class="font-semibold text-red-600 text-lg">5
                            </a><a class="text-gray-600 font-semibold">hingga</a> <a
                                class="font-semibold text-red-600 text-lg">20</a> tahun.</p>
                    </div>
                    <a href="pages/pricing" class="p-4 bg-blue-600 text-white hover:bg-blue-700 w-full rounded-sm">Talk to
                        Sales</a>
                </div>
                <div
                    class="p-4 bg-white border border-gray-200 shadow-xl text-center flex flex-col justify-between space-y-10">
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
                                class="text-4xl font-bold">500</a>jt</p>
                        <p class="text-gray-800/70 text-xs mb-6">*D.K.I. Jakarta</p>
                        <p class="text-gray-800/70 text-xs">Discount <a
                                class="text-lg font-semibold text-red-600">10%</a> untuk pembelian sekarang.</p>
                        <p class="text-gray-800/70 text-xs">Cicilan <a class="font-semibold text-red-600 text-lg">5
                            </a><a class="text-gray-600 font-semibold">hingga</a> <a
                                class="font-semibold text-red-600 text-lg">20</a> tahun.</p>
                    </div>
                    <a href="pages/pricing" class="p-4 bg-blue-600 text-white hover:bg-blue-700 w-full rounded-sm">Talk to
                        Sales</a>
                </div>
                <div
                    class="p-4 bg-white border border-gray-200 shadow-xl text-center flex flex-col justify-between space-y-10">
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
                                class="text-4xl font-bold">24</span>jt</p>
                        <p class="text-gray-800/70 text-xs">*Per m²</p> 
                        <p class="mb-6 text-xs">untuk D.K.I. Jakarta</p>
                        <p class="text-gray-800/70 text-xs">Harga dapat bervariasi tergantung wilayah</p>
                        <p class="text-gray-800/70 text-xs">Harga dapat bervariasi tergantung tipe dan fasilitas</p>
                    </div>

                    <a href="pages/pricing" class="p-4 bg-blue-600 text-white hover:bg-blue-700 w-full rounded-sm">Talk to
                        Sales</a>
                </div>
            </div>
        </div>
    </section>

    <button id="back-to-top" class="fixed" onclick="scrollToTop()">
        <svg width="22px" height="34px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 6V18M12 6L7 11M12 6L17 11" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
    </button>

 <!-- contact Block -->
 <section class="bg-gray-700">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white" data-aos="fade-up">Contact Us</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Memiliki pertanyaan seputar property? hubungi kami sekarang juga untuk konsultasi!</p>
      <form action="#" class="space-y-8">
          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
              <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
              <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
              <textarea id="message" rows="6" class="resize-none block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300">Send message</button>
      </form>
  </div>
</section>


<!--  Footer Section Start -->
<footer>
<div class="px-4 pt-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-2xl ">
  <div class="grid gap-10 row-gap-6 mb-8 sm:grid-cols-2 lg:grid-cols-4">
    <div class="sm:col-span-2">
      <a href="/" aria-label="Go home" title="Company" class="inline-flex items-center">
        <img src="public/images/logo.png" alt="logo" class="w-52 mx-auto h-auto">
      </a>
      <div class="mt-6 lg:max-w-sm">
        <p class="text-sm text-gray-800">
        Kami adalah perusahaan properti yang berfokus pada menyediakan hunian berkualitas untuk semua. Dengan pengalaman lebih dari 10 tahun, kami telah berhasil membantu ribuan pelanggan menemukan rumah impian mereka. 
        </p>
        <p class="mt-4 text-sm text-gray-800">
        Kami berkomitmen untuk memberikan pelayanan terbaik, dan kami selalu berusaha untuk mengembangkan properti yang ramah lingkungan dan berkelanjutan.
        </p>
      </div>
    </div>
    <div class="space-y-2 text-sm">
      <p class="text-base font-bold tracking-wide text-gray-900">Contacts</p>
      <div class="flex">
        <p class="mr-1 text-gray-800">Phone:</p>
        <a href="tel:850-123-5021" aria-label="Our phone" title="Our phone" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">+62-850-123-5021</a>
      </div>
      <div class="flex">
        <p class="mr-1 text-gray-800">Email:</p>
        <a href="mailto:info@lorem.mail" aria-label="Our email" title="Our email" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">DDwelling@outlook.com</a>
      </div>
      <div class="flex">
        <p class="mr-1 text-gray-800">Address:</p>
        <a href="https://www.google.com/maps" target="_blank" rel="noopener noreferrer" aria-label="Our address" title="Our address" class="transition-colors duration-300 text-deep-purple-accent-400 hover:text-deep-purple-800">
            Jl Anggrek 1, ID
        </a>
      </div>
    </div>
    <div>
      <span class="text-base font-bold tracking-wide text-gray-900">Social</span>
      <div class="flex items-center mt-1 space-x-3">
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
            <path
              d="M24,4.6c-0.9,0.4-1.8,0.7-2.8,0.8c1-0.6,1.8-1.6,2.2-2.7c-1,0.6-2,1-3.1,1.2c-0.9-1-2.2-1.6-3.6-1.6 c-2.7,0-4.9,2.2-4.9,4.9c0,0.4,0,0.8,0.1,1.1C7.7,8.1,4.1,6.1,1.7,3.1C1.2,3.9,1,4.7,1,5.6c0,1.7,0.9,3.2,2.2,4.1 C2.4,9.7,1.6,9.5,1,9.1c0,0,0,0,0,0.1c0,2.4,1.7,4.4,3.9,4.8c-0.4,0.1-0.8,0.2-1.3,0.2c-0.3,0-0.6,0-0.9-0.1c0.6,2,2.4,3.4,4.6,3.4 c-1.7,1.3-3.8,2.1-6.1,2.1c-0.4,0-0.8,0-1.2-0.1c2.2,1.4,4.8,2.2,7.5,2.2c9.1,0,14-7.5,14-14c0-0.2,0-0.4,0-0.6 C22.5,6.4,23.3,5.5,24,4.6z"
            ></path>
          </svg>
        </a>
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 30 30" fill="currentColor" class="h-6">
            <circle cx="15" cy="15" r="4"></circle>
            <path
              d="M19.999,3h-10C6.14,3,3,6.141,3,10.001v10C3,23.86,6.141,27,10.001,27h10C23.86,27,27,23.859,27,19.999v-10   C27,6.14,23.859,3,19.999,3z M15,21c-3.309,0-6-2.691-6-6s2.691-6,6-6s6,2.691,6,6S18.309,21,15,21z M22,9c-0.552,0-1-0.448-1-1   c0-0.552,0.448-1,1-1s1,0.448,1,1C23,8.552,22.552,9,22,9z"
            ></path>
          </svg>
        </a>
        <a href="/" class="text-gray-500 transition-colors duration-300 hover:text-deep-purple-accent-400">
          <svg viewBox="0 0 24 24" fill="currentColor" class="h-5">
            <path
              d="M22,0H2C0.895,0,0,0.895,0,2v20c0,1.105,0.895,2,2,2h11v-9h-3v-4h3V8.413c0-3.1,1.893-4.788,4.659-4.788 c1.325,0,2.463,0.099,2.795,0.143v3.24l-1.918,0.001c-1.504,0-1.795,0.715-1.795,1.763V11h4.44l-1,4h-3.44v9H22c1.105,0,2-0.895,2-2 V2C24,0.895,23.105,0,22,0z"
            ></path>
          </svg>
        </a>
      </div>
      <p class="mt-4 text-sm text-gray-500">
        Tetap terhubung dengan update terbaru di sosial media kami.
      </p>
    </div>
  </div>
  <div class="flex flex-col-reverse justify-between pt-5 pb-10 border-t lg:flex-row ">
    <p class="text-sm text-gray-600">
      © Copyright 2023 Dream Dwelling. All rights reserved.
    </p>
    <ul class="flex flex-col mb-3 space-y-2 lg:mb-0 sm:space-y-0 sm:space-x-5 sm:flex-row">
      <li>
        <a href="/" class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">F.A.Q</a>
      </li>
      <li>
        <a href="/" class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Privacy Policy</a>
      </li>
      <li>
        <a href="/" class="text-sm text-gray-600 transition-colors duration-300 hover:text-deep-purple-accent-400">Terms &amp; Conditions</a>
      </li>
    </ul>
  </div>
</div>
</footer>
<!-- ====== Footer Section End -->

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>