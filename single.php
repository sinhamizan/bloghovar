<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package BlogHovar
 */

	get_header();
?>

<main id="primary" class="site-main">
  <div class="single-blog">
    <div class="container">
      <div class="row">
        <div class="col-xxl-8 col-xl-8 col-lg-8">
          <?php
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/content', 'single' );
						endwhile; 
					?>

          <div class="next_prev">
            <div class="prev_post"><?php previous_post_link(); ?></div>
            <div class="next_post"><?php next_post_link(); ?></div>
          </div>
        </div>

        <div class="col-xxl-4 col-xl-4 col-lg-4">
          <div class="blog__sidebar">
            <?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Comment section start -->
  <section class="comment__area">
    <div class="container">
      <div class="row">
        <div class="col-xxl-12">
          <?php comments_template(); ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Comment section end -->

</main>

<?php get_footer(); ?>