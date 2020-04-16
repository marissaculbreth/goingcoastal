<?php get_header(); ?>

<div class="container">
  <div class="row">
    <main class="col-md-12">
      <?php if(have_posts()) {
        while(have_posts()) {
          the_post(); ?>
          <h2 class="entry-title"><?php the_title(); ?></h2>


          <div class="post-section">
            <div class="single-post-featured-image">
              <?php the_post_thumbnail('medium'); ?>
            </div>

            <?php the_content(); ?>

            <div class="price">
              <strong>Price:</strong>
              <?php the_field('price'); ?>
            </div>

            <div class="ingredients">
              <strong>Ingredients:</strong>
              <?php the_field('ingredients'); ?>
            </div>

            <div class="sides">
              <strong>Sides:</strong>
              <?php the_field('sides'); ?>
            </div>

            <div class="allergy">
              <strong>Allergy concerns:</strong>
              <?php the_field('allergy'); ?>
            </div>

            <div class="vegan">
              <strong>Vegan option:</strong>
              <?php the_field('vegan_option'); ?>
            </div>


          </div>

          <?php the_terms( $post->ID, 'seafood', 'Seafood: ', ', ', ' ' ); ?>

  <?php } //ends while loop
      } //ends if statement
      ?>
    </main>
  </div>
</div>

<?php get_footer(); ?>
