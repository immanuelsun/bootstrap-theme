<?php
  /**
   * Template Name: Full Width Template
   */
?>

<?php get_header(); ?>

    <div class="container">
      <div class="row">

        <!-- MAIN CONTENT -->
        <div class="col-md-12">
          <!-- Start the Loop. -->
          <?php if ( have_posts()) : while (have_posts()) : the_post(); ?>

          <article>

           <div class="page-header">
            <h1><?php the_title(); ?></h1>
           </div> <!--/ .page-header -->

           <?php the_content(); ?>
            
          </article><!--blog post-->

          <?php endwhile; else: ?>

          <h1 class="search_error"><?php _e( 'Sorry, no posts matched your criteria.', $domain = 'theme-dev-framework' ); ?></h1>
                
          <?php endif; ?>
        </div> <!-- end col-md-12 -->

      </div> <!-- end row -->
    </div> <!-- end container -->

<?php get_footer(); ?>
