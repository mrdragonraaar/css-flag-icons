<?php
/**
 * functions.php
 *
 * (c)2012 mrdragonraaar.com
 */
define('FLAG_ICON_BASE_URL', '/global/icons/flag-icons/flags_iso/');
define('DEFAULT_FLAG_ICON_SIZE', 24);

include('lib/FlagIconCSS/FlagIconCSS.php');

/**
 * Display country code CSS for flag icons.
 */
function flag_icon_countrycodes_css()
{
	global $flag_icon_css;

	$flag_icon_css->countrycodes_css();
}

/**
 * Display reserved country code CSS for flag icons.
 */
function flag_icon_countrycodes_reserved_css()
{
	global $flag_icon_css;

	$flag_icon_css->countrycodes_reserved_css();
}

/**
 * Display flag icon css.
 * @param $country country name of icon.
 * @param $code country code of icon.
 */
function flag_icon_css($country, $code = '')
{
	global $flag_icon_css;

	$flag_icon_css->css($country, $code);
}

/**
 * Display country code html for flag icons.
 */
function flag_icon_countrycodes_html()
{
	global $flag_icon_css;

	$flag_icon_css->countrycodes_html();
}

/**
 * Display reserved country code html for flag icons.
 */
function flag_icon_countrycodes_reserved_html()
{
	global $flag_icon_css;

	$flag_icon_css->countrycodes_reserved_html();
}

/**
 * Display flag icon list item html.
 * @param $country country name of icon.
 * @param $code country code of icon.
 */
function flag_icon_html($country, $code = '')
{
	global $flag_icon_css;

	$flag_icon_css->html($country, $code);
}

/**
 * Display html navigation bar for valid flag 
 * icon sizes.
 */
function flag_icon_html_size_navbar()
{
	global $flag_icon_css;

	$flag_icon_css->html_size_navbar();
}

?>
