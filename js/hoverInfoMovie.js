function hoverInfoMovie() {
  const carrouselAffiche = document.querySelectorAll(".carrousel_affiche");
  const containerGenre = document.querySelector(".container_genre");
  const hoverInfo = document.querySelectorAll(".hoverInfo");
  const carrouselGenre = document.querySelector(".carrousel_genre");

  carrouselAffiche.forEach(function (item) {
    item.addEventListener("click", () => {
      containerGenre.classList.toggle("container_genre_active");
      carrouselGenre.classList.toggle("carrousel_genre_active");

      hoverInfo.forEach(function (item2) {
        item2.classList.toggle("hoverInfo_active");
      })

    });
  });
}
hoverInfoMovie();
