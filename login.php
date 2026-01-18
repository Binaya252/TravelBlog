<?php
$pageTitle = "Login";
$activePage = "login";
include "header.php";

$submitted = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $submitted = true; // demo only
}
?>

<main id="main-content" class="page-container" role="main">

  <section class="auth-shell" aria-label="Login page">
    <div class="auth-card" aria-labelledby="login-title">
      <h1 id="login-title">Welcome Back</h1>
      <p class="muted">Log in to access your account and saved blogs.</p>

      <?php if ($submitted): ?>
        <div class="form-message success" role="status" aria-live="polite">
          Logged in (demo). Backend will validate credentials later.
        </div>
      <?php endif; ?>

      <form method="post" class="form" aria-label="Login form">
        <div class="form-group">
          <label for="l-email">Email Address</label>
          <input id="l-email" name="email" type="email" autocomplete="email" required />
        </div>

        <div class="form-group">
          <label for="l-pass">Password</label>
          <input id="l-pass" name="password" type="password" autocomplete="current-password" required />
        </div>

        <button class="btn-primary btn-block" type="submit">Log In</button>

        <p class="auth-foot">
          Don’t have an account?
          <a class="link" href="register.php">Sign up</a>
        </p>
      </form>
    </div>
  </section>

</main>

<?php include "footer.php"; ?>
