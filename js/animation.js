  //scroll hide/show navbar
  let lastScrollTop = 0;
  const navbar = document.getElementById("mainNavbar");

  window.addEventListener("scroll", function () {
    let scrollTop = window.scrollY;

    if (scrollTop > lastScrollTop) {
      navbar.classList.add("navbar-hidden");
    } else {
      navbar.classList.remove("navbar-hidden");
    }

    lastScrollTop = scrollTop;
  });

  document.addEventListener("DOMContentLoaded", () => {
  const banner = document.querySelector(".contact-banner");

  // resets the class to trigger animation each timethe  page loads
  banner.classList.remove("show");
  setTimeout(() => {
    banner.classList.add("show");
  }, 100); 
});