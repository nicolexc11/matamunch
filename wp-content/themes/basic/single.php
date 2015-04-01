<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
<div class="col-xs-11 col-xs-offset-1 col-md-4 col-md-offset-4 venue-title">
    <h1><?php the_title(); ?></h1></div>
    <div class="col-xs-11 col-xs-offset-1">
  <?php the_content(); ?>
  </div>

  <div class="row col-xs-11 col-xs-offset-1 metaslider">
  <?php echo do_shortcode("[metaslider id=]"); ?>
  </div>

  <div class="col-xs-11 col-xs-offset-1">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h2 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Hours
        </a>
      </h2>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <p><?php the_field('hours');?><p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h2 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Area
        </a>
      </h2>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <p><?php the_field('area');?></p>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h2 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Food Options
        </a>
      </h2>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
        <p><?php the_field('food_options');?></p>
      </div>
    </div>
  </div>
</div>
</div>

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>