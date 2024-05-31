<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="output.css">
    <link rel="stylesheet" href="tailwindCss.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>

<body>

    <?php
    $current_url = $_SERVER['REQUEST_URI'];
    $filename = basename($current_url);
   
    ?>
    <!-- navbar -->
    <nav class="bg-transparent shadow-lg drop-shadow-lg sticky top-0 bg-white z-10 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto  p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="./image/logo.jpg" class="h-12 w-15  border-2 border-slate-300 rounded-full " alt="Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-red-500 ">Photography</span>
            </a>
            <a href="./reg.php">
                <div class="flex items-start md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse">
                    <button type="button" data-dropdown-toggle="language-dropdown-menu"
                        class="text-white text-lg  mt-2 bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Registration
                        </p>
                    </button>
            </a>
            <!-- <a href="#">
            <button type="button" data-dropdown-toggle="language-dropdown-menu"
                     class="text-white text-lg  mt-2 bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Booking
                </button>
            </a> -->

            <button data-collapse-toggle="navbar-language" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-blue-500 dark:focus:ring-gray-600"
                aria-controls="navbar-language" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-language">
            <ul
                class="flex flex-col font-medium bg-transparent md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 text-black">
                <li>
                    <a href="./index.php" class="block py-2 px-3 text-black text-lg  md:bg-transparent md:p-0 <?php if ($filename == "home.php")
                     {
                        echo "text-blue-500";
                    } ?>">Home</a>


                </li>
                <li>
                    <a href="./Services.php"
                        class="block py-2 px-3 md:p-0 text-lg   hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:hover:bg-blue-500    md:dark:hover:bg-transparent <?php if ($filename == "Services.php")
                     {
                        echo "text-blue-500";
                    }
                     ?>">Services</a>
                </li>
                <li>
                    <a href="./aboutus.php"
                    class="block py-2 px-3 md:p-0 text-lg   hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:hover:bg-blue-500    md:dark:hover:bg-transparent <?php if ($filename == "aboutus.php")
                     {
                        echo "text-blue-500";
                    }
                     ?>">aboutUS</a>
                </li>
                <li>
                    <a href="./contactus.php"
                        class="block py-2 px-3 md:p-0 text-lg   hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:hover:bg-blue-500    md:dark:hover:bg-transparent <?php if( $filename == "contactus.php") 
                        echo"text-blue-500";
                        ?> ">ContactUs</a>
                </li>
                <button id="dropdownHoverButton"data-dropdown-toggle="dropdownNavbar"
                    class="flex items-center text-black justify-between w-full text-lg py-2 px-3 text-gray-900 rounded  md:border-0  md:p-0 md:w-auto  dark:hover:text-blue-500  md:hover:bg-transparent dark:focus:text-black dark:border-gray-700">Gallery<svg
                        class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar"
                    class=" z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-72  dark:divide-gray-600">
                    <ul class="py-2 text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                        <li>
                            <a href="./wedding.php"
                                class="block px-4 py-2 text-lg text-black dark:hover:text-blue-500  bg-white <?php if( $filename == "wedding.php") 
                        echo" text-blue-500 ";
                        ?>">Weadding</a>
                        </li>
                        <li >
                            <a href="./prewedding.php"
                                class="block px-4 py-2 text-lg text-black dark:hover:text-blue-500 bg-white  <?php if( $filename == "prewedding.php") 
                        echo" text-blue-500 ";
                        ?>">Pre-Weadding</a>
                        </li>
                        <li>
                            <a href="./New_born_baby.php"
                                class="block px-4 py-2 text-lg text-black dark:hover:text-blue-500 bg-white <?php if( $filename == "New_born_baby.php") 
                        echo" text-blue-500 ";
                        ?>  ">New
                                Born Baby</a>
                        </li>
                    </ul>
                </div>
                </li>
            </ul>
        </div>
        </div>
    </nav>