<? get_header(); ?>

<? $thisCat = get_category(get_query_var('cat')); ?>
<?  echo get_query_var('cat')?>
<?  $category = get_the_category(); echo $category[0]->name; ?>

<?$category = get_the_category(); ?>

<? $cat_id=$category[0]->cat_id; ?>
<? $cat_name=$category[0]->name; ?>

<? $link=get_category_link($cat_id); ?>

<? echo "<a href=$link>$cat_name</a>"; ?>

<? get_footer(); ?>