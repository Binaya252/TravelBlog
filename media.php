<?php
$pageTitle = "Media";
$activePage = "media";
include "header.php";

/* Demo data (replace with DB later) */
$gallery = [
  ["full"=>"images/sydneyhouse.jpg", "thumb"=>"images/sydneyhouse.jpg", "alt"=>"Sydney Opera House near the water"],
  ["full"=>"images/tropicalbeach.jpg", "thumb"=>"images/tropicalbeach.jpg", "alt"=>"Tropical beach with palm trees"],
  ["full"=>"images/bluemountain.jpg", "thumb"=>"images/bluemountain.jpg", "alt"=>"Mountain lookout over a valley"],
  ["full"=>"images/hikingtrail.jpg", "thumb"=>"images/hikingtrail.jpg", "alt"=>"Hiking trail to a viewpoint"],
  ["full"=>"images/LookingAtSun.jpg", "thumb"=>"images/LookingAtSun.jpg", "alt"=>"Traveler looking at sunset"],
  ["full"=>"images/resortpool1.jpg", "thumb"=>"images/resortpool1.jpg", "alt"=>"Resort scene by the pool"],
  ["full"=>"images/skyline.jpg", "thumb"=>"images/skyline.jpg", "alt"=>"Harbour view with city skyline"],
  ["full"=>"images/cliff2.jpg", "thumb"=>"images/cliff2.jpg", "alt"=>"Cliff viewpoint over forest valley"],
];

  $videos = [
  ["src"=>"videos/citylines.mp4", "cap"=>"City highlights"],
  ["src"=>"videos/beachview.mp4", "cap"=>"Beach view"],
  ["src"=>"videos/mountain.mp4", "cap"=>"Mountain views"],   
  ["src"=>"videos/riding.mp4", "cap"=>"Road trip ride"],
  ["src"=>"videos/stonemachine.mp4", "cap"=>"Landmark highlights"],
];

?>

<main id="main-content" class="page-container" role="main">

  <!-- PAGE HEADER -->
  <section class="section section-hero" aria-labelledby="media-heading">
    <div class="section-inner">
      <h1 id="media-heading">Media Gallery</h1>
      <p class="muted">
        Explore travel highlights through photos and short clips.
      </p>

      <ul class="hero-badges" aria-label="Media features">
        <li class="badge">Lightbox Preview</li>
        <li class="badge">Keyboard Friendly</li>
        <li class="badge">Mobile-first Layout</li>
        <li class="badge">Alt Text Included</li>
      </ul>
    </div>
  </section>

  <!-- MEDIA GRID -->
  <section id="images" class="media-gallery" aria-label="Travel media gallery">
  <?php foreach ($gallery as $i => $img): ?>
    <button
      class="media-item <?php echo $i >= 8 ? 'is-hidden' : ''; ?>"
      type="button"
      data-full="<?php echo htmlspecialchars($img["full"]); ?>"
      aria-label="Open image preview <?php echo $i+1; ?>"
    >
      <img
        src="<?php echo htmlspecialchars($img["thumb"]); ?>"
        alt="<?php echo htmlspecialchars($img["alt"]); ?>"
        loading="lazy"
      />
    </button>
  <?php endforeach; ?>
</section>

<div class="section" style="text-align:center;">
  <a href="#" class="btn-primary" data-load-more="images">Load More</a>
</div>


  <!-- VIDEO SECTION -->
  <section id="videos" class="section section-soft" aria-labelledby="video-heading">
    <div class="section-inner">
      <h2 id="video-heading">Featured Travel Videos</h2>
      <p class="muted">
        Watch short previews and highlights from destinations.
      </p>
<div class="video-grid" aria-label="Travel videos">
  <?php foreach ($videos as $i => $v): ?>
    <figure class="video-card <?php echo $i >= 3 ? 'is-hidden' : ''; ?>">
      <video controls preload="metadata">
        <source src="<?php echo htmlspecialchars($v["src"]); ?>" type="video/mp4">
      </video>
      <figcaption class="muted"><?php echo htmlspecialchars($v["cap"]); ?></figcaption>
    </figure>
  <?php endforeach; ?>
</div>

<div class="section" style="text-align:center;">
  <a href="#" class="btn-primary" data-load-more="videos">Load More Videos</a>
</div>

      </div>
    </div>
  </section>

</main>

<!-- LIGHTBOX MODAL -->
<div id="lightbox" class="lightbox" role="dialog" aria-modal="true" aria-hidden="true" aria-label="Image preview">
  <div class="lightbox-content">
    <button class="lightbox-close" type="button" aria-label="Close image preview">&times;</button>
    <img id="lightbox-img" alt="" />
  </div>
</div>

<?php include "footer.php"; ?>
