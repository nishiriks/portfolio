document.addEventListener("DOMContentLoaded", () => {
  // 1. Set Current Copyright Year
  const yearEl = document.getElementById("current-year");
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }

  // 2. Active Navbar Item Highlight on Scroll
  const sections = document.querySelectorAll("section[id], header[id]");
  const navLinks = document.querySelectorAll(".navitem");

  const highlightNavOnScroll = () => {
    let current = "";
    const scrollPosition = window.scrollY + 150; // Threshold offset for top navigation

    sections.forEach((section) => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.offsetHeight;

      if (
        scrollPosition >= sectionTop &&
        scrollPosition < sectionTop + sectionHeight
      ) {
        current = section.getAttribute("id");
      }
    });

    navLinks.forEach((link) => {
      link.classList.remove("active");
      const href = link.getAttribute("href");

      if (href === `#${current}` || (current === "" && href === "#home")) {
        link.classList.add("active");
      }
    });
  };

  // Run on scroll and once on page load
  window.addEventListener("scroll", highlightNavOnScroll);
  highlightNavOnScroll();
});