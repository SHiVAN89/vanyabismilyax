
<div class="post">
    <?php echo get_avatar(get_postdata($post->ID)["Author_ID"]) ?>
    <br><?php the_title(); ?>
    <div class="content">
    <br><?php the_content(); ?>
    </div>
    <div class="post-meta">
    <span class="post-date"><?php the_date(); ?></span>
    <span class="post-author"><?php the_author(); ?></span>
</div>
</div>    
