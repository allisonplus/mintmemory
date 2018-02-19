<?php get_header();  ?>

<?php get_template_part('hero'); ?>

<?php 
   $user_id = get_current_user_id();
   $key = 'User Type';
   $type = get_user_meta($user_id, $key); 
   $logged_in = is_user_logged_in();
?>
  <div class="main no-padding trainee-resources">

    <?php if($logged_in && $type[0] == 'Trainee') : ?>
      <div class="container">
        <?php get_template_part('content', 'slider'); ?>
      </div>
      <hr>
      <div class="disclaimer">
        <div class="container">
          <?php the_field('disclaimer'); ?>
        </div>
      </div>
      <?php get_template_part('content-accordion'); ?>
    <?php else : ?>
      
        <div class="container">

            <h2>Sorry you do not have access to these resources - please <a href="/login/">login / register </a></h2>
              
        </div> <!-- /.container -->

    <?php endif; ?> 

</div> <!-- /.main -->


<?php get_footer(); ?>