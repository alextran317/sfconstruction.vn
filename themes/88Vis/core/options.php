<?php

    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'BTV_Theme_Options' ) ) {

        class BTV_Theme_Options {

            public $args = array();
            public $sections = array();
            public $theme;
            public $ReduxFramework;

            public function __construct() {

                if ( ! class_exists( 'ReduxFramework' ) ) {
                    return;
                }

                // This is needed. Bah WordPress bugs.  ;)
                if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
                    $this->initSettings();
                } else {
                    add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
                }

            }

            public function initSettings() {

                // Set the default arguments
                $this->setArguments();

                // Set a few help tabs so you can see how it's done
                $this->setHelpTabs();

                // Create the sections and fields
                $this->setSections();

                if ( ! isset( $this->args['opt_name'] ) ) { // No errors please
                    return;
                }

                $this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
            }

            public function setSections() {

                $this->sections[] = array(
                    'title'  => __( 'Logo', 'btv' ),
                    // 'desc'   => __( 'Quản lý phần Logo - Background Home.', 'btv' ),
                    'icon'   => 'el el-star-empty',
                    'fields' => array(
                        array(
                            'id'    => 'logo',
                            'type'  => 'media',
                            'title' => __('Logo', 'btv'),
                            // 'desc'  => __('Xin vui lòng chọn logo cho website', 'btv')
                        ),
                        // array(
                        //     'id'    => 'b_img_home',
                        //     'type'  => 'media',
                        //     'title' => __('Backgound Image Home', 'btv'),
                        //     // 'desc'  => __('Xin vui lòng chọn logo cho website', 'btv')
                        // ),
                    )
                );

                $this->sections[] = array(
                    'title'  => __( 'Social Network', 'btv' ),
                    'icon'   => 'el el-star-empty',
                    'fields' => array(
                        array(
                            'id'               => 'facebook',
                            'type'             => 'text',
                            'title'            => __('Facebook', 'redux-framework-demo'), 
                            // 'subtitle'         => __('Subtitle text would go here.', 'redux-framework-demo'),
                            'default'          => '',
                            'args'   => array(
                                'teeny'            => true,
                                'textarea_rows'    => 10,
                            )
                        ),  
                        // array(
                        //     'id'               => 'twitter',
                        //     'type'             => 'text',
                        //     'title'            => __('Twitter', 'redux-framework-demo'), 
                        //     // 'subtitle'         => __('Subtitle text would go here.', 'redux-framework-demo'),
                        //     'default'          => '',
                        //     'args'   => array(
                        //         'teeny'            => true,
                        //         'textarea_rows'    => 10,
                        //     )
                        // ),
                        array(
                            'id'               => 'instagram',
                            'type'             => 'text',
                            'title'            => __('Instagram', 'redux-framework-demo'), 
                            // 'subtitle'         => __('Subtitle text would go here.', 'redux-framework-demo'),
                            'default'          => '',
                            'args'   => array(
                                'teeny'            => true,
                                'textarea_rows'    => 10,
                            )
                        ),
                        array(
                            'id'               => 'behance',
                            'type'             => 'text',
                            'title'            => __('Behance', 'redux-framework-demo'), 
                            // 'subtitle'         => __('Subtitle text would go here.', 'redux-framework-demo'),
                            'default'          => '',
                            'args'   => array(
                                'teeny'            => true,
                                'textarea_rows'    => 10,
                            )
                        ),
                    )
                );

                $this->sections[] = array(
                    'title'  => __( 'Slide trang chủ', 'btv' ),
                    'desc'   => __( 'Quản lý hình ảnh slide trang chủ', 'btv' ),
                    'icon'   => 'el el-star-empty',
                    'fields' => array(
                        array(
                            'id'          => 'opt-ads',
                            'type'        => 'slides',
                            'title'       => __('Hình ảnh slide trang chủ', 'redux-framework-demo'),
                            'subtitle'    => __('Kéo thả và chọn hình ảnh ', 'redux-framework-demo'),
                            'desc'        => __('', 'redux-framework-demo'),
                            'placeholder' => array(
                                'title'           => __('Tiêu đề', 'redux-framework-demo'),
                                'url'             => __('Đường dẫn URL!', 'redux-framework-demo'),
                            ),
                        ),
                    )
                );

            }

            public function setHelpTabs() {

                // Custom page help tabs, displayed using the help API. Tabs are shown in order of definition.
                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-1',
                    'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                $this->args['help_tabs'][] = array(
                    'id'      => 'redux-help-tab-2',
                    'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
                    'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
                );

                // Set the help sidebar
                $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
            }

            /**
             * All the possible arguments for Redux.
             * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
             * */
            public function setArguments() {

                $theme = wp_get_theme(); // For use with some settings. Not necessary.

                $this->args = array(
                    // TYPICAL -> Change these values as you need/desire
                    'opt_name'           => 'btv_options',
                    // This is where your data is stored in the database and also becomes your global variable name.
                    'display_name'       => $theme->get( 'Name' ),
                    // Name that appears at the top of your panel
                    'display_version'    => $theme->get( 'Version' ),
                    // Version that appears at the top of your panel
                    'menu_type'          => 'menu',
                    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
                    'allow_sub_menu'     => true,
                    // Show the sections below the admin menu item or not
                    'menu_title'         => __( 'Tùy chọn Theme', 'redux-framework-demo' ),
                    'page_title'         => __( 'Sample Options', 'redux-framework-demo' ),
                    // You will need to generate a Google API key to use this feature.
                    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
                    'google_api_key'     => 'AIzaSyAs0iVWrG4E_1bG244-z4HRKJSkg7JVrVQ',
                    // Must be defined to add google fonts to the typography module

                    'async_typography'   => false,
                    // Use a asynchronous font on the front end or font string
                    'admin_bar'          => true,
                    // Show the panel pages on the admin bar
                    'global_variable'    => '',
                    // Set a different name for your global variable other than the opt_name
                    'dev_mode'           => true,
                    // Show the time the page took to load, etc
                    'customizer'         => true,
                    // Enable basic customizer support

                    // OPTIONAL -> Give you extra features
                    'page_priority'      => null,
                    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
                    'page_parent'        => 'themes.php',
                    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
                    'page_permissions'   => 'manage_options',
                    // Permissions needed to access the options panel.
                    'menu_icon'          => '',
                    // Specify a custom URL to an icon
                    'last_tab'           => '',
                    // Force your panel to always open to a specific tab (by id)
                    'page_icon'          => 'icon-themes',
                    // Icon displayed in the admin panel next to your menu_title
                    'page_slug'          => '_options',
                    // Page slug used to denote the panel
                    'save_defaults'      => true,
                    // On load save the defaults to DB before user clicks save or not
                    'default_show'       => false,
                    // If true, shows the default value next to each field that is not the default value.
                    'default_mark'       => '',
                    // What to print by the field's title if the value shown is default. Suggested: *
                    'show_import_export' => true,
                    // Shows the Import/Export panel when not used as a field.

                    // CAREFUL -> These options are for advanced use only
                    'transient_time'     => 60 * MINUTE_IN_SECONDS,
                    'output'             => true,
                    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
                    'output_tag'         => true,
                    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
                    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

                    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
                    'database'           => '',
                    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
                    'system_info'        => false,
                    // REMOVE

                    // HINTS
                    'hints'              => array(
                        'icon'          => 'icon-question-sign',
                        'icon_position' => 'right',
                        'icon_color'    => 'lightgray',
                        'icon_size'     => 'normal',
                        'tip_style'     => array(
                            'color'   => 'light',
                            'shadow'  => true,
                            'rounded' => false,
                            'style'   => '',
                        ),
                        'tip_position'  => array(
                            'my' => 'top left',
                            'at' => 'bottom right',
                        ),
                        'tip_effect'    => array(
                            'show' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'mouseover',
                            ),
                            'hide' => array(
                                'effect'   => 'slide',
                                'duration' => '500',
                                'event'    => 'click mouseleave',
                            ),
                        ),
                    )
                );


                // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
                $this->args['share_icons'][] = array(
                    'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
                    'title' => 'Visit us on GitHub',
                    'icon'  => 'el el-github'
                    //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
                    'title' => 'Like us on Facebook',
                    'icon'  => 'el el-facebook'
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'http://twitter.com/reduxframework',
                    'title' => 'Follow us on Twitter',
                    'icon'  => 'el el-twitter'
                );
                $this->args['share_icons'][] = array(
                    'url'   => 'http://www.linkedin.com/company/redux-framework',
                    'title' => 'Find us on LinkedIn',
                    'icon'  => 'el el-linkedin'
                );

                // Panel Intro text -> before the form
                if ( ! isset( $this->args['global_variable'] ) || $this->args['global_variable'] !== false ) {
                    if ( ! empty( $this->args['global_variable'] ) ) {
                        $v = $this->args['global_variable'];
                    } else {
                        $v = str_replace( '-', '_', $this->args['opt_name'] );
                    }
                    $this->args['intro_text'] = sprintf( __( '<p>Trần Ba Company</p>', 'redux-framework-demo' ), $v );
                } else {
                    $this->args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
                }

                // Add content after the form.
                $this->args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );
            }

        }

        global $reduxConfig;
        $reduxConfig = new BTV_Theme_Options();
    }
