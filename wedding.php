<?php
include("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="output.css">
    <script src="./tailwindCss.js"></script>

</head>

<body>

  <div class="gallery-container">
        <div class="inner-container">
            <div class="main-gallery-container">
                <div class="gallery-title font-extrabold text-2xl">
                    <h1>WEDDING</h1>
                </div>
                <div class="gallery-detail text-xl">
                    <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora repellat dicta officiis quod non
                        harum! Fugit nam quam doloremque vitae magni quidem voluptas dignissimos repellat est, fuga
                        maxime sit cum?
                    </p>
                </div>

                <!-- photos -->
                <div class="main-img-cont">
                    <img src="./image/weading/wedding1.jpg" alt="baby-img">
                </div>

                <div class="mini-img-container">
                    <div class="row-img-container">
                        <div class="first-col-container">
                            <img class="first" src="./image/weading/wedding2.jpg">
                            <img class="second" src="./image/weading/wedding3.jpg">
                        </div>
                        
                    </div>
                </div>

                <div class="big-img-cont">
                    <img src="./image/weading/wedding4.jpg" alt="baby-img">
                </div>

                <div class="big-img-cont">
                    <img src="./image/weading/wedding5.jpg" alt="baby-img">
                </div>

                <div class="row-img-container">
                    <div class="first-col-container">
                        <img src="./image/weading/wedding6.jpg" alt="" class="first">
                        <img class="second" src="./image/weading/wedding7.jpg">
                    </div>
                </div>

                <div class="row-img-container">
                    <div class="first-col-container">
                        <img src="./image/weading/wedding8.jpg" alt="" class="first">
                        <img class="second" src="./image/weading/wedding9.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="image-slider" id="imageSlider">
        <div class="slider-content">
            <img id="sliderImage" src="" alt="Slider Image">
        </div>
        <div class="slider-nav">
            <button id="prevBtn" onclick="changeImage(-1)">Previous</button>
            <button id="nextBtn" onclick="changeImage(1)">Next</button>
        </div>

    </div>

    <?Php
    include("footer.php");
    ?>
</body>
    <script src="galler.js"></script>
</html>
