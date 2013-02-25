<?php
$active = 'home';
include 'header.php';
?>

<div><h1>Tramore Tennis Club</h1></div>
<div id="myCarousel" class="carousel slide">
  <div class="carousel-inner">
    <div class="item active">
      <img src="files/albums/2-opt.jpg" alt="">
    </div>
    <div class="item">
      <img src="files/albums/1-opt.jpg" alt="">
    </div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<?php include 'newsfeed.php'; ?> 
<?php include 'footer.php'; ?>
