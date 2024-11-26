document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".card");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animate"); // Add animation class
        }
      });
    },
    { threshold: 0.2 } // Trigger when 20% of the card is visible
  );

  cards.forEach((card) => {
    observer.observe(card);
  });
});



 