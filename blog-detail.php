<?php
$pageTitle = "Blog Detail";
$pageDescription = "Read travel stories and reviews.";
$activePage = "blogs";
include "header.php";

$id = (int)($_GET["id"] ?? 3);

$posts = [
  1 => [
    "title" => "3 Days in Sydney: Beaches + Food",
    "author" => "Admin",
    "category" => "City",
    "img" => "images/sydneyhouse.jpg",
    "alt" => "Sydney Opera House near the water",
    "overview" => "A simple Sydney plan with beaches, local food, and easy transport tips.",
    "spots" => ["Opera House + Circular Quay", "Bondi to Coogee walk", "Darling Harbour"],
    "rating" => "4.6/5",
    "goodFor" => "first-time visitors, food lovers, short trips",
    "readTime" => "6 min read",
    "date" => "Jan 2026"
  ],
  2 => [
    "title" => "Budget Trip to Bali: Under $500",
    "author" => "Admin",
    "category" => "Beaches",
    "img" => "images/tropicalbeach.jpg",
    "alt" => "Tropical beach with palm trees",
    "overview" => "Cost breakdown for flights, stays, food, and activities — keeping it affordable.",
    "spots" => ["Local warungs", "Beach sunset spots", "Budget-friendly hostels"],
    "rating" => "4.8/5",
    "goodFor" => "budget travel, friends trips, beach vibes",
    "readTime" => "7 min read",
    "date" => "Jan 2026"
  ],
  3 => [
    "title" => "Blue Mountains Weekend Guide",
    "author" => "Admin",
    "category" => "Mountains",
    // IMPORTANT: make this match your real filename
    "img" => "images/bluemoutain.jpg",
    "alt" => "A scenic mountain lookout with a walking track",
    "overview" => "The Blue Mountains are great for a simple weekend trip. This guide covers what to do, where to go, and what to pack.",
    "spots" => ["Echo Point lookout", "Wentworth Falls track", "Local cafés near Katoomba"],
    "rating" => "4.5/5",
    "goodFor" => "beginners, weekend trips, scenic photos",
    "readTime" => "5 min read",
    "date" => "Jan 2026"
  ],
];

$post = $posts[$id] ?? $posts[3];

$reviews = [
  ["title"=>"Amazing views", "meta"=>"5/5 • Alex", "text"=>"Easy trails, great lookout. Go early!"],
  ["title"=>"Worth it", "meta"=>"4/5 • Sam", "text"=>"Super scenic. Parking was busy though."]
];

$related = array_values(array_filter($posts, fn($p) => $p["title"] !== $post["title"]));
$related = array_slice($related, 0, 3);

$submitted = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $submitted = true; // demo only
}
?>

