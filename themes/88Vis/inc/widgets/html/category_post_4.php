<?php
    global $themeSupport;
    global $post;
    $args = array(
            'post_type'             => 'post',
            'orderby'               => 'date',
            'order'                 => 'DESC',
            'posts_per_page'        => 5,
            'posts_status'          => 'publish',
            'taxonomy'              => 'category',
            'cat'                   => $instance['cat'],
            'ignore_sticky_posts' => true, 
            'category__not_in' => array( 2), 
    );
    $wpQuery = new WP_Query($args);
    if($wpQuery->have_posts()) {
        if(!empty($instance['title'])) {
            $title = $instance['title'];
        }else{
            $title = "Bài mới";
        }
        echo '<div class="box_title"><h3 class="title">'.$title.'</h3></div>';
        echo '<div class="slide-news" id="slide-news"><div class="box_content"><ul class="bxslider">';
        while ($wpQuery->have_posts()){
            $wpQuery->the_post();
            $imgUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $imgUrl = $themeSupport->get_new_img_url($imgUrl, 245, 175);
?>
            <li class="item">
                <div class="image"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img alt="<?php the_title(); ?>" src="<?php echo $imgUrl; ?>"></a></div>
                <h4 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
            </li>
<?php
        }
        echo "</ul></div></div>";
    }
?>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#slide-news .bxslider").show();
                    $("#slide-news .bxslider").bxSlider({
                        auto: true,
                        minSlides: 3,
                        maxSlides: 5,
                        slideWidth: 400,
                        slideMargin: 10,
                        moveSlides: 1,
                        responsive: true,
                    });
                });
            </script>