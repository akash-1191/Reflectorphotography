
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
                <div class="gallery-title font-extrabold text-5xl">
                    <h1>WEDDING</h1>
                </div>
                

                <!-- photos -->
                <div class="main-img-cont">
                    <img src="https://www.taj.studio/wp-content/uploads/2018/05/017-1200x800.jpg" alt="weading image">
                </div>

                <div class="row-img-container">
                    <div class="first-col-container">
                        <img src="https://www.taj.studio/wp-content/uploads/2018/05/015.jpg" alt="" class="first">
                        <img class="second" src="https://www.taj.studio/wp-content/uploads/2018/05/016-1.jpg">
                    </div>
                </div>

                <div class="row-img-container">
                    <div class="first-col-container">
                        <img src="https://www.taj.studio/wp-content/uploads/2018/05/016-1.jpg" alt="" class="first">
                        <img class="second" src="https://www.taj.studio/wp-content/uploads/2018/05/022.jpg">
                    </div>
                </div>
                
                <div class="big-img-cont">
                    <img src="https://www.taj.studio/wp-content/uploads/2018/10/Taj_0026-1200x800.jpg" alt="weading image">
                </div>
                
                <div class="big-img-cont">
                    <img src="https://www.taj.studio/wp-content/uploads/2018/10/Taj_0022-1200x800.jpg" alt="weading image">
                </div>
                
                <div class="mini-img-container">
                    <div class="row-img-container">
                        <div class="first-col-container">
                            <img class="first" src="https://www.taj.studio/wp-content/uploads/2018/10/Taj_0022-1200x800.jpg">
                            <img class="second" src="https://www.taj.studio/wp-content/uploads/2018/10/Taj_0022-1200x800.jpg">
                        </div>
                        
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
<?php
include("footer.php");
?>
    
</body>
    <script src="galler.js"></script>
</html>
