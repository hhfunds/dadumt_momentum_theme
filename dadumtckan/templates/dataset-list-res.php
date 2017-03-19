<?php if (is_null($data)) die(); ?>

<?php
	$include_fields_dataset = array();
	$include_fields_resources = array();
	if (array_key_exists("include_fields_dataset",$atts) && !empty($atts["include_fields_dataset"])):
		$include_fields_dataset = explode(",",$atts["include_fields_dataset"]);
	endif;
	if (array_key_exists("include_fields_resources",$atts) && !empty($atts["include_fields_resources"])):
		$include_fields_resources = explode(",",$atts["include_fields_resources"]);
	endif;
	if (array_key_exists("related_dataset",$atts)):
		$count = count($atts["related_dataset"]);
	endif;
	if (array_key_exists("count",$atts)):
		$count = $atts["count"];
	endif;

	$include_fields_extra = array();
	if (array_key_exists("include_fields_extra",$atts)):
		$include_fields_extra = explode(",",$atts["include_fields_extra"]);
	endif;

	$target_blank_enabled = $GLOBALS['wpckan_options']->get_option('wpckan_setting_target_blank_enabled');
	$uses_ckanext_fluent = $GLOBALS['wpckan_options']->get_option('wpckan_setting_uses_ckanext_fluent');
	$current_language = 'en';
	if ($uses_ckanext_fluent && wpckan_is_qtranslate_available()):
		$current_language = qtranxf_getLanguage();
	endif;

?>
<?php foreach ($data as $dataset){ ?>
<?php if (array_key_exists("resources",$dataset) && !empty($include_fields_resources)){ ?>
<div id="container">
	<ul>
	<?php foreach ($dataset["resources"] as $resourcep){ ?>
		<?php if($resourcep['format'] == "JPEG"):?>
			<li><a href="<?php echo $resourcep['url'] ?>" data-imagelightbox="f"><img src="<?php echo $resourcep['url'] ?>" alt="<?php echo $resourcep['name'] ?>" /></a></li>
		<?php endif; ?>
	<?php } ?>
	</ul>
</div>

<div class="wpckan_resources_list">
	<ul>
		<?php foreach ($dataset["resources"] as $resource){ ?>
			<li>
				<div class="wpckan_resource">
					<a href="<?php echo $resource['url']; ?>">
					<?php switch ($resource['format']){
						case "PPTX":
							echo "<i class='fa fa-file-powerpoint-o fa-2x' aria-hidden='true'></i>";
							break;
						case "JPEG":
							echo "<i class='fa fa-picture-o fa-2x' aria-hidden='true'></i>";
							break;
						case "XLSX":
							echo "<i class='fa fa-file-excel-o fa-2x' aria-hidden='true'></i>";
							break;
						default:
							echo "<i class='fa fa-file-text fa-2x' aria-hidden='true'></i>";
							break;
					}					
					?>
					<?php echo $resource['name'] ?>　　<i class="fa fa-download fa-lg" aria-hidden="true"></i></a><br />
					
					<i class="fa fa-quote-left fa-lg fa-pull-left fa-border" aria-hidden="true" style="line-height:1.5em;">
						<?php echo $resource['description']; ?><br />
						更新時間:<?php echo substr($resource['last_modified'],0,-16);?>
					</i>
				</div>
			</br />
			</li>
		<?php } ?>
	</ul>
</div>

<?php }} ?>
