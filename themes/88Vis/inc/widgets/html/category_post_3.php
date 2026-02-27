<?php
    global $themeSupport;
    global $post;
    $args = array(
            'post_type'             => 'post',
            'orderby'               => 'ID',
            'order'                 => 'DESC',
            'posts_per_page'        => 3,
            'posts_status'          => 'publish',
            'taxonomy'              => 'category',
            'cat'                   => $instance['cat'],
            'ignore_sticky_posts' => true, 
            'category__not_in' => array( 2), 
    );
    $wpQuery = new WP_Query($args);
    if($wpQuery->have_posts()) {
        $category = get_the_category_by_ID($instance['cat']);
        $category_url = get_category_link($instance['cat']);
        if(!empty($instance['title'])) {
            $title = $instance['title'];
        }else{
            $title = "Chuyên mục";
        }
?>
        <h2 class="box-title calendar"><a href="<?php echo $category_url; ?>"><?php echo $title; ?></a></h2>

<?php
        $tmp = 1;
        while ($wpQuery->have_posts()){
            $wpQuery->the_post();
            $imgUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $imgUrl_2 = $themeSupport->get_new_img_url($imgUrl, 200, 168);
            $imgUrl = $themeSupport->get_new_img_url($imgUrl, 480, 280);
?>
            <div class="<?php  echo ( $tmp==1 )?"item-star":"item"; ?>">
                <div class="image"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img alt="<?php the_title(); ?>" src="<?php  echo ( $tmp==1 )? $imgUrl :$imgUrl_2; ?>"></a></div>
                <div class="title">
                    <h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
                    <?php the_excerpt(); ?>
                </div>

            </div>
<?php
            $tmp++;
        }
    }
?>
