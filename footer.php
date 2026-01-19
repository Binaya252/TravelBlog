<footer class="site-footer" role="contentinfo">
  <div class="page-container footer-bar">

    <!-- Column 1: Quick Links -->
    <section class="footer-left" aria-labelledby="footer-links-title">
      <h2 id="footer-links-title" class="footer-title">Quick Links</h2>
      <ul class="footer-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="blog-list.php">Blogs</a></li>
        <li><a href="media.php">Media</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </section>

    <!-- Column 2: Blog Categories -->
    <section class="footer-center" aria-labelledby="footer-cats-title">
      <h2 id="footer-cats-title" class="footer-title">Blog Categories</h2>
      <ul class="footer-links">
        <li><a href="blog-list.php?cat=City">City</a></li>
        <li><a href="blog-list.php?cat=Beaches">Beaches</a></li>
        <li><a href="blog-list.php?cat=Mountains">Mountains</a></li>
        <li><a href="blog-list.php?cat=Trails">Trails</a></li>
        <li><a href="blog-list.php?cat=Hiking">Hiking</a></li>
      </ul>
    </section>

    <!-- Column 3: Social -->
    <section class="footer-right" aria-labelledby="footer-social-title">
      <h2 id="footer-social-title" class="footer-title">Follow Us On The Web</h2>

      <ul class="social-links" role="list">
        <li><a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
        <li><a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a></li>
        <li><a href="#" aria-label="X / Twitter"><i class="fa-brands fa-x-twitter"></i></a></li>
        <li><a href="#" aria-label="Pinterest"><i class="fa-brands fa-pinterest-p"></i></a></li>
      </ul>
    </section>

  </div>

  <!-- Bottom row: copyright + scroll button -->
  <div class="page-container footer-bottom">
    <p>&copy; <?php echo date("Y"); ?> TravelBlog — Sharing journeys worldwide</p>

    <button class="to-top" type="button" aria-label="Scroll to top">
      <i class="fa-solid fa-chevron-up" aria-hidden="true"></i>
    </button>
  </div>
</footer>

<script src="app.js"></script>

<script>
  // Scroll to top (works even if you forget to add it in app.js)
  document.addEventListener("DOMContentLoaded", () => {
    const btn = document.querySelector(".to-top");
    if (!btn) return;
    btn.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  });
</script>

</body>
</html>
