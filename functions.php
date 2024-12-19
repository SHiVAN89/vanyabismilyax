<?php
function load_stylesheets(){
    wp_enqueue_style('bootstrap' , 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('main' , get_stylesheet_uri() );
    wp_enqueue_script('bootstrap' , 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');
?>


<?php function create_genre_taxonomy() {
    $labels = array(
        'name'              => _x('Жанры', 'taxonomy general name'), // Общее имя таксономии
        'singular_name'     => _x('Жанр', 'taxonomy singular name'),  // Единственное число
        'search_items'      => __('Поиск жанров'),                    // Заголовок для поиска жанров
        'all_items'         => __('Все жанры'),                       // Заголовок для всех жанров
        'parent_item'       => __('Родительский жанр'),              // Заголовок для родительского жанра
        'parent_item_colon' => __('Родительский жанр:'),             // Заголовок для родительского жанра с двоеточием
        'edit_item'         => __('Редактировать жанр'),             // Заголовок для редактирования жанра
        'update_item'       => __('Обновить жанр'),                   // Заголовок для обновления жанра
        'add_new_item'      => __('Добавить новый жанр'),             // Заголовок для добавления нового жанра
        'new_item_name'     => __('Новое имя жанра'),                 // Заголовок для нового имени жанра
        'menu_name'         => __('Жанры'),                           // Название в меню
    );

    $args = array(
        'hierarchical'      => true, // Установите true, если хотите, чтобы таксономия была иерархической (как категории)
        'labels'            => $labels, // Устанавливаем метки, определенные выше
        'show_ui'           => true, // Показывать интерфейс в админке
        'show_admin_column' => true, // Показывать колонку в админ-списке постов
        'query_var'         => true, // Позволяет использовать переменную в query_posts
        'rewrite'           => array('slug' => 'genre'), // Устанавливаем слаг для таксономии
    );

    register_taxonomy('genre', array('post'), $args); // Привязываем таксономию к типу записи 'post'
}

add_action('init', 'create_genre_taxonomy');
?>