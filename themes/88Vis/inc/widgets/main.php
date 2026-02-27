<?php
class LMCIT_Theme_Widget_Main{
	private $_widget_options = array();
	
	public function __construct(){
		$this->_widget_options = array(
			'categorypost'=>true,
			'categoryProduct'=>true,
		);
		
		foreach ($this->_widget_options AS $key => $val) {
			if($val == true) {
				add_action('widgets_init', array($this, $key));
			}
		}
	}

	public function categorypost(){
		require_once LMCIT_THEME_WIDGET_DIR . '/category_post.php';
		register_widget('LMCIT_Theme_Widget_Category_Post');
	}
	public function categoryProduct(){
		require_once LMCIT_THEME_WIDGET_DIR . '/category_product.php';
		register_widget('LMCIT_Theme_Widget_Category_Product');
	}

}




