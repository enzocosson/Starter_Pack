function afficherPP() {
  const containerImg = document.querySelector(".container_pp");

  containerImg.classList.add("container_pp_active");
}

function fermerPP() {
  const containerImg = document.querySelector(".container_pp");

  containerImg.classList.remove("container_pp_active");
}
