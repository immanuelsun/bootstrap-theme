<?php get_header(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-theme-aqua btn-lg" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <?php if(is_active_sidebar( 'front-left' )):

             dynamic_sidebar( 'front-left' );

            endif; 
          ?>
        </div>
        <div class="col-md-4">
          <?php if(is_active_sidebar( 'front-center' )):

             dynamic_sidebar( 'front-center' );

            endif; 
          ?>
       </div>
        <div class="col-md-4">
          <?php if(is_active_sidebar( 'front-right' )):

             dynamic_sidebar( 'front-right' );

            endif; 
          ?>
      </div>

<?php get_footer(); ?>
