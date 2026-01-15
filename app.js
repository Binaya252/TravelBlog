
document.addEventListener("DOMContentLoaded", () => {
  setActiveNav();
  initHamburgerMenu();
  initLightbox();
});

function setActiveNav() {
  const currentPage = window.location.pathname.split("/").pop() || "index.html";
  document.querySelectorAll(".nav-menu a").forEach(link => {
    if (link.getAttribute("href") === currentPage) link.classList.add("active");
  });
}

function initHamburgerMenu() {
  const toggle = document.querySelector(".nav-toggle");
  const menu = document.querySelector(".nav-menu");
  if (!toggle || !menu) return;

  toggle.addEventListener("click", () => {
    const open = menu.classList.toggle("active");
    toggle.setAttribute("aria-expanded", String(open));
  });
}

/* Accessible Lightbox for Media page (only runs if elements exist) */
function initLightbox() {
  const items = document.querySelectorAll("[data-full]");
  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightbox-img");
  const closeBtn = document.getElementById("lightbox-close");

  if (!items.length || !lightbox || !lightboxImg || !closeBtn) return;

  let lastFocused = null;

  items.forEach(item => {
    item.addEventListener("click", () => {
      const full = item.getAttribute("data-full");
      lastFocused = document.activeElement;

      lightboxImg.src = full;
      lightbox.classList.add("active");
      lightbox.setAttribute("aria-hidden", "false");
      closeBtn.focus();
    });
  });

  function closeLightbox() {
    lightbox.classList.remove("active");
    lightbox.setAttribute("aria-hidden", "true");
    lightboxImg.src = "";
    if (lastFocused) lastFocused.focus();
  }

  closeBtn.addEventListener("click", closeLightbox);

  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && lightbox.classList.contains("active")) {
      closeLightbox();
    }
  });
}
