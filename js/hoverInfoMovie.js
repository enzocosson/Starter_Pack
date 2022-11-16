function hoverInfoMovie() {
  const carrouselAfficheTendance = document.querySelectorAll(
    ".carrousel_genre_tendance .carrousel_affiche"
  );
  const carrouselGenreTendance = document.querySelector(
    ".carrousel_genre_tendance"
  );

  carrouselAfficheTendance.forEach(function (item) {
    item.addEventListener("mouseover", () => {
      carrouselGenreTendance.classList.add("carrousel_genre_tendance_active");
    });
    item.addEventListener("mouseout", () => {
      carrouselGenreTendance.classList.remove(
        "carrousel_genre_tendance_active"
      );
    });
  });

  // ----------------------------ACTION

  const carrouselAfficheAction = document.querySelectorAll(
    ".carrousel_genre_action .carrousel_affiche"
  );
  const carrouselGenreAction = document.querySelector(
    ".carrousel_genre_action"
  );

  carrouselAfficheAction.forEach(function (item) {
    item.addEventListener("mouseover", () => {
      carrouselGenreAction.classList.add("carrousel_genre_action_active");
    });
    item.addEventListener("mouseout", () => {
      carrouselGenreAction.classList.remove("carrousel_genre_action_active");
    });
  });

  // ----------------------------AVENTURE

  const carrouselAfficheAventure = document.querySelectorAll(
    ".carrousel_genre_aventure .carrousel_affiche"
  );
  const carrouselGenreAventure = document.querySelector(
    ".carrousel_genre_aventure"
  );

  carrouselAfficheAventure.forEach(function (item) {
    item.addEventListener("mouseover", () => {
      carrouselGenreAventure.classList.add("carrousel_genre_aventure_active");
    });
    item.addEventListener("mouseout", () => {
      carrouselGenreAventure.classList.remove(
        "carrousel_genre_aventure_active"
      );
    });
  });

  // ----------------------------THRILLER

  const carrouselAfficheThriller = document.querySelectorAll(
    ".carrousel_genre_thriller .carrousel_affiche"
  );
  const carrouselGenreThriller = document.querySelector(
    ".carrousel_genre_thriller"
  );

  carrouselAfficheThriller.forEach(function (item) {
    item.addEventListener("mouseover", () => {
      carrouselGenreThriller.classList.add("carrousel_genre_thriller_active");
    });
    item.addEventListener("mouseout", () => {
      carrouselGenreThriller.classList.remove(
        "carrousel_genre_thriller_active"
      );
    });
  });

  // ----------------------------ROMANCE

  const carrouselAfficheRomance = document.querySelectorAll(
    ".carrousel_genre_romance .carrousel_affiche"
  );
  const carrouselGenreRomance = document.querySelector(
    ".carrousel_genre_romance"
  );

  carrouselAfficheRomance.forEach(function (item) {
    item.addEventListener("mouseover", () => {
      carrouselGenreRomance.classList.add("carrousel_genre_romance_active");
    });
    item.addEventListener("mouseout", () => {
      carrouselGenreRomance.classList.remove("carrousel_genre_romance_active");
    });
  });
}
hoverInfoMovie();
