<?php
include("navbar.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="output.css">
    <!-- <script src="myjs.js"></script> -->
</head>

<body>

    <!-- component -->
    <div id="toast-container"></div>
    <form action="" method="post" onsubmit="return validateForm();">
        <div class="min-h-full bg-gray-100 py-6 flex flex-col justify-center py-0 sm:py-12">
            <div class="relative py-3 sm:max-w-xl sm:mx-auto">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-blue-300 to-blue-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                </div>
                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                    <div class="max-w-md mx-auto">
                        <div>
                            <h1 class="text-3xl font-semibold text-center">Login Form </h1>
                        </div>
                        <div class="divide-y divide-gray-200">
                            <div class="py-8 text-base leading-6 space-y-4 text-black sm:text-lg sm:leading-7">
                                <div class="relative">
                                    <input id="fullname" type="text"
                                        class="flex-grow h-10 w-full px-2 rounded border border-grey-400" name="email"
                                        placeholder="Email" autocomplete="off">
                                </div>
                                <div class="relative">
                                    <input id="fullname" type="text"
                                        class="flex-grow h-10 w-full px-2 rounded border border-grey-400"
                                        name="password" placeholder="Password" autocomplete="off">
                                </div>
                                <div class="relative text-center ">
                                    <input type="submit" value="Login" name="login"
                                        class="bg-blue-500 w-[50%] h-10 text-white rounded-md px-2 py-1 text-x l"
                                        name="login_btn">
                                </div>
                                <div class="flex text-lg  ">
                                    <h1>Do You Have An Account ? </h1> &nbsp;
                                    <a href="registration.php">
                                        <h1 class="text-red-500 text-xl font-bold"> Registration</h1>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php
    include("footer.php");
    ?>
</body>

</html>