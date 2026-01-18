<?php
$pageTitle = "TravelBlog | Blogs";
$pageDescription = "Explore travel blogs by category, vibe, and destination type.";
$activePage = "blogs";
include "header.php";

/* Demo posts (replace with DB later) */
$posts = [
  ["id"=>1,"title"=>"3 Days in Sydney","category"=>"City","excerpt"=>"Beaches, food, and an easy itinerary.","img"=>"images/sydneyhouse.jpg","alt"=>"Sydney Opera House near the water","time"=>"6 min read"],
  ["id"=>2,"title"=>"Budget Bali","category"=>"Beaches","excerpt"=>"How to do it under $500 — stays, food, transport.","img"=>"images/tropicalbeach.jpg","alt"=>"Tropical beach with palm trees","time"=>"7 min read"],
  ["id"=>3,"title"=>"Blue Mountains Weekend","category"=>"Mountains","excerpt"=>"Beginner-friendly trails + lookout spots.","img"=>"images/bluemountain.jpg","alt"=>"Mountain lookout over a valley","time"=>"5 min read"],
  ["id"=>4,"title"=>"Cliff Views & Sunset Spots","category"=>"Trails","excerpt"=>"The best cliffside lookouts with safety tips.","img"=>"images/cliff2.jpg","alt"=>"Cliff viewpoint over forest valley","time"=>"4 min read"],
  ["id"=>5,"title"=>"Hiking Trail Starter Pack","category"=>"Hiking","excerpt"=>"What to pack, what to avoid, and smart trail habits.","img"=>"images/hikingtrail.jpg","alt"=>"Hiking trail to a viewpoint","time"=>"6 min read"],
  ["id"=>6,"title"=>"City Skylines at Night","category"=>"City","excerpt"=>"Where to go for skyline views and photo angles.","img"=>"images/skyline.jpg","alt"=>"City skyline over water","time"=>"5 min read"],
  ["id"=>7,"title"=>"Resort Pool Day Done Right","category"=>"Beaches","excerpt"=>"Chill itinerary + budget tips for resort stays.","img"=>"images/resortpool1.jpg","alt"=>"Resort pool scene","time"=>"4 min read"],
];

/* Categories (match your UI) */
$categories = ["All","City","Asia","Mountains","Trails","Hiking","Beaches"];

/* Filters from query string */
$selected = $_GET["cat"] ?? "All";
$q = trim($_GET["q"] ?? "");

/* Filter posts */
$filtered = array_values(array_filter($posts, function($p) use ($selected, $q){
  $matchCat = ($selected === "All" || $p["category"] === $selected);
  $matchQ = ($q === "" || stripos($p["title"], $q) !== false || stripos($p["excerpt"], $q) !== false);
  return $matchCat && $matchQ;
}));
$topRated = array_slice($posts, 0, 3);

/* Sidebar content  */
$popular = array_slice($posts, 0, 4);
$featured = array_slice($posts, 0, 3);
?>

