<?php

if (have_posts()){
    while (have_posts()){
        the_post();

        echo '<h3><a href="'. get_permalink() . '">'. get_the_title() .'</a></h3>';
        echo get_the_excerpt();
    }
}

else{
    echo '<p>записей нет...</p>';
}
?>