<?php
    get_header();
?>

<div class="container">
    
<h1><?php the_title(); ?></h1>

    <?php get_template_part('includes/section','blogcontent');?>

    <div class="col-lg-6">
        <ul>
            <li>Color:<?php the_field('color'); ?></li>
        </ul>
    </div>

</div>
<?php
    get_footer(); 
?>