function toogleMuted() {
  const muteBtn = document.querySelector(".muteBtn");
  const muted = document.querySelector(".muted");
  const noMuted = document.querySelector(".noMuted");

  const video = document.getElementById("interstellar_ba");
  console.log(video.muted);

  muteBtn.addEventListener("click", () => {
    muted.classList.toggle("muted_active");
    noMuted.classList.toggle("noMuted_active");
  });
}

toogleMuted();
