
// loading code
setTimeout(function () {
  document.getElementById('preloader').style.display = 'none';
  document.body.style.overflow = 'visible';
}, 2000);


// gallery slider 

document.addEventListener('DOMContentLoaded', function () {
  let imageSlider = document.getElementById('imageSlider');
  let currentIndex = 0;
  let sliderImage = document.getElementById('sliderImage');
  let thumbnails = document.querySelectorAll('img');
  let prevBtn = document.getElementById('prevBtn');
  let nextBtn = document.getElementById('nextBtn');

  function changeImage(step) {
      currentIndex += step;

      const totalImages = thumbnails.length;

      if (currentIndex < 0) {
          currentIndex = totalImages - 1;
      } else if (currentIndex >= totalImages) {
          currentIndex = 0;
      }

      // Set the source of the current image to the slider
      sliderImage.src = thumbnails[currentIndex].src;
  }

  // Add click event listener to each thumbnail image
  thumbnails.forEach(thumbnail => {
      thumbnail.addEventListener('click', () => {
          // Show the image slider
          imageSlider.style.display = 'flex';

          // Set the source of the clicked image to the slider
          sliderImage.src = thumbnail.src;

          // Prevent scrolling when the slider is open
          document.body.style.overflow = 'hidden';
      });
  });

  // Add event listeners to the "Previous" and "Next" buttons
  prevBtn.addEventListener('click', () => changeImage(-1));
  nextBtn.addEventListener('click', () => changeImage(1));

  // Close the image slider when clicking outside the image
  imageSlider.addEventListener('click', (event) => {
      if (event.target === imageSlider) {
          imageSlider.style.display = 'none';
          document.body.style.overflow = 'auto';
      }
  });
});
// end  gallery slider 



