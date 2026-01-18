<?php
$pageTitle = "Contact";
$activePage = "contact";
include "header.php";

$sent = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $sent = true; // demo only (backend later)
}
?>

<main id="main-content" class="page-container" role="main">

  <!-- Page header -->
  <section class="page-head" aria-labelledby="contact-title">
    <h1 id="contact-title">Contact Us</h1>
    <p class="muted">Have questions or feedback? Reach out — we’re here to help.</p>
  </section>

  <!-- Two-column layout -->
  <section class="form-layout" aria-label="Contact page layout">

    <!-- Left info -->
    <aside class="info-card" aria-labelledby="touch-title">
      <h2 id="touch-title">Get in Touch</h2>

      <ul class="info-list">
        <li>
          <span class="info-label">Email</span>
          <a class="info-value" href="mailto:support@travelblog.com">support@travelblog.com</a>
        </li>
        <li>
          <span class="info-label">Phone</span>
          <a class="info-value" href="tel:+61123456789">+61 123 456 789</a>
        </li>
        <li>
          <span class="info-label">Location</span>
          <span class="info-value">Sydney, Australia</span>
        </li>
      </ul>

      <div class="info-tip">
        <p class="muted">
          Tip: Include your destination + what you were trying to do. Faster support.
        </p>
      </div>
    </aside>

    <!-- Right form -->
    <section class="form-card" aria-labelledby="message-title">
      <h2 id="message-title">Send Us a Message</h2>

      <?php if ($sent): ?>
        <div class="form-message success" role="status" aria-live="polite">
          Message sent
            <!-- Backend will handle delivery . -->

        </div>
      <?php endif; ?>

      <form action="contact.php" method="post" class="form" aria-label="Contact form">
        <div class="form-group">
          <label for="c-name">Full Name</label>
          <input id="c-name" name="name" type="text" autocomplete="name" required />
        </div>

        <div class="form-group">
          <label for="c-email">Email Address</label>
          <input id="c-email" name="email" type="email" autocomplete="email" required />
        </div>

        <div class="form-group">
          <label for="c-subject">Subject</label>
          <input id="c-subject" name="subject" type="text" required />
        </div>

        <div class="form-group">
          <label for="c-message">Message</label>
          <textarea id="c-message" name="message" rows="6" required></textarea>
        </div>

        <button type="submit" class="btn-primary btn-block">Send Message</button>
      </form>
    </section>

  </section>
</main>

<?php include "footer.php"; ?>
