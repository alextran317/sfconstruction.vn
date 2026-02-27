<?php 
// echo "<pre>";
// print_r($btv_options['opt-ads']);die;
    global $btv_options;
    foreach($btv_options['opt-ads'] as $key => $myPhotoID){
?>
    <div class="ads">
        <a href="<?php echo $myPhotoID['url']; ?>"><img src="<?php echo  $myPhotoID['image']; ?>" alt="<?php echo $myPhotoID['title']; ?>"></a>
    </div>
<?php
    }
?>

<div class="box-newsHighlight">
    <?php 
      if(is_active_sidebar('lmcit-widget-box-newshighlight')){
         dynamic_sidebar('lmcit-widget-box-newshighlight');
      }
    ?>
</div>

<div class="box-newsHighlight">
    <?php 
      if(is_active_sidebar('lmcit-widget-box-news-ads')){
         dynamic_sidebar('lmcit-widget-box-news-ads');
      }
    ?>
</div>

