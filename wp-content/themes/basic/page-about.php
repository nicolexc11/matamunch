<?php get_header();
/*
Template Name: Areas Page
*/
?>

<?php 

$args = array(
		'post_type'=>'areas'
	);

$areas = new WP_Query( $args );

if ($areas->have_posts()) : while ($areas->have_posts()) : $areas->the_post(); ?>

  	<h1><?php the_title(); ?></h1>
 	<?php the_content(); ?>


  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>