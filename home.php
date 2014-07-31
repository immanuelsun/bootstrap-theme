<?php get_header(); ?>

    <div class="container">
      <div class="row">

        <!-- MAIN CONTENT -->
        <div class="col-md-9 main">

          <div class="page-header">
            <h1><?php wp_title(''); ?></h1>
          </div> <!--/ .page-header -->

          <!-- Featured Post Carousel -->

          <!-- The Query -->
           <?php 
              $args = array(
                'post_type' => 'post',
                'category_name' => 'featured'
              );

             $the_query = new WP_Query( $args );
          ?>

          <div id="featured-posts" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">

              <!-- Start the Loop -->
              <?php
                if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                $the_count = $the_query->current_post;
              ?>

              <li data-target="#featured-posts" data-slide-to="<?php echo $the_count; ?>" <?php if($the_count == 0): ?>class="active"<?php endif; ?> ></li>

              <!-- End the Loop -->
              <?php endwhile; endif; ?>
            </ol>

            <?php rewind_posts(); ?>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

              <?php
                if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
                $the_count = $the_query->current_post;

                $attachment_id = get_post_thumbnail_id(get_the_ID());        
                $attachment_meta = wp_prepare_attachment_for_js( $attachment_id );

                $image_url = $attachment_meta['url'];
                $image_caption = $attachment_meta['caption'];
                $image_description = $attachment_meta['description'];
                $image_alt = $attachment_meta['alt'];

              ?>

              <div class="item <?php echo $the_count; ?> <?php if($the_count == 0): ?>active<?php endif; ?>">
                
                <a href="<?php the_permalink(); ?>"><img class="carousel-image" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>"></a>
                <div class="carousel-caption">
                  <h5><?php the_title(); ?></h5>
                  <p><?php echo $image_description; ?></p>
                </div> <!--/ carousel-caption -->
              </div>

              <!-- End the Loop -->
              <?php endwhile; endif; ?>
            </div> <!--/ carousel-inner -->

            <!-- Controls -->
            <a class="left carousel-control" href="#featured-posts" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#featured-posts" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div> <!--/ #featured-posts carousel slide -->

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
