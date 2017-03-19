<?php
/*
Plugin Name: dadumtckan
Description: dadumtckan is a wordpress plugin for Momentum dadumt theme custom function depend wpckan plugin.
Version: 0.1
Author: Z.yao (z.yao0103@gmail.com)
License: GPLv3
*/
if (!class_exists('dadumtckan')){
class dadumtckan{
	
	public function __construct(){
		
	}
	public static function dadumtckan_activate(){
		if(is_plugin_inactive('wpckan/wpckan.php')){
			deactivate_plugins( plugin_basename( __FILE__ ) );
			wp_die( 'This plugin requires wpckan plugin. Please check and active wpckan plugin.' );
		}elseif(!wpckan_validate_settings_read()){
			deactivate_plugins( plugin_basename( __FILE__ ) );
			wp_die( 'This plugin requires wpckan plugin. The wpckan plugin is actived but something went wrong, check your connection details.' );
		}
	}
}}

function dadumtckan_custom_get_api($query){	

	if (!wpckan_validate_settings_read()) {
		die;
	}
	
	$url = $GLOBALS['wpckan_options']->get_option('wpckan_setting_ckan_url').'/api/3/action/'.$query;
	$json = file_get_contents($url);
		
	$datasets = json_decode($json, true) ?: [];

	if (!isset($datasets['result'])):
		return [];
	endif;

	return $datasets['result'];
}

function dadumtckan_get_organization_combobox(){
		$organization_list = array();
		$organization_list = dadumtckan_custom_get_api('organization_list?all_fields=true');
		
		?>
		<select name="org" id="org" onchange="javascript:location.href='<?php echo get_permalink(); ?>&org=' + document.getElementById('org').value + '&search=' + document.getElementById('search').value; return false;">
			<option value="">全部</option>
			<?php foreach ($organization_list as $organization){ ?>
				<option value="<?php echo $organization["id"] ?>"><?php echo $organization["display_name"]?></option>
			<?php } ?>
		</select>
		<?php
}

function dadumtckan_get_number_of_all_datasets(){
	$result = array();
	$result = dadumtckan_custom_get_api('package_list');
	
	return count($result);
}

function dadumtckan_do_shortcode_get_number_of_query_datasets($org){
	$atts = array(
		'limit' 		=> "1000",
        'post_id' 		=> function(){get_the_ID();},
        'organization' 	=> $org,
		);
	
	return dadumtckan_show_number_of_query_datasets($atts);
}

function dadumtckan_show_number_of_query_datasets($atts){
    $dataset_array = array();

	$result = wpckan_api_package_search(wpckan_get_ckan_domain(),$atts);
	$dataset_array = $result["results"];
	$atts["count"] = $result["count"];

    return wpckan_output_template( plugin_dir_path( __FILE__ ) . '/templates/dataset-number.php',$dataset_array,$atts);
}

function dadumtckan_do_shortcode_query_datasets($atts){
	if (!wpckan_validate_settings_read()) {
		die;
	}

	return dadumtckan_show_query_datasets($atts);
}

function dadumtckan_show_query_datasets($atts) {
	
	$dataset_array = array();
	$result = wpckan_api_package_search(wpckan_get_ckan_domain(),$atts);
	$dataset_array = $result["results"];
	$atts["count"] = $result["count"];

	$blank_on_empty = false;
	if (array_key_exists("blank_on_empty",$atts)){
		$blank_on_empty = filter_var( $atts['blank_on_empty'], FILTER_VALIDATE_BOOLEAN );
	}

	if ((count($dataset_array) == 0) && $blank_on_empty)
		return "";

	return wpckan_output_template( plugin_dir_path( __FILE__ ) . '/templates/dataset-list.php',$dataset_array,$atts);
}

function dadumtckan_do_shortcode_query_datasets_res($atts){
	if (!wpckan_validate_settings_read()) {
		die;
	}

	return dadumtckan_show_query_res($atts);
}

function dadumtckan_show_query_res($atts) {
	
	$dataset_array = array();
	$result = wpckan_api_package_search(wpckan_get_ckan_domain(),$atts);
	$dataset_array = $result["results"];
	$atts["count"] = $result["count"];

	$blank_on_empty = false;
	if (array_key_exists("blank_on_empty",$atts)){
		$blank_on_empty = filter_var( $atts['blank_on_empty'], FILTER_VALIDATE_BOOLEAN );
	}

	if ((count($dataset_array) == 0) && $blank_on_empty)
		return "";

	return wpckan_output_template( plugin_dir_path( __FILE__ ) . '/templates/dataset-list-res.php',$dataset_array,$atts);
}

add_shortcode('dadumtckan_query_datasets', 'dadumtckan_do_shortcode_query_datasets');
add_shortcode('dadumtckan_query_datasets_res', 'dadumtckan_do_shortcode_query_datasets_res');
if (class_exists('dadumtckan')) {
    register_activation_hook(__FILE__, array('dadumtckan', 'dadumtckan_activate'));
}
?>