<?php get_header(); ?>

    <div class="container">
      <div class="row">

        <!-- MAIN CONTENT -->
        <div class="col-md-9 main">
          <!-- Start the Loop. -->
          <?php if ( have_posts()) : while (have_posts()) : the_post(); ?>

          <article class="post">
            <?php 
                $attachment_id = get_post_thumbnail_id(get_the_ID());        
                $attachment_meta = wp_prepare_attachment_for_js( $attachment_id );

                $image_url = $attachment_meta['url'];
                $image_alt = $attachment_meta['alt'];            
            ?>

            <p><img class="featured-image"src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"></p>

            <header class="post-header">
                <h1><?php the_title(''); ?></h1>
                <ul class="meta">
                  <li class="meta-author fa fa-user"> <?php the_author_posts_link(); ?></li>
                  <li class="meta-time fa fa-clock-o"> <?php the_time( 'l, F jS, Y' ); ?></li> 
                  <li class="meta-category fa fa-folder-open-o "> <?php the_category(' , '); ?></li>
                </ul>
            </header> <!--/ .meta -->

           <?php the_content(); ?>

           <hr>

           <?php comments_template(); ?>
            
          </article><!--blog post-->

          <?php endwhile; else: ?>

          <h1 class="search_error"><?php _e( 'Sorry, no posts matched your criteria.', $domain = 'theme-dev-framework' ); ?></h1>
                
          <?php endif; ?>
        </div> <!-- end col-md-9 -->

        <?php get_sidebar('blog');?>

      </div> <!-- end row -->
    </div> <!-- end container -->

<?php get_footer(); ?>