<main id="main-content" class="page-container" role="main">

  <section class="post-layout" aria-label="Blog post layout with sidebar">

    <!-- Main article -->
    <article class="post-main" aria-label="Blog article">
      <header class="post-header">
        <p class="post-kicker">
          <span class="tag"><?php echo htmlspecialchars($post["category"]); ?></span>
          <span class="muted">• <?php echo htmlspecialchars($post["readTime"]); ?> • <?php echo htmlspecialchars($post["date"]); ?></span>
        </p>

        <h1 class="post-title"><?php echo htmlspecialchars($post["title"]); ?></h1>

        <p class="muted post-meta">
          Posted by <?php echo htmlspecialchars($post["author"]); ?>
        </p>
      </header>

      <figure class="post-hero">
        <img src="<?php echo htmlspecialchars($post["img"]); ?>" alt="<?php echo htmlspecialchars($post["alt"]); ?>" />
      </figure>

      <div class="post-content">
        <section aria-labelledby="overview-title">
          <h2 id="overview-title">Overview</h2>
          <p><?php echo htmlspecialchars($post["overview"]); ?></p>
        </section>

        <section aria-labelledby="spots-title">
          <h2 id="spots-title">Best Spots</h2>
          <ul class="clean-list">
            <?php foreach ($post["spots"] as $s): ?>
              <li><?php echo htmlspecialchars($s); ?></li>
            <?php endforeach; ?>
          </ul>
        </section>

        <section aria-labelledby="review-title">
          <h2 id="review-title">Quick Review</h2>
          <div class="post-facts">
            <div class="fact">
              <strong>Rating</strong>
              <span><?php echo htmlspecialchars($post["rating"]); ?></span>
            </div>
            <div class="fact">
              <strong>Good for</strong>
              <span><?php echo htmlspecialchars($post["goodFor"]); ?></span>
            </div>
          </div>
        </section>

        <div class="post-actions">
          <a class="btn-secondary" href="blog-list.php">Back to Blog List</a>
        </div>
      </div>

      <!-- Reviews list -->
      <section class="section section-accent" aria-labelledby="reviews-heading">
        <div class="section-inner review-grid">
          <div>
            <h2 id="reviews-heading">User Reviews</h2>
            <p class="muted">Sample review UI — backend will load/store these later.</p>
          </div>

          <div class="review-preview" aria-label="Sample reviews">
            <?php foreach ($reviews as $r): ?>
              <article class="review-item">
                <h3 class="review-title"><?php echo htmlspecialchars($r["title"]); ?></h3>
                <p class="muted"><?php echo htmlspecialchars($r["meta"]); ?></p>
                <p><?php echo htmlspecialchars($r["text"]); ?></p>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <!-- Review form -->
      <section class="section section-soft" aria-labelledby="add-review-title">
        <div class="section-inner">
          <h2 id="add-review-title">Add a Review</h2>

          <?php if ($submitted): ?>
            <div class="form-message success" role="status" aria-live="polite">
              Review submitted (demo). Backend will save it to database later.
            </div>
          <?php endif; ?>

          <form method="post" aria-label="Add review form" class="auth-form">
            <div class="form-group">
              <label for="r-name">Name</label>
              <input id="r-name" name="name" type="text" required autocomplete="name" />
            </div>

            <div class="form-group">
              <label for="r-rating">Rating</label>
              <select id="r-rating" name="rating" required>
                <option value="">Select</option>
                <option>5</option><option>4</option><option>3</option><option>2</option><option>1</option>
              </select>
            </div>

            <div class="form-group">
              <label for="r-comment">Comment</label>
              <textarea id="r-comment" name="comment" rows="4" required></textarea>
            </div>

            <button class="btn-primary" type="submit">Submit Review</button>
          </form>
        </div>
      </section>

    </article>

    <!-- Sidebar -->
    <aside class="post-sidebar" aria-label="Post sidebar">

      <section class="side-card" aria-labelledby="toc-title">
        <h2 id="toc-title">In this post</h2>
        <ul class="side-links">
          <li><a href="#overview-title">Overview</a></li>
          <li><a href="#spots-title">Best Spots</a></li>
          <li><a href="#review-title">Quick Review</a></li>
          <li><a href="#reviews-heading">User Reviews</a></li>
          <li><a href="#add-review-title">Add a Review</a></li>
        </ul>
      </section>

      <section class="side-card" aria-labelledby="related-title">
        <h2 id="related-title">Related posts</h2>
        <ul class="popular-list">
          <?php foreach ($related as $r): ?>
            <li>
              <a href="blog-detail.php?id=<?php echo (int)array_search($r, $posts, true); ?>">
                <?php echo htmlspecialchars($r["title"]); ?>
              </a>
              <span class="muted"><?php echo htmlspecialchars($r["category"]); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>

      <section class="side-card" aria-labelledby="share-title">
        <h2 id="share-title">Share</h2>
        <div class="share-row" role="list" aria-label="Share buttons">
          <a class="share-btn" href="#" aria-label="Share on Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a class="share-btn" href="#" aria-label="Share on X"><i class="fa-brands fa-x-twitter"></i></a>
          <a class="share-btn" href="#" aria-label="Share on Pinterest"><i class="fa-brands fa-pinterest-p"></i></a>
          <a class="share-btn" href="#" aria-label="Share on Email"><i class="fa-solid fa-envelope"></i></a>
        </div>
      </section>

    </aside>

  </section>

</main>

<?php include "footer.php"; ?>
