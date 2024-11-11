// slider below contact us on home page

let currentIndex = 0;

function showSlide(index) {
  const slides = document.querySelector(".slides");
  const totalSlides = document.querySelectorAll(".testimonial").length;

  // Wrap around the index if it's out of bounds
  if (index >= totalSlides) {
    currentIndex = 0;
  } else if (index < 0) {
    currentIndex = totalSlides - 1;
  } else {
    currentIndex = index;
  }

  // Calculate the new position and apply it
  const offset = -currentIndex * 100; // Move based on current index
  slides.style.transform = `translateX(${offset}%)`;
}

function moveSlide(direction) {
  showSlide(currentIndex + direction);
}

// Automatically show the first slide
showSlide(currentIndex);

// Optional: Auto-slide every 3 seconds
setInterval(() => {
  moveSlide(1);
}, 3000);
