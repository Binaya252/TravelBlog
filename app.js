document.addEventListener("DOMContentLoaded", () => {
    //  MOBILE NAV (Hamburger)
  const toggle = document.querySelector(".nav-toggle");
  const menu = document.querySelector("#nav-menu");

  if (toggle && menu) {
    toggle.addEventListener("click", () => {
      const open = menu.classList.toggle("active");
      toggle.setAttribute("aria-expanded", String(open));
    });
  }

  //  NAV DROPDOWNS (Accessible)
     
  const dropdownButtons = document.querySelectorAll(".has-dropdown > .dropdown-toggle");

  function closeAllDropdowns(exceptBtn = null) {
    dropdownButtons.forEach((btn) => {
      if (exceptBtn && btn === exceptBtn) return;
      btn.setAttribute("aria-expanded", "false");
      const listId = btn.getAttribute("aria-controls");
      const list = listId ? document.getElementById(listId) : null;
      if (list) list.classList.remove("open");
    });
  }

  dropdownButtons.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();

      const isOpen = btn.getAttribute("aria-expanded") === "true";
      closeAllDropdowns(btn);

      btn.setAttribute("aria-expanded", String(!isOpen));
      const list = document.getElementById(btn.getAttribute("aria-controls"));
      if (list) list.classList.toggle("open", !isOpen);
    });

    btn.addEventListener("keydown", (e) => {
      if (e.key === "Enter" || e.key === " ") {
        e.preventDefault();
        btn.click();
      }
      if (e.key === "Escape") {
        closeAllDropdowns();
        btn.focus();
      }
    });
  });

  document.addEventListener("click", () => closeAllDropdowns());
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") closeAllDropdowns();
  });

  // If user clicks a dropdown link on mobile, close menu
  if (menu && toggle) {
    menu.addEventListener("click", (e) => {
      const link = e.target.closest("a");
      if (!link) return;

      closeAllDropdowns();

      if (window.innerWidth < 720) {
        menu.classList.remove("active");
        toggle.setAttribute("aria-expanded", "false");
      }
    });
  }

    //  MEDIA LIGHTBOX (media.php)
  const items = document.querySelectorAll(".media-item");
  const lightbox = document.getElementById("lightbox");
  const lightboxImg = document.getElementById("lightbox-img");
  const closeBtn = document.querySelector(".lightbox-close");

  const closeLightbox = () => {
    if (!lightbox) return;
    lightbox.classList.remove("active");
    lightbox.setAttribute("aria-hidden", "true");
    if (lightboxImg) lightboxImg.src = "";
  };

  if (items.length && lightbox && lightboxImg && closeBtn) {
    items.forEach((item) => {
      item.addEventListener("click", () => {
        const full = item.getAttribute("data-full");
        if (!full) return;
        lightboxImg.src = full;
        lightbox.classList.add("active");
        lightbox.setAttribute("aria-hidden", "false");
        closeBtn.focus();
      });
    });

    closeBtn.addEventListener("click", closeLightbox);

    // click outside image to close
    lightbox.addEventListener("click", (e) => {
      if (e.target === lightbox) closeLightbox();
    });

    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") closeLightbox();
    });
  }

  /* LOAD MORE (Images + Videos)*/

  document.querySelectorAll("[data-load-more]").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      e.preventDefault();

      const type = btn.getAttribute("data-load-more");
      const selector = type === "videos" ? ".video-card.is-hidden" : ".media-item.is-hidden";
      const hidden = Array.from(document.querySelectorAll(selector));

      // Reveal next batch (tweak batch sizes here)
      const batchSize = type === "videos" ? 3 : 8;
      hidden.slice(0, batchSize).forEach((el) => el.classList.remove("is-hidden"));

      // Hide button if nothing left
      if (document.querySelectorAll(selector).length === 0) {
        btn.style.display = "none";
      }
    });
  });

  /*  HOME: REVIEWS SLIDER (index.php)*/

  const reviewRoot = document.querySelector("[data-review-slider]");
  if (reviewRoot) {
    const slides = Array.from(reviewRoot.querySelectorAll(".review-slide"));
    const prev = document.querySelector("[data-review-prev]");
    const next = document.querySelector("[data-review-next]");

    let idx = slides.findIndex((s) => s.classList.contains("is-active"));
    if (idx < 0) idx = 0;

    const show = (i) => {
      slides.forEach((s) => s.classList.remove("is-active"));
      slides[i].classList.add("is-active");
    };

    const go = (dir) => {
      idx = (idx + dir + slides.length) % slides.length;
      show(idx);
    };

    prev && prev.addEventListener("click", () => go(-1));
    next && next.addEventListener("click", () => go(1));

    let timer = setInterval(() => go(1), 6000);

    // pause on hover/focus
    reviewRoot.addEventListener("mouseenter", () => clearInterval(timer));
    reviewRoot.addEventListener("mouseleave", () => (timer = setInterval(() => go(1), 6000)));
    reviewRoot.addEventListener("focusin", () => clearInterval(timer));
    reviewRoot.addEventListener("focusout", () => (timer = setInterval(() => go(1), 6000)));

    show(idx);
  }

  /* SCROLL TO TOP (Footer) */
  
  const scrollBtn = document.querySelector("[data-scroll-top]");
  if (scrollBtn) {
    const toggleScrollBtn = () => {
      // show after some scroll
      if (window.scrollY > 400) scrollBtn.classList.add("show");
      else scrollBtn.classList.remove("show");
    };

    window.addEventListener("scroll", toggleScrollBtn);
    toggleScrollBtn();

    scrollBtn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }
});
