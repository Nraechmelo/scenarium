var menu = document.getElementById("menu");
var burgerMenu = document.getElementById("menu-burger");
var title = document.getElementById("titleleft");

burgerMenu.addEventListener("click", function () {
  if (menu.getAttribute("class") != "visible") {
    menu.setAttribute("class", "visible");
    if (title.getAttribute("class") != "effacer") {
      title.classList.remove("appear");
      title.classList.add("effacer");
    }
  } else {
    menu.setAttribute("class", "invisible");
    title.classList.remove("effacer");
    title.classList.add("appear");
  }
});
