<?php
$pageTitle = "Register";
$activePage = "register";
include "header.php";

$submitted = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $submitted = true; // demo only
}
?>

<main id="main-content" class="page-container" role="main">

  <section class="auth-shell" aria-label="Register page">
    <div class="auth-card" aria-labelledby="register-title">
      <h1 id="register-title">Create Account</h1>
      <p class="muted">Join TravelBlog to save posts and leave reviews.</p>

      <?php if ($submitted): ?>
        <div class="form-message success" role="status" aria-live="polite">
          Account created (demo). Backend will store users later.
        </div>
      <?php endif; ?>

      <form method="post" class="form" aria-label="Register form">
        <div class="form-group">
          <label for="r-name">Full Name</label>
          <input id="r-name" name="name" type="text" autocomplete="name" required />
        </div>

        <div class="form-group">
          <label for="r-email">Email Address</label>
          <input id="r-email" name="email" type="email" autocomplete="email" required />
        </div>

        <div class="form-group">
          <label for="r-pass">Password</label>
          <input id="r-pass" name="password" type="password" autocomplete="new-password" required />
          <p class="help-text muted">Use 8+ characters. (Backend will enforce rules later.)</p>
        </div>

        <button class="btn-primary btn-block" type="submit">Create Account</button>

        <p class="auth-foot">
          Already have an account?
          <a class="link" href="login.php">Log in</a>
        </p>
      </form>
    </div>
  </section>

</main>

<?php include "footer.php"; ?>
