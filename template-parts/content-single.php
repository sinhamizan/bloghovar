<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BlogHovar
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="blog-details__area">
    <div class="blog-details__top">
      <h2 class="blog-details__title">
        <?php the_title(); ?></h2>
      <div class="blog__meta-list">
        <ul>
          <?php 
						$blog_categories = get_the_category();
						foreach( $blog_categories as $blog_cat ):
					?>
          <li><a href="<?php echo get_category_link( $blog_cat->term_id ); ?>"><?php echo wp_kses_post($blog_cat->name); ?></a>
          </li>
          <?php endforeach; ?>
          <li><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><i
            class="fa-regular fa-user"></i> <?php the_author(); ?></a></li>
          <li><i class="fa-regular fa-calendar"></i> <?php echo get_the_date(); ?></li>
          <li><a href="#comments"><i class="fa-regular fa-comment"></i> <?php echo comments_number(); ?></a></li>
        </ul>
      </div>
      <?php 
				if( has_post_thumbnail() ):
					the_post_thumbnail();
				endif;
			?>
    </div>

    <div class="blog-details__content">
      <?php the_content(); ?>
    </div>

    <?php if( get_the_tags() ): ?>
      <div class="blog-details__tags">
        <div>
          <h2 class="tags-title"><?php __( 'Tagged with:', 'bloghovar' ); ?></h2>
        </div>
        <ul class="tag-lists">
          <?php
            the_tags(" ", " ", " ");	
          ?>
        </ul>
      </div>
    <?php endif; ?>
  </div>
</article>