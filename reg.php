<?php
include("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="output.css">

</head> 
<body>
    <div id="toast-container"></div>
    
    <div id="toast-container"></div>
    <div class="bg-[url('./image/weading/pre_weding_wallpaper.jpg')] h-screen w-full  bg-fixed blur-[2px]">
    </div>
    <div class="relative -mt-[56%] lg:py-0 sm:py-10">
        <div class=" relative h-screen w-full mt-[5%] ">
            <div class="flex flex-col items-center flex md:h-[105%] sm:h-full lg:py-10 justify-center px-4 sm:px-0">
                <div
                    class="flex rounded-lg shadow-lg w-full sm:w-3/4 lg:w-[75%] bg-white bg-transprance sm:mx-0 lg:h-[90%] h-[100%]">
                    <div class="flex flex-col w-full md:w-1/2 p-4 bg-[#dee8f4]">
                        <div class="flex flex-col flex-1 justify-start mt-5 mb-8 py-5">
                            <h1 class="text-4xl text-center font-bold">Rregistration page</h1>
                            <div class="w-full h-full mt-4  ">
                                <form class="form-horizontal w-3/4 mx-auto" method="POST" action="database.php" name='myform' >
                            <div class="flex flex-col mt-4">
                                <input id="fullname" type="text" class="flex-grow h-10 px-2 rounded border border-grey-400" name="fullname"  placeholder="Full name" autocomplete="off">
                            </div>
                            <div class="flex flex-col mt-4">
                                <input id="email" type="text" class="flex-grow h-10 px-2 border rounded border-grey-400" name="email" value="" placeholder="Email" autocomplete="off">
                            </div>
                            <div class="flex flex-col mt-4">
                                <input id="password" type="password" class="flex-grow h-10 px-2 rounded border border-grey-400" name="pass"  placeholder="Set password" autocomplete="off">
                            </div>
                            <div class="flex flex-col mt-4">
                                <input id="phone_no" type="text" class="flex-grow h-10 px-2 rounded border border-grey-400" name="phone_no"  placeholder="phone_no" autocomplete="off">
                            </div>
                            <div class="flex flex-col mt-4">
                                <input id="age" type="text" class="flex-grow h-10 px-2 rounded border border-grey-400" name="age"  placeholder="age" autocomplete="off">
                            </div>
                            <div class="flex flex-col mt-4">
                                <select name="gender" id="gender" class="flex-grow h-10 px-2 rounded border border-grey-400 text-gray-500" >
                                    <option value="">select your gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="flex flex-col mt-4">
                                <select name="state" id="state" class="flex-grow h-10 px-2 rounded border border-grey-400 text-gray-500" onchange="loadCities()">
                                    <option value="">Select State</option>
                                </select>
                            </div>
                            
                            <div class="flex flex-col mt-4">
                                <select name="city" id="city" class="flex-grow h-10 px-2 rounded border border-grey-400">
                                    <option value="">Select City</option>
                                </select>
                            </div>
                                <!-- <div class="flex flex-col mt-4">
                                    <select name="service" id="service" class="flex-grow h-10 px-2 rounded border border-grey-400" >
                                        <option value="">select your service</option>
                                        <option value="dfasd">dfas</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div> -->
                            
                            <div class="flex flex-col mt-8">
                                <button onClick="return validateForm();" type="submit"  name="book_btn" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-semibold py-2 px-4 rounded" id="btn" >
                                    Registration
                                </button>
                            </div>
                        </form>
                        <div class="flex text-lg lg:ml-20 ">
                                        <h1>Have an Account ? </h1> &nbsp;
                                        <a href="login.php">
                                            <h1 class="text-red-500 text-xl font-bold"> Login </h1>
                                        </a>
                                    </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:block md:w-1/2 rounded-r-lg" style="background: url('https://images.unsplash.com/photo-1515965885361-f1e0095517ea?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3300&q=80'); background-size: cover; background-position: center center;"></div>
        </div>
    </div>
</div>


<?php
include("footer.php");
?>
</div>
</body>

<script type="text/javascript" src="valid.js"></script>


</html>
