<?php get_header(); ?>

    <div class="container">
      <div class="row">

        <!-- MAIN CONTENT -->
        <div class="col-md-9 main">

          <div class="">
            <h1><?php wp_title(''); ?></h1>
          </div> <!--/ .page-header -->

          <!-- Start the Loop. -->
          <?php if ( have_posts()) : while (have_posts()) : the_post(); ?>

          <article class="post">
            
              <header class="post-header">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h2>
                <ul class="meta">
                  <li class="meta-author"><i class="fa fa-user"></i><?php the_author_posts_link(); ?></li>
                  <li class="meta-time"> <i class="fa fa-clock-o"></i><?php the_time( 'l, F jS, Y' ); ?></li> 
                  
                  <li class="meta-category"> <i class="fa fa-folder-open-o"></i><?php the_category(' , '); ?></li>
                </ul>
              </header> <!--/ .meta -->

              <?php the_excerpt(); ?>
            
          </article><!--blog post-->

          <?php endwhile; else: ?>

          <h1 class="search_error"><?php _e( 'Sorry, no posts matched your criteria.', $domain = 'theme-dev-framework' ); ?></h1>
                
          <?php endif; ?>
        </div> <!-- end col-md-9 -->

        <?php get_sidebar('blog');?>

      </div> <!-- end row -->
    </div> <!-- end container -->

<?php get_footer(); ?>
