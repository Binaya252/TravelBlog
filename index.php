<?php
$pageTitle = "Home";
$pageDescription = "TravelBlog — travel stories, reviews, and media to plan smarter.";
$activePage = "home";

/* ---------- Demo data (replace with DB later) ---------- */
$featuredBlogs = [
  [
    "id" => 1,
    "title" => "3 Days in Sydney",
    "desc" => "Beaches, food, and an easy itinerary.",
    "img" => "images/sydneyhouse.jpg",
    "imgAlt" => "Sydney Opera House near the water",
    "category" => "City",
    "time" => "6 min read",
    "author" => "Admin"
  ],
  [
    "id" => 2,
    "title" => "Budget Bali",
    "desc" => "Under $500 — stays, food, transport, and local tips.",
    "img" => "images/tropicalbeach.jpg",
    "imgAlt" => "Tropical beach with palm trees",
    "category" => "Beaches",
    "time" => "7 min read",
    "author" => "Admin"
  ],
  [
    "id" => 3,
    "title" => "Blue Mountains Weekend",
    "desc" => "Beginner-friendly trails + lookout spots.",
    "img" => "images/bluemountain.jpg",
    "imgAlt" => "Mountain lookout over a valley",
    "category" => "Mountains",
    "time" => "5 min read",
    "author" => "Admin"
  ],
];

$latestPosts = [
  [
    "id" => 4,
    "title" => "Cliff Views & Sunset Spots",
    "desc" => "The best cliffside lookouts with safety tips.",
    "img" => "images/cliff2.jpg",
    "imgAlt" => "Cliff viewpoint over forest valley",
    "category" => "Trails",
    "time" => "4 min read"
  ],
  [
    "id" => 5,
    "title" => "Hiking Trail Starter Pack",
    "desc" => "What to pack, what to avoid, and smart trail habits.",
    "img" => "images/hikingtrail.jpg",
    "imgAlt" => "Hiking trail to a viewpoint",
    "category" => "Hiking",
    "time" => "6 min read"
  ],
  [
    "id" => 6,
    "title" => "City Skylines at Night",
    "desc" => "Where to go for skyline views and photo angles.",
    "img" => "images/skyline.jpg",
    "imgAlt" => "City skyline over water",
    "category" => "City",
    "time" => "5 min read"
  ],
  [
    "id" => 7,
    "title" => "Resort Pool Day Done Right",
    "desc" => "Chill itinerary + budget tips for resort stays.",
    "img" => "images/resortpool1.jpg",
    "imgAlt" => "Resort pool scene",
    "category" => "Beaches",
    "time" => "4 min read"
  ],
];

/* Media preview (use your media gallery style keys correctly) */
$mediaPreview = [
  ["full"=>"images/sydneyhouse.jpg", "thumb"=>"images/sydneyhouse.jpg", "alt"=>"Sydney Opera House near the water"],
  ["full"=>"images/tropicalbeach.jpg", "thumb"=>"images/tropicalbeach.jpg", "alt"=>"Tropical beach with palm trees"],
  ["full"=>"images/bluemountain.jpg", "thumb"=>"images/bluemountain.jpg", "alt"=>"Mountain lookout over a valley"],
  ["full"=>"images/hikingtrail.jpg", "thumb"=>"images/hikingtrail.jpg", "alt"=>"Hiking trail to a viewpoint"],
];

/* Reviews (left slider area) */
$reviewsPreview = [
  ["title" => "Amazing views", "meta" => "5/5 • Alex", "text" => "Easy trails, great lookout. Go early!"],
  ["title" => "Worth it", "meta" => "4/5 • Sam", "text" => "Super scenic. Parking was busy though."],
  ["title" => "Perfect weekend", "meta" => "5/5 • Mina", "text" => "Great photos, clean vibe, and easy to plan with the blog."],
];

/* Sidebar data */
$categories = ["City","Beaches","Mountains","Trails","Hiking"];
$topRated = array_slice($featuredBlogs, 0, 3);

include "header.php";
?>

