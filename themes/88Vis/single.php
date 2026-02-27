<?php get_header(); ?>
    <div class="page-top block-item">
        <div class="container">
            <h1 class="page-title tf"><?php the_title(); ?></h1>
            <div class="breadcrumb">
                <nav aria-label="breadcrumbs" class="rank-math-breadcrumb">
                    <p><a href="<?php echo site_url(); ?>">Trang chủ</a><span class="separator"> » </span><a href="<?php echo site_url('#du-an'); ?>">Dự án</a><span class="separator"> » </span><span class="last"><?php the_title(); ?></span></p>
                </nav>
            </div>
        </div>
    </div>
    <div class="single-gallery-wrap block-item">
        <div class="container">
            <div class="block-item-header">
                <div class="block-item-title tf">
                    Hình ảnh dự án
                </div>
            </div>
            <div class="block-item-content">
                <?php
                    $gallery_images = get_post_meta(get_the_ID(), 'gallery_images', true);

                    if ($gallery_images) {
                        foreach ($gallery_images as $image_id => $image_url) {
                            $image_title = get_the_title($image_id);
                ?>
                        <a data-fancybox="<?php the_title(); ?>" class="gallery-item fleft" data-caption="<?php echo $image_title; ?>" href="<?php echo $image_url; ?>">
                            <div class="gallery-item-bg" style="background: url('<?php echo $image_url; ?>') center center no-repeat;background-size: cover;"></div>
                            <div class="gallery-item-thumb thumb-cover">
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_title; ?>">
                            </div>
                        </a>
                <?php
                        }
                    }
                ?>
                <div class="cboth"></div>
            </div>
        </div>
    </div>
    <?php 
        if (get_the_content() != '') {

    ?>
            <div class="block-single-content block-page-content block-item">
                <div class="container">
                    <div class="single-content-wrap single-content-wrap-normal">
                        <div class="single-content single-content-collap"><?php the_content(); ?></div>
                    </div>
                </div>
            </div>
    <?php
        }

    ?>
    <?php
        $data = new WP_Query(array(
            'post_type'=>'post', 
            'posts_per_page' => 8, 
            'orderby'               => 'publish_date',
            'order'                 => 'DESC',
            'post_status' => 'publish',
            'cat' => get_the_category()[0]->cat_ID,
            'post__not_in' => [$post->ID], 
        ));

        if($data->have_posts()) {
    ?>

            <div class="block-du-an-related block-item">
                <div class="container">
                    <div class="block-item-header">
                        <div class="block-item-title tf">
                            Dự án liên quan
                        </div>
                    </div>
                    <div class="block-item-content">
                        <?php
                            while ($data->have_posts()){
                                $data->the_post();
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                        ?>
                            <a class="gallery-item fleft" href="<?php the_permalink(); ?>">
                                <div class="gallery-item-bg" style="background: url('<?php echo $image[0]; ?>') center center no-repeat;background-size: cover;"></div>
                                <div class="gallery-item-thumb thumb-cover">
                                    <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
                                </div>
                                <p class="gallery-item-title white-space"><?php the_title(); ?></p>
                            </a>
                        <?php
                            }
                        ?>
                        <div class="cboth"></div>
                    </div>
                </div>
            </div>
    <?php 
        }
    ?>


<?php  get_footer(); ?>
