<?php get_header() ;?>

  <!-- Page Content -->
  <div class="container">
  <div class='space'>
      <?php if(!is_single()) :?>
      <br>
         <h2 class='mwai'>JOHN MWAI BLOGS</h2>
      <?php endif; ?>
      </div>
    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">
      
        <!-- Title -->
        <?php if(have_posts(  )):?>
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part( 'content', get_post_format());?>
        <!-- Post Content -->
        <?php endwhile;?>
        <?php endif ;?>
        <hr>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <?php if(is_active_sidebar('Searchbar')): ?>
        <?php dynamic_sidebar('searchbar'); ?>
        <?php endif; ?>

        <!-- Categories Widget -->
              <?php if(is_active_sidebar('sidebar')): ?>
              <?php dynamic_sidebar('sidebar'); ?>
              <?php endif; ?>
              

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Author</h5>
          <div class="card-body">
            PASSIONATE TIKERER
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <?php get_footer(); ?>