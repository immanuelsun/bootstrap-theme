<?php get_header(); ?>

    <div class="container">

      <div class="page-header">
        <div class="row">
          <div class="col-sm-9">
            <h1>Portfolio</h1>
          </div> <!--/ .col-sm-9 -->
          <div class="col-sm-3 portfolio-nav">
            <?php next_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>' ); ?>
            <a href="<?php bloginfo('url'); ?>/example-pages/portfolio-grid-w-custom-posts/"><span class="glyphicon glyphicon-th"></span></a>
            <?php previous_post_link( '%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>' ); ?>
          </div> <!--/ .col-sm-3 -->
        </div> <!--/ .row -->
      </div> <!--/ page-header -->

      <div class="row">

        <!-- MAIN CONTENT -->
          <!-- Start the Loop. -->
          <?php if ( have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="col-sm-8 portfolio-image">
              <?php
              $thumbnail_id = get_post_thumbnail_id( );
              $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
            ?>
             <p><a href="<?php the_field('link'); ?>"><img src="<?php echo $thumbnail_url['0']; ?>" alt="<?php the_title(); ?>"></a></p>

            </div> <!--/ .col-md-8 -->

            <div class="col-sm-4 portfolio-content">

              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>
              <p><a href="<?php the_field('link'); ?>" class="btn btn-large btn-theme-aqua">View Final Piece <span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
              
            </div> <!--/ .col-md-4 -->

          <?php endwhile; else: ?>

          <h1 class="search_error"><?php _e( 'Sorry, no posts matched your criteria.', $domain = 'theme-dev-framework' ); ?></h1>
                
          <?php endif; ?>

      </div> <!-- end row -->
    </div> <!-- end container -->

<?php get_footer(); ?>
