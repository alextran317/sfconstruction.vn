<?php
    global $themeSupport;
    global $post;
    $args = array(
            'post_type'             => 'xe-mercedes',
            'order'                 => 'DESC',
            'posts_per_page'        => 8,
            'posts_status'          => 'publish',
            'taxonomy'              => 'xe',
            'cat'                   => $instance['cat']
    );
    $wpQuery = new WP_Query($args);
    if($wpQuery->have_posts()) {
        if(!empty($instance['title'])) {
            $title = $instance['title'];
        }else{
            $title = "Sản phẩm bán chạy";
        }
?>

        <div class="title"> <?php echo translate( $title, $domain = 'btv' ); ?></div>
        <div id="amazingcarousel-1" style="display:none;position:relative;width:100%;max-width:1060px;margin:0px auto 0px;">
            <div class="amazingcarousel-list-container">
                <ul class="amazingcarousel-list">
                    <?php
                        while ($wpQuery->have_posts()){
                            $wpQuery->the_post();
                            $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                            if( !empty($img) ){
                                $imgUrl = $themeSupport->get_new_img_url($img, 245, 169);
                            }else{
                                $img = $imgUrl = LMCIT_THEME_IMG_URL.'/no-image.png';
                            }
                            

                    ?>
                            <li class="amazingcarousel-item">
                                <div class="amazingcarousel-item-container">
                                    <div class="amazingcarousel-image">
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                            <img src="<?php echo  $imgUrl; ?>" alt="<?php the_title(); ?>" >
                                         </a>
                                    </div>
                                    <h3 class="amazingcarousel-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                            </li>
                    <?php
                        }
                    ?>

                </ul>
                <div class="amazingcarousel-prev"></div>
                <div class="amazingcarousel-next"></div>
            </div>
            <div class="amazingcarousel-nav"></div>
        </div>
    <?php } ?>
