<?php
  /**
   * Template Name: Portfolio Grid Template
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

      <div class="row">
        
        <!-- The Query -->
        <?php 
          $args = array(
            'post_type' => 'portfolio'  
          );

          $the_query = new WP_Query( $args );
        ?>

        <!-- The Loop  -->
          <?php if ( have_posts() ): while ( $the_query->have_posts() ): $the_query->the_post();  ?>
          <div class="col-xs-3 portfolio-item">

            <?php
              $thumbnail_id = get_post_thumbnail_id( get_the_ID() );
              $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
            ?>
            <p><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url['0']; ?>" alt="<?php the_title(); ?>"></a></p>
            <h5 class="text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
          </div> <!--/ .col-xm-3 -->

        <?php $portfolio_count = $the_query->current_post + 1; ?>
        <?php if ( $portfolio_count % 4 == 0 ): ?>
        </div> <!--/ .row -->
        <!-- Start a New Row -->
        <div class="row">
        <?php endif; ?>


        <?php endwhile; endif; ?>  

      </div> <!--/ .row -->
    </div> <!-- end container -->

<?php get_footer(); ?>