<main id="main-content" class="page-container" role="main">

  <!-- =========================
       HOME LAYOUT (MAIN + SIDEBAR)
       ========================= -->
  <section class="home-layout" aria-label="Homepage layout with right sidebar">

    <!-- =========================
         MAIN COLUMN
         ========================= -->
    <div class="home-main">

      <!-- ===== HOME: HERO ===== -->
      <section class="section section-hero" aria-labelledby="hero-title">
        <div class="section-inner hero-grid">
          <div>
            <h1 id="hero-title">Travel Blogging &amp; Review Platform</h1>
            <p class="muted">
              Read travel stories, compare reviews, and plan trips with confidence.
            </p>

            <div class="hero-actions">
              <a class="btn-primary" href="blog-list.php">Explore Blogs</a>
              <a class="btn-secondary" href="register.php">Join Now</a>
            </div>

            <ul class="hero-badges" aria-label="Key features">
              <li class="badge">Blogs</li>
              <li class="badge">Ratings</li>
              <li class="badge">Media</li>
              <li class="badge">Mobile-first</li>
            </ul>
          </div>

          <!-- hero image (keep big + clean crop via CSS) -->
          <img
            src="images/LookingAtSun.jpg"
            alt="Traveler with a backpack looking at mountains"
            class="hero-img"
            loading="eager"
          />
        </div>
      </section>

      <!-- ===== HOME: WHAT YOU CAN DO ===== -->
      <section class="section section-soft" aria-labelledby="skills-title">
        <div class="section-inner">
          <h2 id="skills-title">What you can do here</h2>

          <div class="cards-3" aria-label="Platform capabilities">
            <article class="mini-card">
              <h3><i class="fa-solid fa-book-open" aria-hidden="true"></i> Browse Blogs</h3>
              <p class="muted">Discover destination guides, itineraries, and real travel experiences.</p>
            </article>

            <article class="mini-card">
              <h3><i class="fa-solid fa-star" aria-hidden="true"></i> Read Reviews</h3>
              <p class="muted">Compare ratings and comments to choose places smarter.</p>
            </article>

            <article class="mini-card">
              <h3><i class="fa-solid fa-image" aria-hidden="true"></i> Explore Media</h3>
              <p class="muted">Photos + short clips to preview the vibe before you go.</p>
            </article>
          </div>
        </div>
      </section>

      <!-- ===== HOME: FEATURED BLOGS (BIGGER CARDS) ===== -->
      <section class="section" aria-labelledby="featured-title">
        <div class="section-inner">
          <div class="section-head">
            <div>
              <h2 id="featured-title">Featured Blogs</h2>
              <p class="muted">Top picks — quick reads with high value.</p>
            </div>
            <a class="btn-secondary" href="blog-list.php">View All</a>
          </div>

          <div class="featured-grid" aria-label="Featured blogs">
            <?php foreach ($featuredBlogs as $b): ?>
              <article class="feature-card">
                <a class="feature-media" href="blog-detail.php?id=<?php echo urlencode($b["id"]); ?>">
                  <img
                    src="<?php echo htmlspecialchars($b["img"]); ?>"
                    alt="<?php echo htmlspecialchars($b["imgAlt"]); ?>"
                    loading="lazy"
                  />
                </a>

                <div class="feature-body">
                  <p class="feature-meta">
                    <span class="tag"><?php echo htmlspecialchars($b["category"]); ?></span>
                    <span class="muted">• <?php echo htmlspecialchars($b["time"]); ?></span>
                  </p>

                  <h3 class="feature-title">
                    <a href="blog-detail.php?id=<?php echo urlencode($b["id"]); ?>">
                      <?php echo htmlspecialchars($b["title"]); ?>
                    </a>
                  </h3>

                  <p class="muted"><?php echo htmlspecialchars($b["desc"]); ?></p>

                  <a class="link" href="blog-detail.php?id=<?php echo urlencode($b["id"]); ?>">
                    Read more →
                  </a>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <!-- ===== HOME: REVIEWS (LEFT) + NEWSLETTER (RIGHT) ===== -->
      <section class="section section-accent" aria-labelledby="review-title">
        <div class="section-inner split-grid">

          <!-- LEFT: Reviews slider (demo) -->
          <div class="review-panel" aria-label="What travelers are saying">
            <h2 id="review-title">What travelers are saying</h2>
            <p class="muted">Real-ish feedback UI — backend can load these later.</p>

            <div class="review-slider" data-review-slider>
              <?php foreach ($reviewsPreview as $idx => $r): ?>
                <article class="review-slide <?php echo $idx === 0 ? 'is-active' : ''; ?>">
                  <h3 class="review-title"><?php echo htmlspecialchars($r["title"]); ?></h3>
                  <p class="muted"><?php echo htmlspecialchars($r["meta"]); ?></p>
                  <p><?php echo htmlspecialchars($r["text"]); ?></p>
                </article>
              <?php endforeach; ?>
            </div>

            <div class="review-controls" aria-label="Review slider controls">
              <button class="btn-secondary" type="button" data-review-prev aria-label="Previous review">←</button>
              <button class="btn-secondary" type="button" data-review-next aria-label="Next review">→</button>
            </div>
          </div>

          <!-- RIGHT: Newsletter card -->
          <div class="newsletter-card" aria-label="Subscribe to newsletter">
            <h3>Subscribe to our newsletter</h3>
            <p class="muted">Get weekly travel tips, new blogs, and top-rated spots. No spam.</p>

            <form class="newsletter-form" action="#" method="post" aria-label="Newsletter signup">
              <div class="form-group">
                <label for="news-name">Name</label>
                <input id="news-name" name="name" type="text" placeholder="Your name" autocomplete="name" required />
              </div>

              <div class="form-group">
                <label for="news-email">Email</label>
                <input id="news-email" name="email" type="email" placeholder="you@example.com" autocomplete="email" required />
              </div>

              <div class="newsletter-actions">
                <button class="btn-primary" type="submit">Subscribe</button>
                <p class="muted tiny">Demo only — backend will save later.</p>
              </div>
            </form>

            <div class="newsletter-perks" aria-label="Newsletter benefits">
              <div class="perk"><i class="fa-solid fa-bolt" aria-hidden="true"></i><span>New posts alerts</span></div>
              <div class="perk"><i class="fa-solid fa-location-dot" aria-hidden="true"></i><span>Hidden gems</span></div>
              <div class="perk"><i class="fa-solid fa-wallet" aria-hidden="true"></i><span>Budget hacks</span></div>
            </div>
          </div>

        </div>
      </section>

      <!-- ===== HOME: LATEST POSTS GRID ===== -->
      <section class="section" aria-labelledby="latest-title">
        <div class="section-inner">
          <div class="section-head">
            <div>
              <h2 id="latest-title">Latest Posts</h2>
              <p class="muted">Fresh content — skim fast, read deeper later.</p>
            </div>
            <a class="btn-secondary" href="blog-list.php">Browse All</a>
          </div>

          <div class="latest-grid" aria-label="Latest posts grid">
            <?php foreach ($latestPosts as $p): ?>
              <article class="latest-card">
                <a class="latest-media" href="blog-detail.php?id=<?php echo (int)$p["id"]; ?>">
                  <img src="<?php echo htmlspecialchars($p["img"]); ?>" alt="<?php echo htmlspecialchars($p["imgAlt"]); ?>" loading="lazy" />
                </a>

                <div class="latest-body">
                  <p class="feature-meta">
                    <span class="tag"><?php echo htmlspecialchars($p["category"]); ?></span>
                    <span class="muted">• <?php echo htmlspecialchars($p["time"]); ?></span>
                  </p>

                  <h3 class="latest-title">
                    <a href="blog-detail.php?id=<?php echo (int)$p["id"]; ?>">
                      <?php echo htmlspecialchars($p["title"]); ?>
                    </a>
                  </h3>

                  <p class="muted"><?php echo htmlspecialchars($p["desc"]); ?></p>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <!-- ===== HOME: MEDIA PREVIEW (ELEGANT CROP GRID) ===== -->
      <section class="section section-soft" aria-labelledby="media-title">
        <div class="section-inner">
          <div class="section-head">
            <div>
              <h2 id="media-title">Media Gallery</h2>
              <p class="muted">A quick visual vibe of destinations.</p>
            </div>
            <a class="btn-secondary" href="media.php">Open Media</a>
          </div>

          <div class="media-preview-grid" aria-label="Media preview grid">
            <?php foreach ($mediaPreview as $m): ?>
              <a class="media-preview-item" href="media.php" aria-label="Open media page">
                <img
                  src="<?php echo htmlspecialchars($m["thumb"]); ?>"
                  alt="<?php echo htmlspecialchars($m["alt"]); ?>"
                  loading="lazy"
                />
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </section>

      <!-- ===== HOME: FINAL CTA ===== -->
      <section class="section section-cta" aria-labelledby="cta-title">
        <div class="section-inner cta-box">
          <div>
            <h2 id="cta-title">Ready to share your travel story?</h2>
            <p class="muted">Create an account and start posting (backend connects later).</p>
          </div>
          <a class="btn-primary" href="register.php">Create Account</a>
        </div>
      </section>

    </div>

    <!-- =========================
         RIGHT SIDEBAR
         ========================= -->
    <aside class="home-sidebar" aria-label="Homepage sidebar">

      <!-- Top Rated -->
      <section class="side-card" aria-labelledby="top-rated-title">
        <h2 id="top-rated-title">Top Rated</h2>
        <ul class="popular-list">
          <?php foreach ($topRated as $t): ?>
            <li>
              <a href="blog-detail.php?id=<?php echo (int)$t["id"]; ?>">
                <?php echo htmlspecialchars($t["title"]); ?>
              </a>
              <span class="muted"><?php echo htmlspecialchars($t["category"]); ?> • <?php echo htmlspecialchars($t["time"]); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>

      <!-- Categories -->
      <section class="side-card" aria-labelledby="cat-title">
        <h2 id="cat-title">Categories</h2>
        <div class="chip-row" aria-label="Category shortcuts">
          <?php foreach ($categories as $c): ?>
            <a class="chip" href="blog-list.php?cat=<?php echo urlencode($c); ?>">
              <?php echo htmlspecialchars($c); ?>
            </a>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- Quick Media -->
      <section class="side-card" aria-labelledby="quick-media-title">
        <h2 id="quick-media-title">Quick Media</h2>
        <div class="quick-media-grid" aria-label="Quick media preview">
          <?php foreach ($mediaPreview as $m): ?>
            <a class="quick-media-item" href="media.php" aria-label="Open media page">
              <img src="<?php echo htmlspecialchars($m["thumb"]); ?>" alt="<?php echo htmlspecialchars($m["alt"]); ?>" loading="lazy" />
            </a>
          <?php endforeach; ?>
        </div>
      </section>

    </aside>
  </section>

</main>

<?php include "footer.php"; ?>
