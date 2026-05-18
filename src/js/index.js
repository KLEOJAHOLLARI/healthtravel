const btnNavEl = document.querySelector(".btn-mobile-nav");

const headerEl = document.querySelector(".header");

//fix header
if (btnNavEl) {
  btnNavEl.addEventListener("click", function () {
    headerEl.classList.toggle("nav-open");
  });
}

window.addEventListener("scroll", function () {
  if (window.scrollY > 50) {
    headerEl.classList.add("sticky");
  } else {
    headerEl.classList.remove("sticky");
  }
});

const year = document.getElementById("year");

if (year) {
  year.textContent = new Date().getFullYear();
}
