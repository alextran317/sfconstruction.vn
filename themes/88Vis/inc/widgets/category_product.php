<?php
class LMCIT_Theme_Widget_Category_Product extends WP_Widget{
	
	public function __construct() {
		
		$id_base = 'lmcit-widget-category-product';
		$name	= 'Category Product';
		$widget_options = array(
			'classname' => '',
			'description' => 'Danh mục sản phẩm'
		);
		$control_options = array('width' => '100%');
		parent::__construct($id_base, $name, $widget_options, $control_options);
	}	
		
	
	public function update( $new_instance, $old_instance ) {
		
		$instance = $old_instance;

		$instance['number'] = strip_tags($new_instance['number']);
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['cat'] = strip_tags($new_instance['cat']);
		$instance['type'] = strip_tags($new_instance['type']);
		
		return $instance;
	}
	public function widget( $args, $instance ) {
		
		extract($args);	
			
        //print_r($instance);die;
        if($instance['type'] == 0 || !isset($instance['type'])) {
			require LMCIT_THEME_WIDGET_DIR . '/html/category_product.php';
        } elseif($instance['type'] > 0) {
			require LMCIT_THEME_WIDGET_DIR . '/html/category_product_' . $instance['type'] . '.php';
        }

	}
	
	public function form( $instance ) {
		
		$htmlObj =  new LMCITHtml();
		
		$inputID 	= $this->get_field_id('title');
		$inputName 	= $this->get_field_name('title');
		$inputValue = @$instance['title'];
		$arr 		= array('class' =>'widefat','id' => $inputID);			
		$html		=  $htmlObj->label(translate('Title'), array('for' => $inputID))
						. $htmlObj->textbox($inputName, $inputValue, $arr);
		
		echo $htmlObj->pTag($html);

		// $inputID 	= $this->get_field_id('number');
		// $inputName 	= $this->get_field_name('number');
		// $inputValue = @$instance['number'];
		// $arr 		= array('class' =>'widefat','id' => $inputID);			
		// $html		=  $htmlObj->label(translate('Số bài viết hiển thị'), array('for' => $inputID))
		// 				. $htmlObj->textbox($inputName, $inputValue, $arr);
		
		// /echo $htmlObj->pTag($html);
		//Tao phan tu chua Category
		$inputID 	= $this->get_field_id('cat');
		$inputName 	= $this->get_field_name('cat');
		$inputValue = @$instance['cat'];
		
		$args = array(
			'show_option_all'    => translate('All category'),
			'show_option_none'   => '',
			'orderby'            => 'ID',
			'order'              => 'ASC',
			'show_count'         => 1,
			'hide_empty'         => 1,
			'child_of'           => 0,
			'exclude'            => '',
			'echo'               => 0,
			'selected'           => $inputValue,
			'hierarchical'       => 1,
			'name'               => $inputName,
			'id'                 => $inputID,
			'class'              => 'widefat',
			'depth'              => 0,
			'tab_index'          => 0,
			'taxonomy'           => 'xe',
			'hide_if_empty'      => false,
		);
		$html		= $htmlObj->label(translate('Categories'), array('for' => $inputID))
					. wp_dropdown_categories($args);
		echo $htmlObj->pTag($html);
		
		
		//Chèn combobox kiểu hiển thị
		$options['data'] = array(
			0 => 'Sản phẩm bán chạy',

		);
		$inputID 	= $this->get_field_id('type');
		$inputName 	= $this->get_field_name('type');
		$inputValue = @$instance['type'];
		$arr 		= array('class' =>'widefat','id' => $inputID);
		$html		=  $htmlObj->label(translate('Kiểu'), array('for' => $inputID))
						. $htmlObj->selectbox($inputName, $inputValue, $arr, $options);
		
		echo $htmlObj->pTag($html);
	}
}