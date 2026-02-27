
                        <?php
                            global $themeSupport;
                            $args = array(
                                    'post_type'             => 'post',
                                    'posts_status'          => 'publish',
                                    'taxonomy'              => 'category',
                                    'posts_per_page'        => 4,
                                    'orderby'               => 'ID',
                                    'order'                 => 'DESC',
                                    'ignore_sticky_posts' => true,
                                    'cat'                   => $instance['cat'],
                            );
                            $wpQuery = new WP_Query($args);
                            if($wpQuery->have_posts()) {
                                    if(!empty($instance['title'])) {
                                        $title = $instance['title'];
                                    }else{
                                        $title = "Video";
                                    }
                                    echo '<h3 class="box-title"><a href="">'.$title.'</a></h3><div class="row">';
                                    $key=1;
                                    while ($wpQuery->have_posts()){
                                        $wpQuery->the_post();
                                        $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                        $imgUrl_1 = $themeSupport->get_new_img_url($img, 495, 265);
                                          if( $key==1 ){
                              ?>
                                            <div class="col-sm-5">
                                                <div class="item-star">
                                                    <div class="image"><a href="" data-toggle="modal" data-target="#myModal_<?php echo $key; ?>"><img alt="" src="<?php echo $imgUrl_1; ?>"></a></div>
                                                    <div class="info"><h5 class="title"><a href="" data-toggle="modal" data-target="#myModal_<?php echo $key; ?>"><?php the_title(); ?></a></h5></div>
                                                  <!-- Modal -->
                                                  <div class="modal fade" id="myModal_<?php echo $key; ?>" role="dialog">
                                                    <div class="modal-dialog">
                                                    
                                                      <!-- Modal content-->
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                          <h4 class="modal-title"><?php the_title(); ?></h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?php the_content(); ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                        </div>
                                                      </div>
                                                      
                                                    </div>
                                                  </div>
                                                </div>
                                            </div>

                              <?php
                                          }
                                          $key++;
                                        }
                                        
                                    $tmp=1;
                                    echo '<div class="col-sm-5">';
                                    while ($wpQuery->have_posts()){
                                        $wpQuery->the_post();
                                        $img = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                                        $imgUrl_2 = $themeSupport->get_new_img_url($img, 170, 130);
                                          if( $tmp>1 ){
                              ?>
                                          <div class="item">
                                              <div class="image"><a href="" data-toggle="modal" data-target="#myModal_<?php echo $tmp; ?>"><img alt="" src="<?php echo $imgUrl_2; ?>"></a></div>
                                              <h5 class="title"><a href="" data-toggle="modal" data-target="#myModal_<?php echo $tmp; ?>"><?php the_title(); ?></a></h5>
                                          </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModal_<?php echo $tmp; ?>" role="dialog">
                                              <div class="modal-dialog">
                                              
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"><?php the_title(); ?></h4>
                                                  </div>
                                                  <div class="modal-body">
                                                      <?php the_content(); ?>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                  </div>
                                                </div>
                                                
                                              </div>
                                            </div>
                              <?php
                                          }
                                          $tmp++;
                                    }
                                        
                                        echo ' </div></div>';
                                        
                            }
                            wp_reset_postdata();
                        ?>
      

        <div class="border-width"></div>