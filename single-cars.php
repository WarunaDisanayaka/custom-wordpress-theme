<?php
    get_header();
?>
<section class="shop-img">
<?php if ( get_field( 'background_image' ) ) : ?>
	<img src="<?php the_field('background_image')?>" class="img-fluid" alt="Responsive image">
<?php endif ?>

</section>
<div class="container shop-content">
    
<h1><?php the_title(); ?></h1>

    <?php get_template_part('includes/section','blogcontent');?>

</div>
<!-- Container for the image gallery -->
<div class="container">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <?php if ( get_field( 'image_1' ) ) : ?>
	<img src="<?php the_field( 'image_1' ); ?>" style="width:100%" />
<?php endif ?>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <?php if ( get_field( 'image_1' ) ) : ?>
	<img src="<?php the_field( 'image_1' ); ?>" style="width:100%" />
<?php endif ?>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <?php if ( get_field( 'image_1' ) ) : ?>
	<img src="<?php the_field( 'image_1' ); ?>" style="width:100%" />
<?php endif ?>
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <?php if ( get_field( 'image_1' ) ) : ?>
	<img src="<?php the_field( 'image_1' ); ?>" style="width:100%" />
<?php endif ?>
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <?php if ( get_field( 'image_1' ) ) : ?>
	<img src="<?php the_field( 'image_1' ); ?>" style="width:100%" />
<?php endif ?>
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <?php if ( get_field( 'image_1' ) ) : ?>
	<img src="<?php the_field( 'image_1' ); ?>" style="width:100%" />
<?php endif ?>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="<?php the_field( 'image_1' ); ?>" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php the_field( 'image_2' ); ?>" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php the_field( 'image_3' ); ?>" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php the_field( 'image_4' ); ?>" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php the_field( 'image_5' ); ?>" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>
    <div class="column">
      <img class="demo cursor" src="<?php the_field( 'image_6' ); ?>" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>

<?php
    get_footer(); 
?>