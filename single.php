<? get_header();
the_title();
$term = (isset(get_the_terms($post->ID, "genre")[0])) ? get_the_terms($post->ID, "genre")[0] : null;
if (isset($term)) {
  echo $term->name . "<br>
      ";
  echo $term->term_id . "<br>
      ";
  echo $term->count . "<br>
      ";
  echo $term->taxonomy . "<br>
      ";
  $args = array(
    "genre" => "$term->slug",
  );

  $wp_query = new WP_Query($args);

$thispost = $post;
  if (have_posts()) :
    while (have_posts()) : the_post();
      // Ваш код для вывода записи
      if($post->ID != $thispost->ID) the_title(); // Выводит заголовок записи
      // the_content(); // Выводит содержимое записи

    endwhile;
  else :
    echo 'Нет записей';
  endif;
}

get_footer();