<main id="main-content" class="page-container" role="main">

  <!-- Page header -->
  <section class="page-head" aria-label="Blog list header">
    <div class="page-head-inner">
      <div>
        <h1>Blogs</h1>
        <p class="muted">Browse stories like a travel magazine: categories, highlights, and quick reads.</p>
      </div>

      <?php if ($q !== ""): ?>
        <p class="muted page-head-note">
          Showing results for: <strong><?php echo htmlspecialchars($q); ?></strong>
          <a class="link" href="blog-list.php" style="margin-left:10px;">Clear</a>
        </p>
      <?php endif; ?>
    </div>
  </section>

  <!-- Two-column layout (main + sidebar) -->
  <section class="blog-layout" aria-label="Blog layout with sidebar">

    <!-- Main column -->
    <div class="blog-main">

      <!-- Category chips -->
      <nav class="chip-row" aria-label="Blog categories">
        <?php foreach($categories as $cat): ?>
          <a
            class="chip <?php echo $selected === $cat ? "chip-active" : ""; ?>"
            href="blog-list.php?cat=<?php echo urlencode($cat); ?>&q=<?php echo urlencode($q); ?>"
          >
            <?php echo htmlspecialchars($cat); ?>
          </a>
        <?php endforeach; ?>
      </nav>

      <!-- Featured section (like a directory top block) -->
      <section class="section" aria-label="Featured posts">
        <div class="section-head">
          <div>
            <h2>Editor Picks</h2>
            <p class="muted">Quick highlights to start with.</p>
          </div>
        </div>

        <div class="featured-grid">
          <?php foreach($featured as $p): ?>
            <article class="featured-card">
              <a class="featured-media" href="blog-detail.php?id=<?php echo (int)$p["id"]; ?>">
                <img src="<?php echo htmlspecialchars($p["img"]); ?>" alt="<?php echo htmlspecialchars($p["alt"]); ?>" loading="lazy" />
              </a>

              <div class="featured-body">
                <p class="blog-kicker">
                  <span class="tag"><?php echo htmlspecialchars($p["category"]); ?></span>
                  <span class="muted">• <?php echo htmlspecialchars($p["time"]); ?></span>
                </p>

                <h3 class="featured-title">
                  <a href="blog-detail.php?id=<?php echo (int)$p["id"]; ?>">
                    <?php echo htmlspecialchars($p["title"]); ?>
                  </a>
                </h3>

                <p class="muted"><?php echo htmlspecialchars($p["excerpt"]); ?></p>

                <a class="link" href="blog-detail.php?id=<?php echo (int)$p["id"]; ?>">Read more →</a>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </section>
      <!-- TOP RATED SECTION -->
