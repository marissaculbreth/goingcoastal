<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <?php dynamic_sidebar('left-sidebar'); ?>
    </div>
    <main class="col-md-9">
      <?php if(have_posts()) {
        while(have_posts()) {
          the_post(); ?>
          <h2 class="entry-title"><?php the_title(); ?></h2>
          <?php the_content(); ?>
  <?php } //ends while loop
      } //ends if statement
      ?>
    </main>
  </div>
</div>


<?php get_footer(); ?>
