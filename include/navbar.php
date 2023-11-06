<?php
session_start();

?>
<!--------------Navbar------------------------>
<nav class="bg-white sticky top-0 w-full">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="/" class="flex items-center">
          <img src="../public/images/logo.png" class="h-8 mr-3" alt="Flowbite Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-gray-700"></span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800  dark:border-gray-700">
        <li>
            <a href="../index.html" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-700 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-700 md:dark:hover:bg-transparent">Home</a>
        </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-700 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-700 md:dark:hover:bg-transparent">About</a>
          </li>
          <li>
            <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-700 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-700 md:dark:hover:bg-transparent">Services</a>
          </li>
          <li>
          <?php
            if (isset($_SESSION['log'])) {
                echo '<div class="flex gap-4 items-center">';
                echo '<a href="auth/logout.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover-bg-transparent md:border-0 md:hover-text-blue-700 md:p-0 dark:text-gray-700 md:dark:hover-text-blue-500 dark:hover-bg-gray-700 dark:hover-text-gray-700 md:dark:hover-bg-transparent">Logout</a>';
                echo '<span class="text-gray-900">Selamat datang, ' . $_SESSION['name'] . '!</span>';
                echo '</div>';
            } else {
                echo '<div class="flex gap-4 items-center">';
                echo '<a href="auth/login.php" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover-bg-transparent md:border-0 md:hover-text-blue-700 md:p-0 dark:text-gray-700 md:dark:hover-text-blue-500 dark:hover-bg-gray-700 dark:hover-text-gray-700 md:dark:hover-bg-transparent">Login </a>';
                echo 'Selamat datang!' ;
                echo '</div>';
            }
            ?>
            </li>
        </ul>
      </div>
    </div>
  </nav>