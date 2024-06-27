function animationObserver() {
  const dataAnimaElements = document.querySelectorAll("[data-anima]");

  if (!dataAnimaElements.length) return; // Ensure there are elements to observe

  // Create an IntersectionObserver instance
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {

        entry.target.classList.remove("hide");
        entry.target.classList.add("animation");
        observer.unobserve(entry.target); // Stop observing once the animation is added
      }
    });
  }, {
    root: null, // Use the viewport as the container
    rootMargin: '0px', // No margin around the container
    threshold: 0.75 // Trigger when 85% of the element is visible
  });

  dataAnimaElements.forEach(element => observer.observe(element));
}

// Run the observer initialization after the DOM content is loaded
document.addEventListener('DOMContentLoaded', animationObserver);