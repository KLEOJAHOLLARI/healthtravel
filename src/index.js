const coll = document.getElementsByClassName("collapsible");
const sectionHeroEL = document.getElementById("hero");

const btnNavEl = document.querySelector(".btn-mobile-nav");
const headerEl = document.querySelector(".header");
const icon = document.querySelectorAll(".icon");

btnNavEl.addEventListener("click", function (e) {
  e.preventDefault();
  headerEl.classList.toggle("nav-open");
});

const allLinks = document.querySelectorAll("a:link");
allLinks.forEach(function (link) {
  if (link.classList.contains("main-nav-link"))
    headerEl.classList.toggle("nav-open");
});

const obs = new IntersectionObserver(
  function (entries) {
    const ent = entries[0];
    if (!ent.isIntersecting)
      document.querySelector(".header").classList.add("sticky");
    if (ent.isIntersecting)
      document.querySelector(".header").classList.remove("sticky");
  },
  {
    root: null,
    threshold: 0,
    rootMargin: "-64px",
  },
);
obs.observe(sectionHeroEL);

let i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("active");
    const content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

for (i = 0; i < pos.length; i++) {
  pos[i].iddEventListener("click", function () {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight) {
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
