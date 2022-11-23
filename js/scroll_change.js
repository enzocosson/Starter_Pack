window.onscroll = () => {
  scrollNavbar();
};

scrollNavbar = () => {
  // Target elements
  const navBar = document.querySelector(".header");
  const links = document.querySelectorAll(".header a");

  if (document.documentElement.scrollTop > 100) {
    navBar.classList.add("nav-colored");

    // Change the color of links on scroll
    for (let i = 0; i < links.length; i++) {
      const element = links[i];
      element.classList.add("text-black");
    }
  } else {
    navBar.classList.remove("nav-colored");

    // Change the color of links back to default
    for (let i = 0; i < links.length; i++) {
      const element = links[i];
      element.classList.remove("text-black");
    }
  }
};
