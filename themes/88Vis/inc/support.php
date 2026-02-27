<?php
class LMCIT_Theme_Support{
	
	public function __construct(){
		
	}
	
	/*=========================================================================
	* XOA GALLERY DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function remove_first_gallery($gallery,$content){
		//echo '<br/>' . __METHOD__;
		//	https://www.youtube.com/watch?v=-Wg0uRzURpI
	
		$gallery 	=  str_replace('[', '\[', $gallery);
		$gallery 	=  str_replace(']', '\]', $gallery);
	
		$pattern = '#'. $gallery . '#';
		//echo '<br/>' . $pattern;
		$content = preg_replace($pattern, '', $content,1);
	
		return $content;
	}
	
	/*=========================================================================
	* LAY GALLERYDAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function get_first_gallery($postContent = null){
		
		$firstGallery = '';
		if($postContent != null){
	
			$pattern = '#\[gallery.*\]#im';
			preg_match_all($pattern, $postContent, $matches);
	
			$galleryArr = $matches[0];
	
			if(count($galleryArr) > 0 ){
				$firstGallery = $galleryArr[0];
			} 
		}
	
		return $firstGallery;
	}
	
	/*=========================================================================
	* XOA VIDEO HOAC YOUTUBE DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function remove_first_video($video,$content){
		$video 	=  str_replace('[', '\[', $video);
		$video 	=  str_replace(']', '\]', $video);
		$video 	=  str_replace('?', '\?', $video);
	
		$pattern = '#'. $video . '#';
		$content = preg_replace($pattern, '', $content,1);
	
		return $content;
	}
	
	public function video_embed($url, $site ='youtube'){
		$html = '';
		
		if($site == 'youtube'){
			$tmp = explode('v=', $url);
			$videoID = $tmp[1];
			
			$src = 'https://www.youtube.com/embed/' . $videoID . '?feature=oembed';
			$html = '<iframe src="' . $src . '" allowfullscreen="" frameborder="0" width="650" height="366"></iframe>';
		}
		
		return $html;
	}
	
	/*=========================================================================
	* LAY VIDEO HOAC YOUTUBE DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function get_first_video($postContent = null){
		
		$firstVideo = '';
		if($postContent != null){
	
			$pattern = '#(\[video.*\]|http.*www\.youtube\.com\S+)#im';
			preg_match_all($pattern, $postContent, $matches);
				
			$videoArr = $matches[0];
	
			if(count($videoArr) > 0 ){
				$firstVideo = $videoArr[0];
			} 
		}
	
		return $firstVideo;
	}
	
	/*=========================================================================
	* XOA AUDIO HOAC PLAYLIST DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function remove_first_audio($audio,$content){
		//echo '<br/>' . __METHOD__;
	
		$audio 	=  str_replace('[', '\[', $audio);
		$audio 	=  str_replace(']', '\]', $audio);
		
		$pattern = '#'. $audio . '#';
		//echo '<br/>' . $pattern;
		$content = preg_replace($pattern, '', $content,1);
	
		return $content;
	}
	
	/*=========================================================================
	* LAY AUDIO HOAC PLAYLIST DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function get_first_audio($postContent = null){
		$firstAudio = '';
		if($postContent != null){
				
			$pattern = '#(\[audio.*\/audio\]|\[playlist.*\])#imU';
			preg_match_all($pattern, $postContent, $matches);
			
			$audioArr = $matches[0];
				
			if(count($audioArr) > 0 ){
				$firstAudio = $audioArr[0];
			}
		}
	
		return $firstAudio;
	
	}
	
	/*=========================================================================
	* XOA HINH DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function remove_first_img($image,$content){
		//echo '<br/>' . __METHOD__;
		
		$pattern = '\[caption.*'. $image . '.*\[/caption\]';
		//echo '<br/>' . $pattern;
		$content = preg_replace('#' . $pattern . '#', '', $content,1);
		$content = preg_replace('#' . $image . '#', '', $content, 1);
		
		return $content;
	}
	
	/*=========================================================================
	* LAY HINH DAU TIEN CO TRONG BAI VIET
	*=========================================================================*/
	public function get_first_img($postContent = null){
		
		$firstImg = '';
		if($postContent != null){
			
			$pattern = '#\<img.*>#imU';
			preg_match_all($pattern, $postContent, $matches);
			
			$imgArr = $matches[0];
			
			if(count($imgArr) > 0 ){
				$firstImg = $imgArr[0];
			}
		}
		
		return $firstImg;
	}
	
	public function get_img_url($post_content) {
	
		$image  = '';
		if(!empty($post_content)){
			preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i', $post_content, $matches );
		}
	
		if ( isset( $matches ) ) $image = $matches[1][0];
	
		return $image;
	}
	
	
	public function get_new_img_url($imgUrl, $width = 0, $heigt = 0 , $suffixes = '-slider-'){
		$suffixes = $suffixes . $width . 'x'. $heigt;
	
		//Lay ten tap tin hinh anh hien tai
		preg_match("/[^\/|\\\]+$/", $imgUrl, $currentName);
		$currentName = $currentName[0];
	
		//Tạo tên mới cho hình ảnh dựa trên tên cũ
		$tmpFileName = explode('.', $currentName);
		$newFileName = $tmpFileName[0] . $suffixes . '.' . $tmpFileName[1];
	
		//Chuyển từ đường dẫn URL sang PATH
		$tmp 	= explode('/wp-content/', $imgUrl);
		$imgDir = ABSPATH.'wp-content/' . $tmp[1];
	
		$newImgDir = str_replace($currentName, $newFileName, $imgDir);
		if(!file_exists($newImgDir)){
			$wpImageEditor =  wp_get_image_editor( $imgDir);
			if ( ! is_wp_error( $wpImageEditor ) ) {
				$wpImageEditor->resize($width, $heigt, array('center', 'center'));
				$wpImageEditor->save( $newImgDir);
			}
		}
		$newImgUrl= str_replace($currentName, $newFileName, $imgUrl);
	
		return $newImgUrl;
	}
}