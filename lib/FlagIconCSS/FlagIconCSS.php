<?php
/**
 * FlagIconCSS.php
 *
 * (c)2012 mrdragonraaar.com
 */
include('IconCSS.php');
include('lib/CountryCodes/CountryCodes.php');

if (!defined('FLAG_ICON_BASE_CLASS')) {
define('FLAG_ICON_BASE_CLASS', 'flag');        // base css class
}
if (!defined('FLAG_ICON_SIZE_CLASS_PREFIX')) {
define('FLAG_ICON_SIZE_CLASS_PREFIX', 'f');    // prefix for size css class
}
if (!defined('FLAG_ICON_LABEL_CLASS_PREFIX')) {
define('FLAG_ICON_LABEL_CLASS_PREFIX', '_');   // prefix for name css class
}
if (!defined('FLAG_ICON_NAME_CLASS_PREFIX')) {
define('FLAG_ICON_NAME_CLASS_PREFIX', '');     // prefix for name css class
}
if (!defined('DEFAULT_FLAG_ICON_SIZE')) {
define('DEFAULT_FLAG_ICON_SIZE', 24);          // default size of icon
}
if (!defined('FLAG_ICON_BASE_URL')) {
define('FLAG_ICON_BASE_URL', 'flag-icons/');   // base url to icons
}
if (!defined('FLAG_ICON_FILE_EXT')) {
define('FLAG_ICON_FILE_EXT', 'png');           // file extension of icon
}


/**
 * Create CSS for IconDrawer flag-icons.
 *
 * @author Adrian D. Elgar
 */
class FlagIconCSS extends IconCSS
{
	static private $_valid_icon_sizes = array(16, 24, 32, 48, 64, 128);
	private $_countrycodes;
	private $_countrycodes_reserved;

	/**
         * Create new FlagIconCSS instance.
         */
	function __construct()
	{
		parent::__construct();

		$this->_countrycodes = countrycodes_by_country();
		$this->_countrycodes_reserved = countrycodes_reserved_by_country();
	}

	/**
         * Get country codes.
         * @return array of country codes.
         */
	public function countrycodes()
	{
		return $this->_countrycodes;
	}

	/**
         * Get reserved country codes.
         * @return array of reserved country codes.
         */
	public function countrycodes_reserved()
	{
		return $this->_countrycodes_reserved;
	}

	/**
         * Display country code CSS for flag icons.
         */
	public function countrycodes_css()
	{
		$this->_countrycodes_css($this->_countrycodes);
	}

	/**
         * Display reserved country code CSS for flag icons.
         */
	public function countrycodes_reserved_css()
	{
		$this->_countrycodes_css($this->_countrycodes_reserved);
	}

	/**
         * Display given country code CSS for flag icons.
         * @param $countrycodes array of country codes.
         */
	private function _countrycodes_css($countrycodes)
	{
		foreach ($countrycodes as $country => $code)
		{
			$this->css($country, $code);
		}
	}

	/**
         * Display country code html for flag icons.
         */
	public function countrycodes_html()
	{
		$this->_countrycodes_html($this->_countrycodes);
	}

	/**
         * Display reserved country code html for flag icons.
         */
	public function countrycodes_reserved_html()
	{
		$this->_countrycodes_html($this->_countrycodes_reserved);
	}

	/**
         * Display given country code html for flag icons.
         * @param $countrycodes array of country codes.
         */
	private function _countrycodes_html($countrycodes)
	{
		foreach ($countrycodes as $country => $code)
		{
			$this->html($country, $code);
		}
	}

	/**
         * Get base css class for flag icon.
         * @return base css class.
         */
	static public function base_class()
	{
		return FLAG_ICON_BASE_CLASS;
	}

	/**
         * Get prefix for label css class.
         * @return css label class prefix.
         */
	static public function label_class_prefix()
	{
		return FLAG_ICON_LABEL_CLASS_PREFIX;
	}

	/**
         * Get prefix for name css class.
         * @return css name class prefix.
         */
	static public function name_class_prefix()
	{
		return FLAG_ICON_NAME_CLASS_PREFIX;
	}

	/**
         * Get prefix for size css class.
         * @return css size class prefix.
         */
	static public function size_class_prefix()
	{
		return FLAG_ICON_SIZE_CLASS_PREFIX;
	}

	/**
         * Get array of valid values for flag icon size.
         * @return array of valid icon sizes.
         */
	static public function valid_icon_sizes()
	{
		return self::$_valid_icon_sizes;
	}

	/**
         * Get default flag icon size value.
         * @return default icon size.
         */
	static public function default_icon_size()
	{
		return DEFAULT_FLAG_ICON_SIZE;
	}

	/**
         * Get base url for flag icons.
         * @return base icon url.
         */
	static public function base_icon_url()
	{
		return FLAG_ICON_BASE_URL;
	}

	/**
         * Get extension for flag icon file.
         * @return icon file extension.
         */
	static public function icon_file_ext()
	{
		return FLAG_ICON_FILE_EXT;
	}

}

$flag_icon_css = new FlagIconCSS();

?>
