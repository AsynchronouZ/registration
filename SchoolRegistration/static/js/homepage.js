let homepageAnims = () => {
   let stars = document.getElementById("stars"),
      moon = document.getElementById("moon"),
      mountains_behind = document.getElementById("mountains_behind"),
      text = document.getElementById("text"),
      text2 = document.getElementById("text2"),
      btn = document.getElementById("btn"),
      mountains_front = document.getElementById("mountains_front"),
      nav = document.querySelector("nav");

   window.addEventListener("scroll", function () {
      let value = window.scrollY;
      stars.style.left = value * 0.25 + "px";
      moon.style.top = value * 1.05 + "px";
      mountains_behind.style.top = value * 0.5 + "px";
      mountains_front.style.top = value * 0 + "px";
      text.style.marginLeft = value * 4 + "px";
      text.style.marginTop = value * 3 + "px";
      text2.style.marginTop = value * 2 + "px";
      btn.style.marginTop = value * 1.5 + "px";
      nav.style.top = value * 1.5 + "px";
   });
};
