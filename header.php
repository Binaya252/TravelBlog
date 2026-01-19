<?php
  if (!isset($pageTitle)) { $pageTitle = "TravelBlog"; }
  if (!isset($pageDescription)) { $pageDescription = "Travel stories + reviews to plan smarter."; }
  $currentPage = basename($_SERVER["PHP_SELF"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>" />
  <link rel="stylesheet" href="style.css?v=3" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>
  <a href="#main-content" class="skip-link">Skip to content</a>

  <header class="site-header" role="banner">
    <div class="page-container header-row">

      <div class="brand">
        <a href="index.php" class="brand-link" aria-label="Go to homepage">
          <img src="images/logo.png" alt="TravelBlog logo" class="logo-img" />
          <div class="brand-text">
            <span class="brand-title">TravelBlog</span>
            <span class="brand-tagline">Travel stories + reviews to plan smarter.</span>
          </div>
        </a>
      </div>

      <form class="header-search" action="blog-list.php" method="get" role="search" aria-label="Search blogs">
        <label for="q" class="sr-only">Search destinations or blogs</label>
        <input id="q" name="q" type="search" placeholder="Search destinations, blogs..." />
        <button type="submit" aria-label="Search">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>

      <nav class="main-nav" aria-label="Main navigation">
        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="nav-menu" aria-label="Toggle menu">
          <i class="fa-solid fa-bars"></i>
        </button>

        <ul class="nav-menu" id="nav-menu">
         <li><a href="index.php" class="<?php echo $currentPage==='index.php'?'active':''; ?>">Home</a></li>

  <li class="has-dropdown">
  <button class="dropdown-toggle"
          type="button"
          aria-expanded="false"
          aria-controls="dd-blogs">
    Blogs <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
  </button>

  <ul class="dropdown-menu" id="dd-blogs">
    <li><a class="dropdown-link" href="blog-list.php">All Blogs</a></li>
    <li><a class="dropdown-link" href="blog-list.php?cat=City">City</a></li>
    <li><a class="dropdown-link" href="blog-list.php?cat=Beaches">Beaches</a></li>
    <li><a class="dropdown-link" href="blog-list.php?cat=Mountains">Mountains</a></li>
    <li><a class="dropdown-link" href="blog-list.php?cat=Trails">Trails</a></li>
    <li><a class="dropdown-link" href="blog-list.php?cat=Hiking">Hiking</a></li>
  </ul>
</li>

<li class="has-dropdown">
  <button class="dropdown-toggle"
          type="button"
          aria-expanded="false"
          aria-controls="dd-media">
    Media <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
  </button>

  <ul class="dropdown-menu" id="dd-media">
    <li><a class="dropdown-link" href="media.php#images">Images</a></li>
    <li><a class="dropdown-link" href="media.php#videos">Videos</a></li>
    <li><a class="dropdown-link" href="media.php">Open Media Page</a></li>
  </ul>
</li>

<li class="has-dropdown">
  <button class="dropdown-toggle"
          type="button"
          aria-expanded="false"
          aria-controls="dd-about">
    About <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
  </button>

  <ul class="dropdown-menu" id="dd-about">
    <li><a class="dropdown-link" href="about.php">About Us</a></li>
    <li><a class="dropdown-link" href="about.php#values">Our Values</a></li>
    <li><a class="dropdown-link" href="privacy.php">Privacy Notice</a></li>
    <li><a class="dropdown-link" href="contact.php">Contact</a></li>
  </ul>
</li>
<li><a href="contact.php" class="<?php echo $currentPage==='contact.php'?'active':''; ?>">Contact</a></li>

  <li><a href="login.php" class="nav-cta <?php echo $currentPage==='login.php'?'active':''; ?>">Login</a></li

      </nav>

    </div>
  </header>
