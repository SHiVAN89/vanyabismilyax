<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php echo wp_get_document_title(); ?>
</title>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
 
<?php wp_head();?>
</head>
<body>
    <header class="header">
        <h1><?php bloginfo('name') ?></h1>
        <h2><?php bloginfo('description') ?></h2>
        <h2><?php get_search_form(); ?></h2>
</header>

