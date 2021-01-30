<?php
add_action( 'gform_pre_submission', 'wpa_gravityforms_extra_validation');

function wpa_gravityforms_extra_validation($form){
	if (!isset($_POST[ $GLOBALS['wpa_field_name']] )){
		do_action('wpa_handle_spammers','gravityforms');
		die($GLOBALS['wpa_error_message']);
	}
}