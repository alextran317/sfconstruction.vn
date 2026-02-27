<?php
    global $themeSupport;
    global $post;
    if( is_category() ){
        $category_id = the_category_ID(false);
    }else{
        $category_id = $instance['cat'];
    }
    $posts_per_page = 6;
    $args = array(
            'post_type'             => 'post',
            'orderby'               => 'date',
            'order'                 => 'DESC',
            'posts_per_page'        => $posts_per_page,
            'posts_status'          => 'publish',
            'taxonomy'              => 'category',
            'cat'                   => $category_id,
            'ignore_sticky_posts' => true, 
            'category__not_in' => array( 2), 
    );
    $wpQuery = new WP_Query($args);
    if($wpQuery->have_posts()) {
        if(!empty($instance['title'])) {
            $title = $instance['title'];
        }else{
            $title = "Tin mới";
        }
        while ($wpQuery->have_posts()){
            $wpQuery->the_post();
            $imgUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            $imgUrl = $themeSupport->get_new_img_url($imgUrl, 245, 175);
?>
            <div class="item">
                <div class="row">
                    <div class="col-xs-4"><div class="image"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img alt="<?php the_title(); ?>" src="<?php echo $imgUrl; ?>"></a></div></div>
                    <div class="col-xs-6">
                        <div class="info">
                            <h5 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
                            <div class="text"><span>Tin mới</span><span><?php echo get_the_date( $format="d/m/Y", $post->ID ); ?></span></div>
                            <div class="desc hidden-xs"><p><?php the_excerpt(); ?></p></div>
                        </div>
                    </div>
                </div>
            </div>
<?php
        }
    }
?>
    <div id="pre_ajax_loading1" class="hide" style="text-align: center;margin: 10px 0px;"><img src="<?php echo LMCIT_THEME_IMG_URL ?>/bx_loader.gif"></div>
    <a href="javascript:void(0);" rel="nofollow" class="loadmore">Xem tiếp &gt;&gt;</a>
    <script type="text/javascript">
        var ajaxurl = "<?php echo admin_url( 'admin-ajax.php' ); ?>";
        var page = 2;
        var category_id = <?php echo $category_id; ?>;

        jQuery(function($) {
            $('body').on('click', '.loadmore', function() {
                var data = {
                    'action': 'load_posts_by_ajax',
                    'page': page,
                    'category_id':category_id,
                    'security': '<?php echo wp_create_nonce("load_more_posts"); ?>'
                };
                var param = page -1;
                $.ajaxSetup({
                    beforeSend: function() {
                        $('.loadmore').remove();
                        $("div#pre_ajax_loading"+param).removeClass("hide");
                    },
                    complete: function() {
                        $("div#pre_ajax_loading"+param).remove();
                    },
                });
                $.post(ajaxurl, data, function(response) {
                    $('.box-news').append(response);
                    page++;
                });
            });
        });
    </script>
