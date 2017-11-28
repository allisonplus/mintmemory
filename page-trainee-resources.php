<?php get_header();  ?>

<?php get_template_part('hero'); ?>

<<?php 
   $user_id = get_current_user_id();
   $key = 'User Type';
   $type = get_user_meta($user_id, $key); 
?>
      <div class="main no-padding">
          <div class="content">

    <?php if(is_user_logged_in() && $type = 'Trainee') : ?>

              <?php get_template_part('content-accordion'); ?>
      
    <?php else : ?>
      
        <div class="container">

            <h1>You do not have access to these resources - please register and login</h1>
              
        </div> <!-- /.container -->

    <?php endif; ?> 

          </div> <!-- /,content -->
      </div> <!-- /.main -->


<?php get_footer(); ?>