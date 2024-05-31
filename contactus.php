<?php
include_once("navbar.php");
?>
<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section class="">
        <div class="flex justify-center items-center h-full ">
            <!-- COMPONENT CODE -->
            <div class=" mx-auto my-4 px-4 lg:px-20 ">
                <div class="w-full p-8 my-4 md:px-12 lg:w-9/12 lg:pl-20 lg:pr-40 mr-auto rounded-2xl shadow-2xl">
                    <div class="flex">
                        <h1 class="font-bold uppercase text-5xl">Send us a message</h1>
                    </div>
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2 mt-5">
                        <input
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="text" placeholder="First Name*" />
                        <input
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Last Name*" />
                        <input
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="email" placeholder="Email*" />
                        <input
                            class="w-full bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
                            type="number" placeholder="Phone*" />
                    </div>
                    <div class="my-4">
                        <textarea placeholder="Message*"
                            class="w-full h-32 bg-gray-100 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                    <div class="my-2 w-1/2 lg:w-1/4">
                        <button class="uppercase text-sm font-bold tracking-wide bg-blue-900 text-gray-100 p-3 rounded-lg w-full 
                      focus:outline-none focus:shadow-outline">
                            Send Message
                        </button>
                    </div>
                </div>
                <div class="border">
                    <div class="w-full lg:-mt-[35%] lg:w-[30%] md:h-[20%] px-8  ml-auto bg-blue-900 rounded-2xl">
                        <div class="flex flex-col text-white ">
                            <h1 class="font-bold uppercase text-3xl my-2">Drop in our office</h1>
                            <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
                                tincidunt arcu diam,
                                eu feugiat felis fermentum id. Curabitur vitae nibh viverra, auctor turpis sed,
                                scelerisque
                                ex.
                            </p>
                            <!-- <div class="pt-2">
                                <i class="fas fa-map-marker-alt pb-2" />
                            </div> -->
                            <div class="">
                                <h2 class="text-xl">Main Office</h2>
                                <p class="text-gray-400">photoshope, Pleasant Grove, UT 73533</p>
                            </div>
                        </div>

                        <div class="pb-2 h-52">
                            <!-- <div class="">
                                <i class="fas fa-phone-alt pr-2" />
                            </div> -->
                            <div>
                                <h2 class="text-2xl text-white">Call Us</h2>
                                <p class="text-gray-400">Tel: xxx-xxx-xxx</p>
                                <p class="text-gray-400">Fax: xxx-xxx-xxx</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <?php
    include("footer.php");
    ?>
</body>

</html>
