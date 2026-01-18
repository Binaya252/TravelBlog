<?php
$pageTitle = "About Us";
$activePage = "about";
include "header.php";

$aboutBadges = ["Blogs", "Reviews", "Media", "Accessible UI"];

$offers = [
  ["title" => "Travel Blogs", "text" => "Destination guides, itineraries, and personal stories."],
  ["title" => "Ratings & Reviews", "text" => "User feedback to compare experiences and expectations."],
  ["title" => "Media Gallery", "text" => "Photos and short videos to preview the vibe of a place."]
];

$values = [
  ["title" => "Accessibility", "text" => "Semantic HTML, labels, alt text, keyboard support, and clear headings."],
  ["title" => "Quality", "text" => "Simple, consistent UI with mobile-first layout for real usability."],
  ["title" => "Integrity", "text" => "Respect privacy, explain data use clearly, and design for trust."]
];
?>

<main id="main-content" class="page-container" role="main">

  <!-- <HERO / PAGE INTRO -->
  <section class="section section-hero" aria-labelledby="about-title">
    <div class="section-inner about-hero">
      <div>
        <h1 id="about-title">About TravelBlog</h1>
        <p class="muted">
          TravelBlog is a travel blogging and review platform where users can read real travel experiences,
          compare destination ratings, and explore media highlights all in an accessible, user-friendly design.
        </p>

        <ul class="hero-badges" aria-label="About highlights">
          <?php foreach ($aboutBadges as $b): ?>
            <li class="badge"><?php echo htmlspecialchars($b); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <img
        src="images/traveller_map.jpg"
        alt="A traveler reading a map with mountains in the background"
        class="hero-img"
      />
    </div>
  </section>

  <!-- MISSION -->
  <section class="section section-soft" aria-labelledby="mission-title">
    <div class="section-inner">
      <h2 id="mission-title">Our Mission</h2>
      <p class="muted">
        Our mission is to make travel planning easier through honest stories and practical reviews.
        We aim to help users decide faster by providing clear blog content, rating summaries, and media previews.
      </p>
    </div>
  </section>

  <!-- WHAT WE OFFER -->
  <section id="offer" class="section" aria-labelledby="offer-title">
    <div class="section-inner">
      <h2 id="offer-title">What We Offer</h2>

      <div class="cards-3" role="list" aria-label="Platform features">
        <?php foreach ($offers as $o): ?>
          <article class="mini-card" role="listitem">
            <h3><?php echo htmlspecialchars($o["title"]); ?></h3>
            <p class="muted"><?php echo htmlspecialchars($o["text"]); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- WHY CHOOSE US -->
  <section class="section section-accent" aria-labelledby="why-title">
    <div class="section-inner">
      <h2 id="why-title">Why Choose TravelBlog?</h2>
      <p class="muted">
        Unlike random social posts, TravelBlog keeps information structured: blog details, rating summaries, and review forms
        are designed for readability and trust. This makes the platform easier to use, especially with world becoming more closer together.
      </p>
    </div>
  </section>

  <!-- VALUES -->
  <section id="values" class="section" aria-labelledby="values-title">
    <div class="section-inner">
      <h2 id="values-title">Our Values</h2>

      <div class="cards-3" role="list" aria-label="Values list">
        <?php foreach ($values as $v): ?>
          <article class="mini-card" role="listitem">
            <h3><?php echo htmlspecialchars($v["title"]); ?></h3>
            <p class="muted"><?php echo htmlspecialchars($v["text"]); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- PRIVACY NOTICE -->
  <section id="privacy" class="section section-soft" aria-labelledby="privacy-title">
    <div class="section-inner">
      <h2 id="privacy-title">Privacy Notice </h2>
      <p class="muted">
        We collect only the information needed to provide the service (e.g. account details and submitted reviews).
        Passwords should be securely stored using hashing on the backend. User data is not sold, and access control should
        restrict admin-only features.
      </p>
    </div>
  </section>
   <!-- TRUST / PRIVACY -->
  <section class="section" aria-labelledby="trust-title">
    <div class="section-inner">
      <h2 id="trust-title">Privacy &amp; accessibility built-in</h2>

      <div class="cards-3">
        <article class="mini-card">
          <h3>Accessible UI</h3>
          <p class="muted">Semantic HTML, labels, alt text, keyboard support.</p>
        </article>

        <article class="mini-card">
          <h3>Validation</h3>
          <p class="muted">Forms designed for safe input and clean UX.</p>
        </article>

        <article class="mini-card">
          <h3>Secure by design</h3>
          <p class="muted">Backend will handle hashing, sessions, and roles.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section section-cta" aria-labelledby="cta-title">
    <div class="section-inner cta-box">
      <div>
        <h2 id="cta-title">Start sharing your travel experience</h2>
        <p class="muted">Create an account and become part of the TravelBlog community.</p>
      </div>
      <a href="register.php" class="btn-primary">Create Account</a>
    </div>
  </section>

</main>

<?php include "footer.php"; ?>
