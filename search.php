<?php 

/*
Template Name: search_page
*/

?>
<?php get_header(); ?>

<?php
  global $query_string;
if (isset ($query_string)){
   wp_parse_str( $query_string, $search_query ); 
   $search_query['post_type'] = 'post'; 
   $search = new WP_Query( $search_query );
   $wp_query = $search;
}

?>
<?php get_template_part('parts/loop'); ?>

<?php get_template_part('parts/loop'); ?>
<div class="wrap">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
         <?php get_search_form();  ?>
         <?php if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>
	  <?php the_title() ?>
	
    <?php } } else { ?>
        <p>Записей нет.</p>
    <?php } ?>
    
        </main>
    </div>
</div>

<?php get_footer(); ?>
