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

  <!-- BLOGS DROPDOWN -->
  <li class="nav-item has-dropdown">
    <button class="nav-link dropdown-toggle" type="button"
      aria-haspopup="true" aria-expanded="false" aria-controls="dd-blogs">
      Blogs <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
    </button>

    <ul class="dropdown" id="dd-blogs" role="menu" aria-label="Blog categories">
      <li role="none"><a role="menuitem" href="blog-list.php" class="dropdown-link">All Blogs</a></li>
      <li role="none"><a role="menuitem" href="blog-list.php?cat=City" class="dropdown-link">City</a></li>
      <li role="none"><a role="menuitem" href="blog-list.php?cat=Beaches" class="dropdown-link">Beaches</a></li>
      <li role="none"><a role="menuitem" href="blog-list.php?cat=Mountains" class="dropdown-link">Mountains</a></li>
      <li role="none"><a role="menuitem" href="blog-list.php?cat=Trails" class="dropdown-link">Trails</a></li>
      <li role="none"><a role="menuitem" href="blog-list.php?cat=Hiking" class="dropdown-link">Hiking</a></li>
    </ul>
  </li>

  <!-- MEDIA DROPDOWN -->
  <li class="nav-item has-dropdown">
    <button class="nav-link dropdown-toggle" type="button"
      aria-haspopup="true" aria-expanded="false" aria-controls="dd-media">
      Media <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
    </button>

    <ul class="dropdown" id="dd-media" role="menu" aria-label="Media sections">
      <li role="none"><a role="menuitem" href="media.php#images" class="dropdown-link">Images</a></li>
      <li role="none"><a role="menuitem" href="media.php#videos" class="dropdown-link">Videos</a></li>
      <li role="none"><a role="menuitem" href="media.php" class="dropdown-link">Open Media Page</a></li>
    </ul>
  </li>

  <!-- ABOUT DROPDOWN -->
  <li class="nav-item has-dropdown">
    <button class="nav-link dropdown-toggle" type="button"
      aria-haspopup="true" aria-expanded="false" aria-controls="dd-about">
      About <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
    </button>

    <ul class="dropdown" id="dd-about" role="menu" aria-label="About sections">
      <li role="none"><a role="menuitem" href="about.php" class="dropdown-link">About Us</a></li>
      <li role="none"><a role="menuitem" href="about.php#values" class="dropdown-link">Our Values</a></li>
      <li role="none"><a role="menuitem" href="about.php#privacy" class="dropdown-link">Privacy Notice</a></li>
      <li role="none"><a role="menuitem" href="about.php#offer" class="dropdown-link">Contact</a></li>
    </ul>
  </li>

  <li><a href="contact.php" class="<?php echo $currentPage==='contact.php'?'active':''; ?>">Contact</a></li>

  <li><a href="login.php" class="nav-cta <?php echo $currentPage==='login.php'?'active':''; ?>">Login / Signup</a></li>
</ul>
      </nav>

    </div>
  </header>
