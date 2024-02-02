<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <link rel="stylesheet" href="output.css">
</head>

<body>
  <!-- navbar section -->
  <?php
  include("navbar.php");
  ?>
  <section>
    <div class="flex justify-center items-center">
      <a href="video.php">
        <div class="z-1 absolute -mt-[1700px] md:-mt-48">
          <div class=" flex justify-center items-center  w-28 h-28  border  rounded-full bg-[#ceb098] ">
            <svg class="w-9 h-9 text-white dark:text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="currentColor" viewBox="0 0 10 16">
              <path d="M3.414 1A2 2 0 0 0 0 2.414v11.172A2 2 0 0 0 3.414 15L9 9.414a2 2 0 0 0 0-2.828L3.414 1Z" />
            </svg>
          </div>
      </a>
    </div>
    <div class="  grid md:grid-cols-2 sm:grid-cols-1 md:p-20  ">
      <!-- section 1 -->
      <div class="-z-10 basis-[35%] w-full h-full  drop-shadow-lg ">
        <img src="./image/aboutp.jpg" class=" h-full w-full rounded-md" alt="image">
      </div>
      <!-- section 2 -->
      <div class=" -z-10 basis-[55%] bg-slate-100 drop-shadow-lg ">
        <div>
          <h1 class="text-4xl p-10 font-bold flex justify-center items-center">CAPTURING THE MOMENTS THAT
            CAPTIVATE
            YOUR HEART</h1>
        </div>
        <div>
          <p class="text-xl flex justify-center items-center ml-10 mr-2">Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Vero ipsa sit vitae nisi, exercitationem
            sapiente placeat fuga vel architecto eius Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Vero ipsa sit vitae nisi, exercitationem
            sapiente placeat fuga vel architecto eius</p>
        </div>
        <div class="flex">
          <img src="./image/logo/aboutus/camera.png" class=" bg-slate-50 ml-5 mt-8 w-[30%] p-5 h-[30%] hover:p-8  "
            class=" bg-white ml-5 mt-8 w-[40%] p-5 h-[40%]" alt="">
          <div class="mt-5 p-2 ml-3">
            <h1 class="font-bold text-3xl pb-2"> PROFESSIONAL </h1>
            <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error itaque earum
              repellat debitis, et
              maxime maiores ipsum voluptatem accusantium voluptatibus.</p>
          </div>
        </div>
        <div class="flex ">
          <img src="./image/logo/aboutus/simcard.png" class=" bg-slate-50 ml-5 mt-8 w-[30%] p-5 h-[30%] hover:p-8  "
            alt="">
          <div class="mt-8 ml-10">
            <h1 class="font-bold text-3xl pb-2"> INDIVIDUAL APPROACH </h1>
            <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error itaque earum
              repellat debitis, et
              maxime maiores ipsum voluptatem accusantium voluptatibus.</p>
          </div>
        </div>
        <div class="flex ">
          <img src="./image/logo/aboutus/cameraphone.png" class=" bg-slate-50 ml-5 mt-8 w-[30%] p-5 h-[30%] hover:p-8  "
            alt="">
          <div class="mt-8 ml-10">
            <h1 class="font-bold text-3xl pb-2">FLEXIBLE SCHEDULE</h1>
            <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error itaque earum
              repellat debitis, et
              maxime maiores ipsum voluptatem accusantium voluptatibus.</p>
          </div>
        </div>

        <div class="flex">
          <img src="./image/logo/aboutus/experince.png" class=" bg-slate-50 ml-5 mt-8 w-[30%] p-5 h-[30%] hover:p-8  "
            alt="">
          <div class="mt-8 ml-10">
            <h1 class="font-bold text-3xl pb-2"> EXPERIENCE </h1>
            <p class="text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error itaque earum
              repellat debitis, et
              maxime maiores ipsum voluptatem accusantium voluptatibus.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>


  <!-- All card   -->
  <!-- content -->
  <section>
    <div class="bg-[#f1f5f9] py-10  sm:mt-10">
      <div class="text-center">
        <h1 class="text-4xl pb-5 font-extrabold  px-10">Our Team</h1>
        <p class="px-10 text-xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Facere, voluptatum eaque,
          ipsam vel necessitatibus
          consectetur incidunt deleniti, accusamus eius tempore...

        </p>
      </div>

      <!-- All card   -->
      <div class=" bg-[#f1f5f9]  w-full min-h-96 py-10 gap-20 flex-wrap flex justify-center items-center ">
        <div
          class="w-80 p-2 bg-white rounded-xl transform transition-all  hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
          <img class="h-50 object-cover w-full rounded-xl " src="./image/testomo/profile.jpg" alt="">
          <div class="p-2">
            <h1 class="font-extrabold text-lg mb-2 ">Heading</h1>
            <p class="text-md text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam
              repudiandae aliquid....</p>
          </div>
          <div class="m-2 text-xl">
            <a role='button' href='#'
              class="text-white bg-green-500 text-sm px-3 py-2 rounded-md hover:bg-purple-700">Learn
              More</a>
          </div>
        </div>
        <!-- Card 2 -->
        <div
          class="w-80 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
          <img class="h-49 w-full object-cover rounded-xl" src="./image/testomo/profile1.jpg" alt="">
          <div class="p-2">
            <h1 class="font-extrabold text-lg mb-2 ">Heading</h1>
            <p class="text-md text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam
              repudiandae aliquid....</p>
          </div>
          <div class="m-2 text-xl">
            <a role='button' href='#'
              class="text-white bg-green-500 text-sm px-3 py-2 rounded-md hover:bg-purple-700">Learn

              More</a>
          </div>
        </div>
        <div
          class="w-80 p-2 bg-white rounded-xl transform transition-all hover:-translate-y-2 duration-300 shadow-lg hover:shadow-2xl">
          <img class="h-49 w-full object-cover rounded-xl" src="./image/testomo/profile3.jpg" alt="">
          <div class="p-2">
            <h1 class="font-extrabold text-lg mb-2 ">Heading</h1>
            <p class="text-md text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor numquam
              repudiandae aliquid....</p>
          </div>
          <div class="m-2 text-lg ">
            <a role='button' href='#'
              class="text-white bg-green-500 text-sm px-3 py-2 rounded-md hover:bg-purple-700">Learn
              More</a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php
  include("footer.php");
  ?>
</body>
<script>
const videoLink = document.querySelector("a[href='./video/aboutvideo.webm']");
const video = document.querySelector("video"); // Assuming video is added later
const closeButton = document.querySelector(".closebutton"); // Corrected class name

closeButton.style.display = "none"; // Initially hide the button

videoLink.addEventListener("click", () => {
    video.play(); // Assuming video is added and played dynamically
    closeButton.style.display = "block"; // Show the button when video starts
});

closeButton.addEventListener("click", () => {
    video.pause();
    closeButton.style.display = "none"; // Hide the button when video is paused
});

</script>
</html>