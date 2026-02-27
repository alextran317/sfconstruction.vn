<?php
    global $themeSupport;
    global $post;

    $args = array(
            'post_type'             => 'post',
            'posts_status'          => 'publish',
            'taxonomy'              => 'category',
            'cat'                   => $instance['cat'],
            'posts_per_page'        => 10,
            'meta_key'              => 'postview_number',
            'orderby'               => 'meta_value_num',
            'order'                 => 'DESC',
            'ignore_sticky_posts'   => true, 
            'category__not_in'      => array( 2), 
    );
    $wpQuery = new WP_Query($args);
    if($wpQuery->have_posts()) {
        if(!empty($instance['title'])) {
            $title = $instance['title'];
        }else{
            $title = " Bài được xem nhiều";
        }
        echo '<h3 class="title"><a href="">'.$title.'</a></h3><div class="content">';
        while ($wpQuery->have_posts()){
            $wpQuery->the_post();
?>
            <div class="item"><img alt="" src="<?php echo LMCIT_THEME_IMG_URL; ?>/highlight.png"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> </div>
<?php
        }
        echo "</div>";
    }
?>

