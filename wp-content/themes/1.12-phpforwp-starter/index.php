<?php get_header(); ?>

    <div id="content">

      <!-- Static Front Page -->
      <?php if( is_front_page() && !is_home()) { ?>

          <h1>Static Front Page</h1>

      <?php } ?>

      <!-- Blog Home -->
      <?php if( is_home() ){ ?>

          <h1>Blog</h1>
      <?php } ?>

      <!-- Page (Not Front Page) -->
      <?php if( is_page() && !is_front_page() ) { ?>
          <h1>page</h1>

      <?php } ?>
      <!-- Single Post -->
      <?php if( is_single() && !is_attachment() ) { ?>

          <h1>Single Blog</h1>
      <?php } ?>
      <!-- Single Attachment (Media) -->

      <?php if( is_attachment() ){ ?>
          <h1>Attachment</h1>
      <?php } ?>
      <!-- Category Archive -->
      <?php if( is_category() ){ ?>
          <h1><?php single_cat_file(); ?></h1>
      <?php } ?>
      <!-- Tag Archive -->

      <!-- Author Archive -->

      <!-- Date Archive -->

      <!-- 404 Page -->
      <?php if( is_404() ){ ?>
          <h1>404 error</h1>
      <?php } ?>
    </div>

<?php get_footer(); ?>
