<?php
/**
 * Plugin Name: Remove Website Field from Comment Form
 * Plugin URI:  https://github.com/dmitriyraspel/Remove-Website-Field-from-Comment-Form
 * Description: Remove website field from comment form. If you want to remove the website field, this is simple and easy way. No settings. No extra code. Plug & play works :-)
 * Version:     1.0.0
 * Author:      Dmitriy Raspel
 * Author URI:  https://raspel.ru
 * Requires PHP: 5.4
 * Requires at least: 5.0
 * Tested Up to: 6.1.1
 * License: GPLv2 or later
 */

add_filter( 'comment_form_default_fields', 'rspl_remove_url_field_from_comment_form' );
/**
 * Remove website field from comment form
 *
 * @param array $fields
 *
 * @return array
 */

function rspl_remove_url_field_from_comment_form( $fields ) {
	unset( $fields['url'] );
	return $fields;
}
