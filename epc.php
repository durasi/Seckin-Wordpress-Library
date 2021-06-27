  
<!--
//2021-06-27
//www.seckin.co
//Seçkin Durası 
//https://github.com/durasi/Seckin-Wordpress-Library
-->

<?
/*
Plugin Name: Easy EPC 
Plugin URI: https://www.seckin.co/easy-php-code
Description: Most easy EPC
Author: durasi
Version: 1.1
Text Domain: epc
Author URI: https://www.seckin.co
*/
class epc extends WP_Widget {
	function __construct() {
		load_plugin_textdomain( 'epc', false, dirname( plugin_basename( __FILE__ ) ) );
		$epcw1 = array('classname' => 'epcw', 'description' => __('EPC', 'epc'));
		$epcw2 = array('width' => 550, 'height' => 420);
		parent::__construct('easyphpcode', __('EPC', 'epc'), $epcw1, $epcw2);
	}

	function widget( $pcode1, $pcode2 ) {
		extract($pcode1);
		$header = apply_filters( 'widget_title', empty($pcode2['title']) ? '' : $pcode2['title'], $pcode2 );
		$writehere = apply_filters( 'epcw', $pcode2['text'], $pcode2 );
		echo $before_widget;
		if ( !empty( $header ) ) { echo $before_title . $header . $after_title; }
			ob_start();
			eval('?>'.$writehere);
			$writehere = ob_get_contents();
			ob_end_clean();
			?>
			
			<div class="epc"><? echo $pcode2['filter'] ? wpautop($writehere) : $writehere; ?></div>
		
		<?
			echo $after_widget;
	}

	function update( $new_instance, $old_instance ) {
		$pcode2 = $old_instance;
		$pcode2['title'] = strip_tags($new_instance['title']);
		if ( current_user_can('unfiltered_html') )
			$pcode2['text'] =  $new_instance['text'];
		else
			$pcode2['text'] = stripslashes( wp_filter_post_kses( $new_instance['text'] ) );
		$pcode2['filter'] = isset($new_instance['filter']);
		return $pcode2;
	}

	function form( $pcode2 ) {
		$pcode2 = wp_parse_args( (array) $pcode2, array( 'title' => '', 'text' => '' ) );
		$header = strip_tags($pcode2['title']);
		$writehere = format_to_edit($pcode2['text']);
?>
		<div>
			<label for="<? echo $this->get_field_id('title'); ?>"><? _e('Title:', 'epc'); ?></label>
			<input class="widefat" id="<? echo $this->get_field_id('title'); ?>" name="<? echo $this->get_field_name('title'); ?>" type="text" value="<? echo esc_attr($header); ?>" />
			<textarea class="widefat" id="<? echo $this->get_field_id('text'); ?>" name="<? echo $this->get_field_name('text'); ?>" cols="22" rows="14" ><? echo $writehere; ?></textarea>

			<input id="<? echo $this->get_field_id('filter'); ?>" name="<? echo $this->get_field_name('filter'); ?>" type="checkbox" <? checked(isset($pcode2['filter']) ? $pcode2['filter'] : 0); ?> /> 
			<label for="<? echo $this->get_field_id('filter'); ?>"><? _e('EPC', 'epc'); ?></label>
		</div>
<?
	}
}

add_action('widgets_init', create_function('', 'return register_widget("epc");'));
