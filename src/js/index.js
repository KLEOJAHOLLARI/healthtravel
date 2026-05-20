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

//get  full year
const year = document.getElementById("year");

if (year) {
  year.textContent = new Date().getFullYear();
}

//responsible navbar
const icon = document.querySelectorAll(".icon");
const allLinks = document.querySelectorAll("a:link");

allLinks.forEach(function (link) {
  if (link.classList.contains("main-nav-link"))
    headerEl.classList.toggle("nav-open");
});

//accordion in hair transplant
const accordion = document.querySelectorAll(".accordion");

accordion.forEach(function (item) {
  item.addEventListener("click", function () {
    this.classList.toggle("active");

    const panel = this.nextElementSibling;

    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
});
