<?php get_header();
/*
Template Name: Area Page
*/
?>


	<div class="title"><h1><?php
		the_title(); ?></h1></div>

<?php 
$args = [
	'post_type'=>'place'

];

$place = new WP_Query( $args );


	if ($place->have_posts()) : while ($place->have_posts()) : $place->the_post(); ?>

	<?php the_content(); ?>

	



		<div class="grid">

			<figure class="effect-oscar">

<div class="areas col-xs-12 col-sm-6 col-md-4">

	<a href="#">
		<img src="<?php the_field('photo');?>" class="thumbnail img-responsive">

		<figcaption>
			<h3> <?php the_title(); ?></h3>
		</figcaption>
				
			</figure>
	</a>
</div>


<?php endwhile; else: ?>
	<p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?> 



