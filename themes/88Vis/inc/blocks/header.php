<?php global $btv_options; ?>
<?php
    $page_title = $wp_query->post->post_title;
    $active_link_product = $active_link_about = $active_link_contact = '';

    if ($page_title == 'Portfolio') {
        $active_link_product = 'active-link';
    } 

    if ($page_title == 'About us') {
        $active_link_about = 'active-link';
    } 

    if ($page_title == 'Contact') {
        $active_link_contact = 'active-link';
    } 

?>
<style type="text/css">
#topNav ul li{
    font-size: 16px;
}

</style>
<?php 

    if (wp_is_mobile()) {
?>
<div id="canvasWrapper" class="container clearfix">
    <header id="header" class="clearfix vertical-align">
        <div style="float: left;">
            <div id="logo" class="clearfix">
                <h1 class="logo" data-shrink-original-size="26" style="letter-spacing: 0em;">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo $btv_options['logo']['url']; ?>" alt="<?php echo get_bloginfo(); ?>">
                    </a>
                </h1>
            </div>
        </div>
        <div style="float: right;padding-left: 20px;">
            <nav class="clearfix">
                <ul>
                    <li class="<?php echo $active_link_product; ?>">
                        <a href="<?php echo get_site_url().'/portfolio' ?>" title="Portfolio">Portfolio</a>
                    </li>
                    <li class="<?php echo $active_link_about; ?>">
                        <a href="<?php echo get_site_url().'/about' ?>" title="About">About</a>
                    </li>
                    <li class="<?php echo $active_link_contact; ?>">
                        <a href="<?php echo get_site_url().'/contact' ?>" title="Contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</div>

<style type="text/css">
.vertical-align {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: row;
}
    #canvasWrapper ul li{
        float: left;
        padding: 0 5px;
    }
    .logo-image .logo,#logo {
        margin-bottom: 0;
    }
</style>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $("#mobileMenuLink").click(function(){
            $('#mobileNav').toggle('slow');
        });

        $(window).scroll(function () {
          if ($(this).scrollTop() > 10) {
            $('#canvasWrapper').css({
                'position': 'fixed',
                'top': '0',
                'right': '0',
                'left': '0',
                'z-index': '1030',
                'background': '#fff'
            });

          } else {
            $('#canvasWrapper').removeAttr('style')
          }
        });
    });
</script>


<?php
    } else {
?>
<div id="mobileNav" class="menu-open" style="height: auto; display: none;">
    <div class="wrapper">
        <nav class="main-nav mobile-nav">
            <ul>
                <li class="gallery-collection <?php echo $active_link_product; ?>">

                   <a href="<?php echo get_site_url().'/portfolio' ?>">Portfolio</a>

                </li>

                <li class="page-collection <?php echo $active_link_about; ?>">

                    <a href="<?php echo get_site_url().'/about' ?>" title="About">About</a>

                </li>

                <li class="page-collection <?php echo $active_link_contact; ?>">

                    <a href="<?php echo get_site_url().'/contact' ?>" title="Contact">Contact</a>

                </li>

            </ul>
        </nav>

    </div>
</div>
<div id="mobileMenuLink" class=""><a>Menu</a></div>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $("#mobileMenuLink").click(function(){
            $('#mobileNav').toggle('slow');
        });

        $(window).scroll(function () {
          if ($(this).scrollTop() > 10) {
            $('#canvasWrapper').css({
                'position': 'fixed',
                'top': '0',
                'right': '0',
                'left': '0',
                'z-index': '1030',
                'background': '#fff'
            });

          } else {
            $('#canvasWrapper').removeAttr('style')
          }
        });
    });
</script>


<div id="canvasWrapper" class="container">
    <div id="canvas">
        <div id="headerWrapper">
            <header id="header">
                <div id="logo" data-content-field="site-title">
                    <h1 class="logo" data-shrink-original-size="26" style="letter-spacing: 0em;">
                        <a href="<?php echo site_url(); ?>">
                            <img src="<?php echo $btv_options['logo']['url']; ?>" alt="<?php echo get_bloginfo(); ?>">
                        </a>
                    </h1>
                </div>
                <div id="topNav">
                    <nav class="main-nav dropdown-hover">
                        <ul data-content-field="navigation">
                            <li class="gallery-collection  <?php echo $active_link_product; ?>">
                                <a href="<?php echo get_site_url().'/portfolio' ?>" title="Portfolio">Portfolio</a>
                            </li>
                            <li class="page-collection  <?php echo $active_link_about; ?>">
                                <a href="<?php echo get_site_url().'/about' ?>" title="About">About</a>
                            </li>
                            <li class="page-collection  <?php echo $active_link_contact; ?>">
                                <a href="<?php echo get_site_url().'/contact' ?>" title="Contact">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div id="backToThumbs">×</div>
            </header>
        </div>
    </div>
</div>


<?php
    }
?>

