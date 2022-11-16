function hoverBa() {
    const containerAffiche = document.querySelectorAll('.container_affiche');
    const bgBa = document.querySelectorAll('.bg_ba');

   
  containerAffiche.forEach(function (item) {
    item.addEventListener("mouseover", () => {
        bgBa.forEach(function (item2) {
            item2.classList.add("bg_ba_active");
        });
    });
    item.addEventListener("mouseout", () => {
        bgBa.forEach(function (item2) {
            item2.classList.remove("bg_ba_active");
        });
    });
  });
}
hoverBa();
