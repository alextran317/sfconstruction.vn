<?php get_header(); ?>
<div class="box-content-head">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <div class="box-news search">
					<?php
						    global $themeSupport;
						    global $post;
					        $search_keyword = wp_specialchars($s, 1);
					        $search_count = $search_query->post_count;

	                    	if(have_posts()){
            		?>
		                     <h3 class="title">
		              			<?php  echo translate('Kết quả tìm kiếm với từ khóa','nhuy'); ?> <span style="font-weight:bold;color:red"><?php echo $search_keyword; ?> </span> 
		                     </h3>
            		<?php
					        while (have_posts()){
					            the_post();
					            $imgUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					            $imgUrl = $themeSupport->get_new_img_url($imgUrl, 245, 175);
					?>
					            <div class="item">
					                <div class="row">
					                    <div class="col-xs-4"><div class="image"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img alt="<?php the_title(); ?>" src="<?php echo $imgUrl; ?>"></a></div></div>
					                    <div class="col-xs-6">
					                        <div class="info">
					                            <h5 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
					                            <div class="text"><span><?php echo get_the_date( $format="d/m/Y", $post->ID ); ?></span></div>
					                            <div class="desc hidden-xs"><p><?php the_excerpt(); ?></p></div>
					                        </div>
					                    </div>
					                </div>
					            </div>
					<?php
					        }
					    }else{
			    	?>
                 			<h3><?php echo translate('Không tìm thấy bài viết với từ khóa','nhuy'); ?> <span style="font-weight:bold;color:red"><?php echo $search_keyword; ?> </span></h3>
	                      		

			    	<?php
					    }
					?>
					<div class="site-pagination"><?php echo  Pagging(); ?></div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="content-right">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
        <div class="border-width"></div>
    </div>
</div>
<?php get_footer(); ?>

