<?php get_header(); ?>

<div class="col-md-6">
  <? echo '<h3><a href="' . get_home_url("/") . '/автор">auhtor</a></h3>'; ?>
  <?php get_template_part('parts/loop'); ?>


  <br><?php get_sidebar();?>

</div>
<?php get_footer(); ?>