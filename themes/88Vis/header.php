<!DOCTYPE html>
<html <?php language_attributes();?> >
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head();?>
    <link rel='stylesheet' id='wp-block-library-css' href='<?php echo LMCIT_THEME_CSS_URL; ?>/style.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='classic-theme-styles-css' href='<?php echo LMCIT_THEME_CSS_URL; ?>/classic-themes.min.css' type='text/css'media='all' />
	    <style id='global-styles-inline-css' type='text/css'>body{--wp--preset--color--black:#000;--wp--preset--color--cyan-bluish-gray:#abb8c3;--wp--preset--color--white:#fff;--wp--preset--color--pale-pink:#f78da7;--wp--preset--color--vivid-red:#cf2e2e;--wp--preset--color--luminous-vivid-orange:#ff6900;--wp--preset--color--luminous-vivid-amber:#fcb900;--wp--preset--color--light-green-cyan:#7bdcb5;--wp--preset--color--vivid-green-cyan:#00d084;--wp--preset--color--pale-cyan-blue:#8ed1fc;--wp--preset--color--vivid-cyan-blue:#0693e3;--wp--preset--color--vivid-purple:#9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple:linear-gradient(135deg,rgba(6,147,227,1) 0%,#9b51e0 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan:linear-gradient(135deg,#7adcb4 0%,#00d082 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange:linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red:linear-gradient(135deg,rgba(255,105,0,1) 0%,#cf2e2e 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray:linear-gradient(135deg,#eee 0%,#a9b8c3 100%);--wp--preset--gradient--cool-to-warm-spectrum:linear-gradient(135deg,#4aeadc 0%,#9778d1 20%,#cf2aba 40%,#ee2c82 60%,#fb6962 80%,#fef84c 100%);--wp--preset--gradient--blush-light-purple:linear-gradient(135deg,#ffceec 0%,#9896f0 100%);--wp--preset--gradient--blush-bordeaux:linear-gradient(135deg,#fecda5 0%,#fe2d2d 50%,#6b003e 100%);--wp--preset--gradient--luminous-dusk:linear-gradient(135deg,#ffcb70 0%,#c751c0 50%,#4158d0 100%);--wp--preset--gradient--pale-ocean:linear-gradient(135deg,#fff5cb 0%,#b6e3d4 50%,#33a7b5 100%);--wp--preset--gradient--electric-grass:linear-gradient(135deg,#caf880 0%,#71ce7e 100%);--wp--preset--gradient--midnight:linear-gradient(135deg,#020381 0%,#2874fc 100%);--wp--preset--duotone--dark-grayscale:url(#wp-duotone-dark-grayscale);--wp--preset--duotone--grayscale:url(#wp-duotone-grayscale);--wp--preset--duotone--purple-yellow:url(#wp-duotone-purple-yellow);--wp--preset--duotone--blue-red:url(#wp-duotone-blue-red);--wp--preset--duotone--midnight:url(#wp-duotone-midnight);--wp--preset--duotone--magenta-yellow:url(#wp-duotone-magenta-yellow);--wp--preset--duotone--purple-green:url(#wp-duotone-purple-green);--wp--preset--duotone--blue-orange:url(#wp-duotone-blue-orange);--wp--preset--font-size--small:13px;--wp--preset--font-size--medium:20px;--wp--preset--font-size--large:36px;--wp--preset--font-size--x-large:42px;--wp--preset--spacing--20:.44rem;--wp--preset--spacing--30:.67rem;--wp--preset--spacing--40:1rem;--wp--preset--spacing--50:1.5rem;--wp--preset--spacing--60:2.25rem;--wp--preset--spacing--70:3.38rem;--wp--preset--spacing--80:5.06rem;--wp--preset--shadow--natural:6px 6px 9px rgba(0,0,0,0.2);--wp--preset--shadow--deep:12px 12px 50px rgba(0,0,0,0.4);--wp--preset--shadow--sharp:6px 6px 0 rgba(0,0,0,0.2);--wp--preset--shadow--outlined:6px 6px 0 -3px rgba(255,255,255,1),6px 6px rgba(0,0,0,1);--wp--preset--shadow--crisp:6px 6px 0 rgba(0,0,0,1)}:where(.is-layout-flex){gap:.5em}body .is-layout-flow>.alignleft{float:left;margin-inline-start:0;margin-inline-end:2em}body .is-layout-flow>.alignright{float:right;margin-inline-start:2em;margin-inline-end:0}body .is-layout-flow>.aligncenter{margin-left:auto!important;margin-right:auto!important}body .is-layout-constrained>.alignleft{float:left;margin-inline-start:0;margin-inline-end:2em}body .is-layout-constrained>.alignright{float:right;margin-inline-start:2em;margin-inline-end:0}body .is-layout-constrained>.aligncenter{margin-left:auto!important;margin-right:auto!important}body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width:var(--wp--style--global--content-size);margin-left:auto!important;margin-right:auto!important}body .is-layout-constrained>.alignwide{max-width:var(--wp--style--global--wide-size)}body .is-layout-flex{display:flex;flex-wrap:wrap;align-items:center}body .is-layout-flex>*{margin:0}:where(.wp-block-columns.is-layout-flex){gap:2em}.has-black-color{color:var(--wp--preset--color--black)!important}.has-cyan-bluish-gray-color{color:var(--wp--preset--color--cyan-bluish-gray)!important}.has-white-color{color:var(--wp--preset--color--white)!important}.has-pale-pink-color{color:var(--wp--preset--color--pale-pink)!important}.has-vivid-red-color{color:var(--wp--preset--color--vivid-red)!important}.has-luminous-vivid-orange-color{color:var(--wp--preset--color--luminous-vivid-orange)!important}.has-luminous-vivid-amber-color{color:var(--wp--preset--color--luminous-vivid-amber)!important}.has-light-green-cyan-color{color:var(--wp--preset--color--light-green-cyan)!important}.has-vivid-green-cyan-color{color:var(--wp--preset--color--vivid-green-cyan)!important}.has-pale-cyan-blue-color{color:var(--wp--preset--color--pale-cyan-blue)!important}.has-vivid-cyan-blue-color{color:var(--wp--preset--color--vivid-cyan-blue)!important}.has-vivid-purple-color{color:var(--wp--preset--color--vivid-purple)!important}.has-black-background-color{background-color:var(--wp--preset--color--black)!important}.has-cyan-bluish-gray-background-color{background-color:var(--wp--preset--color--cyan-bluish-gray)!important}.has-white-background-color{background-color:var(--wp--preset--color--white)!important}.has-pale-pink-background-color{background-color:var(--wp--preset--color--pale-pink)!important}.has-vivid-red-background-color{background-color:var(--wp--preset--color--vivid-red)!important}.has-luminous-vivid-orange-background-color{background-color:var(--wp--preset--color--luminous-vivid-orange)!important}.has-luminous-vivid-amber-background-color{background-color:var(--wp--preset--color--luminous-vivid-amber)!important}.has-light-green-cyan-background-color{background-color:var(--wp--preset--color--light-green-cyan)!important}.has-vivid-green-cyan-background-color{background-color:var(--wp--preset--color--vivid-green-cyan)!important}.has-pale-cyan-blue-background-color{background-color:var(--wp--preset--color--pale-cyan-blue)!important}.has-vivid-cyan-blue-background-color{background-color:var(--wp--preset--color--vivid-cyan-blue)!important}.has-vivid-purple-background-color{background-color:var(--wp--preset--color--vivid-purple)!important}.has-black-border-color{border-color:var(--wp--preset--color--black)!important}.has-cyan-bluish-gray-border-color{border-color:var(--wp--preset--color--cyan-bluish-gray)!important}.has-white-border-color{border-color:var(--wp--preset--color--white)!important}.has-pale-pink-border-color{border-color:var(--wp--preset--color--pale-pink)!important}.has-vivid-red-border-color{border-color:var(--wp--preset--color--vivid-red)!important}.has-luminous-vivid-orange-border-color{border-color:var(--wp--preset--color--luminous-vivid-orange)!important}.has-luminous-vivid-amber-border-color{border-color:var(--wp--preset--color--luminous-vivid-amber)!important}.has-light-green-cyan-border-color{border-color:var(--wp--preset--color--light-green-cyan)!important}.has-vivid-green-cyan-border-color{border-color:var(--wp--preset--color--vivid-green-cyan)!important}.has-pale-cyan-blue-border-color{border-color:var(--wp--preset--color--pale-cyan-blue)!important}.has-vivid-cyan-blue-border-color{border-color:var(--wp--preset--color--vivid-cyan-blue)!important}.has-vivid-purple-border-color{border-color:var(--wp--preset--color--vivid-purple)!important}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background:var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple)!important}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background:var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan)!important}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background:var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange)!important}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background:var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red)!important}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background:var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray)!important}.has-cool-to-warm-spectrum-gradient-background{background:var(--wp--preset--gradient--cool-to-warm-spectrum)!important}.has-blush-light-purple-gradient-background{background:var(--wp--preset--gradient--blush-light-purple)!important}.has-blush-bordeaux-gradient-background{background:var(--wp--preset--gradient--blush-bordeaux)!important}.has-luminous-dusk-gradient-background{background:var(--wp--preset--gradient--luminous-dusk)!important}.has-pale-ocean-gradient-background{background:var(--wp--preset--gradient--pale-ocean)!important}.has-electric-grass-gradient-background{background:var(--wp--preset--gradient--electric-grass)!important}.has-midnight-gradient-background{background:var(--wp--preset--gradient--midnight)!important}.has-small-font-size{font-size:var(--wp--preset--font-size--small)!important}.has-medium-font-size{font-size:var(--wp--preset--font-size--medium)!important}.has-large-font-size{font-size:var(--wp--preset--font-size--large)!important}.has-x-large-font-size{font-size:var(--wp--preset--font-size--x-large)!important}.wp-block-navigation a:where(:not(.wp-element-button)){color:inherit}:where(.wp-block-columns.is-layout-flex){gap:2em}.wp-block-pullquote{font-size:1.5em;line-height:1.6}</style>
    <link rel='stylesheet' id='contact-form-7-css' href='<?php echo LMCIT_THEME_CSS_URL; ?>/styles.css' type='text/css' media='all' />
    <link rel='stylesheet' id='toc-screen-css' href='<?php echo LMCIT_THEME_CSS_URL; ?>/screen.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='addtoany-css' href='<?php echo LMCIT_THEME_CSS_URL; ?>/addtoany.min.css' type='text/css' media='all' />
    <script type='text/javascript' src='<?php echo LMCIT_THEME_JS_URL; ?>/jquery.min.js' id='jquery-js'></script>
    <script type='text/javascript' src='<?php echo LMCIT_THEME_JS_URL; ?>/custom.js' id='custom-js'></script>
    <script type='text/javascript' async src='<?php echo LMCIT_THEME_JS_URL; ?>/page.js' id='addtoany-core-js'></script>
    <script type='text/javascript' async src='<?php echo LMCIT_THEME_JS_URL; ?>/addtoany.min.js' id='addtoany-jquery-js'></script>
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo LMCIT_THEME_CSS_URL; ?>/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo LMCIT_THEME_CSS_URL; ?>/slick.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo LMCIT_THEME_CSS_URL; ?>/responsive.css?v=1683964832" />
    <link rel="stylesheet" type="text/css" href="<?php echo LMCIT_THEME_CSS_URL; ?>/general.css?v=1683964832" />
    <link rel="stylesheet" type="text/css" href="<?php echo LMCIT_THEME_CSS_URL; ?>/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo LMCIT_THEME_CSS_URL; ?>/all.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo LMCIT_THEME_CSS_URL; ?>/slick-theme.css" />
    <link rel="stylesheet" href="<?php echo LMCIT_THEME_CSS_URL; ?>/jquery.fancybox.min.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" href="<?php echo LMCIT_THEME_IMG_URL; ?>/favicon.ico" /> 
</head>
<body class="home blog elementor-default elementor-kit-4379">
    <header class="header">
        <div class="container">
            <h1 class="logo fleft">
                <span style="display: none;">Thiết Kế Nhà Phố</span>
                <a href="/" title="Thiết Kế Nhà Phố">
                    <img src="<?php echo LMCIT_THEME_IMG_URL; ?>/logo.png" alt="Thiết Kế Nhà Phố"
                        title="Thiết Kế Nhà Phố" />
                </a>
            </h1>
            <!-- <div class="header-icon fright">
                <span class="icon-search">
                    <i class="far fa-search"></i>
                </span>
            </div> -->
            <div class="header-top-right fright">
                <div class="main-nav fleft">
                    <div class="main-nav-inner">
                        <ul id="menu-header-main-menu" class="menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                    href="/">Trang chủ</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                    href="gioi-thieu.php">Giới thiệu</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                    href="/#du-an">Dự án</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                    href="/#quy-trinh">Quy trình</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                    href="/#bang-gia">Bảng giá</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a
                                    href="/#chia-se">Kinh nghiệm hay</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4755"><a
                                    href="/#dang-ky"><i class="far fa-plus"></i>Tư vấn Miễn Phí</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cboth"></div>
            <div class="show-nav-mobile">
                <i class="fal fa-bars"></i>
            </div>
        </div>
        <div class="close-nav-mobile">
            <i class="fal fa-times"></i>
        </div>
    </header>