<section class="section" aria-labelledby="top-rated-title">
  <div class="section-head">
    <div>
      <h2 id="top-rated-title">Top Rated</h2>
      <p class="muted">Most loved by readers this week</p>
    </div>
  </div>

  <div class="top-rated-grid">
    <?php foreach ($topRated as $p): ?>
      <article class="top-card">
        <a href="blog-detail.php?id=<?php echo (int)$p['id']; ?>">
          <img
            src="<?php echo htmlspecialchars($p['img']); ?>"
            alt="<?php echo htmlspecialchars($p['alt']); ?>"
            loading="lazy"
          />
        </a>

        <div class="top-card-body">
          <span class="rating-badge">★ Top Rated</span>

          <h3>
            <a href="blog-detail.php?id=<?php echo (int)$p['id']; ?>">
              <?php echo htmlspecialchars($p['title']); ?>
            </a>
          </h3>

          <p class="muted"><?php echo htmlspecialchars($p['excerpt']); ?></p>

          <p class="meta">
            <span class="tag"><?php echo htmlspecialchars($p['category']); ?></span>
            • <?php echo htmlspecialchars($p['time']); ?>
          </p>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>


      <!-- Main list -->
      <section class="section" aria-label="All blog posts">
        <div class="section-head">
          <div>
            <h2>All Posts</h2>
            <!-- <p class="muted">Scroll-friendly list view (mobile first).</p> -->
          </div>
        </div>

        <?php if (empty($filtered)): ?>
          <div class="card">
            <h3>No blogs found</h3>
            <p class="muted">Try another category or a different search term.</p>
          </div>
        <?php endif; ?>

        <div class="blog-list" aria-label="Blog list">
          <?php foreach($filtered as $p): ?>
            <article class="blog-row">
              <a class="blog-thumb" href="blog-detail.php?id=<?php echo (int)$p["id"]; ?>">
                <img
                  src="<?php echo htmlspecialchars($p["img"]); ?>"
                  alt="<?php echo htmlspecialchars($p["alt"]); ?>"
                  loading="lazy"
                />
              </a>

              <div class="blog-row-body">
                <p class="blog-kicker">
                  <span class="tag"><?php echo htmlspecialchars($p["category"]); ?></span>
                  <span class="muted">• <?php echo htmlspecialchars($p["time"]); ?></span>
                </p>

                <h3 class="blog-row-title">
                  <a href="blog-detail.php?id=<?php echo (int)$p["id"]; ?>">
                    <?php echo htmlspecialchars($p["title"]); ?>
                  </a>
                </h3>

                <p class="muted"><?php echo htmlspecialchars($p["excerpt"]); ?></p>

                <a class="link" href="blog-detail.php?id=<?php echo (int)$p["id"]; ?>">Read more →</a>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </section>

      <!-- Explore by topic (directory blocks) -->
      <section class="section" aria-label="Explore by topic">
        <div class="section-head">
          <div>
            <h2>Explore by Topic</h2>
            <!-- <p class="muted">Quick entry points — helps users scan faster.</p> -->
          </div>
        </div>

        <div class="topic-grid">
          <a class="topic-card" href="blog-list.php?cat=City&q=<?php echo urlencode($q); ?>">
            <h3>City</h3>
            <p class="muted">Food, transport, itineraries.</p>
          </a>

          <a class="topic-card" href="blog-list.php?cat=Asia&q=<?php echo urlencode($q); ?>">
            <h3>Asia</h3>
            <p class="muted">Budget hacks + cultural highlights.</p>
          </a>

          <a class="topic-card" href="blog-list.php?cat=Mountains&q=<?php echo urlencode($q); ?>">
            <h3>Mountains</h3>
            <p class="muted">Lookouts, cool weather, hikes.</p>
          </a>

          <a class="topic-card" href="blog-list.php?cat=Trails&q=<?php echo urlencode($q); ?>">
            <h3>Trails</h3>
            <p class="muted">Scenic routes and safety tips.</p>
          </a>

          <a class="topic-card" href="blog-list.php?cat=Hiking&q=<?php echo urlencode($q); ?>">
            <h3>Hiking</h3>
            <p class="muted">Gear, beginner routes, checklist.</p>
          </a>

          <a class="topic-card" href="blog-list.php?cat=Beaches&q=<?php echo urlencode($q); ?>">
            <h3>Beaches</h3>
            <p class="muted">Relax, swim, sunset spots.</p>
          </a>
        </div>
      </section>

    </div>

    <!-- Sidebar -->
    <aside class="blog-sidebar" aria-label="Blog sidebar">

      <!-- Optional: small search helper (uses your header search too, but this is “magazine-like”) -->
      <section class="side-card" aria-labelledby="side-search">
        <h2 id="side-search">Search</h2>
        <form class="side-form" action="blog-list.php" method="get" role="search" aria-label="Search blogs in sidebar">
          <label class="sr-only" for="side-q">Search</label>
          <input id="side-q" name="q" type="search" placeholder="Search blogs..." value="<?php echo htmlspecialchars($q); ?>" />
          <input type="hidden" name="cat" value="<?php echo htmlspecialchars($selected); ?>" />
          <button class="btn-primary" type="submit">Go</button>
        </form>
      </section>

      <section class="side-card" aria-labelledby="side-topics">
        <h2 id="side-topics">Browse by Topic</h2>
        <ul class="side-links">
          <?php foreach($categories as $cat): ?>
            <li>
              <a href="blog-list.php?cat=<?php echo urlencode($cat); ?>&q=<?php echo urlencode($q); ?>">
                <?php echo htmlspecialchars($cat); ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>

      <section class="side-card" aria-labelledby="side-popular">
        <h2 id="side-popular">Popular This Week</h2>
        <ul class="popular-list">
          <?php foreach($popular as $p): ?>
            <li>
              <a href="blog-detail.php?id=<?php echo (int)$p["id"]; ?>">
                <?php echo htmlspecialchars($p["title"]); ?>
              </a>
              <span class="muted"><?php echo htmlspecialchars($p["category"]); ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>

      <section class="side-card" aria-labelledby="side-newsletter">
        <h2 id="side-newsletter">Get Travel Updates</h2>
        <p class="muted"> Your daily newsletter with the latest travel blogs and tips.
          <!-- Demo newsletter box (backend later). -->
        </p>

        <form class="side-form" action="#" method="post" aria-label="Newsletter signup">
          <label class="sr-only" for="news-email">Email</label>
          <input id="news-email" type="email" placeholder="you@example.com" required />
          <button class="btn-primary" type="submit">Subscribe</button>
        </form>
      </section>

    </aside>

  </section>

</main>

<?php include "footer.php"; ?>
