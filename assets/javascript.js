// imagesLoaded(document.querySelector("#container"), function (instance) {
//   console.log("all images are loaded");
// });
var img = document.querySelectorAll("img");
var imgLoad = imagesLoaded(img);
var counter = document.getElementById("counter");
imgLoad
  .on("progress", function (instance, image, i) {
    var result = image.isLoaded ? "loaded" : "broken";
    counter.innerHTML = instance.progressedCount + "/" + img.length;
  })
  .on("done", function () {
    setTimeout(() => {
      counter.style.display = "none";
    }, 1000);
    var figures = document.querySelectorAll("figure");
    figures.forEach((figure) => {
      var width = figure.querySelector("img").getBoundingClientRect().width;
      var caption = figure.querySelector("figcaption");
      figure.classList.add("mb-2");
      if (caption) {
        caption.style.width = width - "15" + "px";
        caption.classList.add("mx-2", "my-1");
      }
    });
  });
