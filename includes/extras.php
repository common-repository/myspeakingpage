<?php

/*---------------------------------------------------------*/
/* Divi Theme Integration                                  */
/*---------------------------------------------------------*/

function msp_divi_init() {
	add_filter('get_post_metadata', 'msp_override_divi_pagebuilder', 10, 4);
}
add_action('msp_init', 'msp_divi_init');

function msp_override_divi_pagebuilder($value, $object_id, $meta_key, $single) {
	if($object_id == msp_get_setting('speaking_page') and $meta_key === '_et_pb_use_builder') { return false; }
}
