<?php
/**
 * IconCSS.php
 *
 * (c)2012 mrdragonraaar.com
 */

/**
 * Create CSS for an icon set.
 *
 * @author Adrian D. Elgar
 */
abstract class IconCSS
{
	private $_querystring_icon_size;   // icon size from querystring
	private $_is_valid_icon_size;      // is querystring icon size valid?

	/**
         * Create new IconCSS instance.
         */
	function __construct()
	{
		$this->_querystring_icon_size = $this->read_querystring_icon_size();
		$this->_is_valid_icon_size = $this->_is_valid_icon_size();
	}

	/**
         * Get icon size value.
         * Returns querystring icon size if available
	 * otherwise default icon size.
         * @return icon size.
         */
	final public function icon_size()
	{
		return $this->is_valid_icon_size() ? 
		   $this->querystring_icon_size() : 
		   $this->default_icon_size();
	}

	/**
         * Get array of valid values for icon size.
         * @return array of valid icon sizes.
         */
	abstract static public function valid_icon_sizes();

	/**
         * Get default icon size value.
         * @return default icon size.
         */
	abstract static public function default_icon_size();

	/**
         * Get icon size from querystring.
         * @return querystring icon size.
         */
	final public function querystring_icon_size()
	{
		return $this->_querystring_icon_size;
	}

	/**
         * Reads icon size from querystring.
         * Returns 0 if no value.
         * @return querystring icon size.
         */
	final static public function read_querystring_icon_size()
	{
		parse_str($_SERVER['QUERY_STRING'], $query);

		return isset($query['size']) && is_numeric($query['size']) ? 
		   $query['size'] : 0;
	}

	/**
         * Is icon size from querystring valid?.
         * @return true if valid icon size.
         */
	final public function is_valid_icon_size()
	{
		return $this->_is_valid_icon_size;
	}

	/**
         * Checks whether icon size from querystring
	 * is valid?.
         * @return true if valid icon size.
         */
	final private function _is_valid_icon_size()
	{
		return in_array($this->querystring_icon_size(), $this->valid_icon_sizes()) ? true : false;
	}

	/**
         * Get base css class for icon.
         * @return base css class.
         */
	abstract static public function base_class();

	/**
         * Get prefix for size css class.
         * @return css size class prefix.
         */
	abstract static public function size_class_prefix();

	/**
         * Get prefix for label css class.
         * @return css label class prefix.
         */
	abstract static public function label_class_prefix();

	/**
         * Get prefix for name css class.
         * @return css name class prefix.
         */
	abstract static public function name_class_prefix();

	/**
         * Get css class for icon size.
         * @return css size class.
         */
	public function size_class()
	{
		return $this->is_valid_icon_size() ? 
		   $this->size_class_prefix() . $this->icon_size() : 
		   '';
	}

	/**
         * Removes whitespace and non-alphanumeric 
	 * characters from icon label.
         * @param $label icon label.
         * @return css label class.
         */
	final static public function normalise_label($label)
	{
		return preg_replace('/[\,\',\(,\),\.]/', '', 
		   preg_replace('/\s/', '-', $label));
	}

	/**
         * Get css class for icon label.
         * @param $label icon label.
         * @return css label class.
         */
	public function label_class($label)
	{
		return $this->label_class_prefix() . 
		   self::normalise_label($label);
	}

	/**
         * Get css class for icon name.
         * @param $name icon name.
         * @return css name class.
         */
	public function name_class($name)
	{
		return $this->name_class_prefix() . strtolower($name);
	}

	/**
         * Get complete css class for label.
         * @param $label icon label.
         * @return complete css label class.
         */
	public function css_class_label($label)
	{
		return '.' . $this->base_class() . 
		   ($this->size_class() ? '.' . $this->size_class() : '') . 
		   '.' . $this->label_class($label);
	}

	/**
         * Get complete css class for name.
         * @param $name icon name.
         * @return complete css name class.
         */
	public function css_class_name($name)
	{
		return '.' . $this->base_class() . 
		   ($this->size_class() ? '.' . $this->size_class() : '') . 
		   '.' . $this->name_class($name);
	}

	/**
         * Get complete css class for icon.
         * @param $label icon label.
         * @param $name icon name.
         * @return css class.
         */
	public function css_class($label, $name = '')
	{
		$css_class = $this->css_class_label($label);

		if ($name)
		{
			$css_class .= ', ' . $this->css_class_name($name);
		}

		return $css_class;
	}

	/**
         * Get compete html class for icon.
         * @param $name icon label.
         * @return html class.
         */
	public function html_class($label)
	{
		return $this->base_class() . 
		   ($this->size_class() ? ' ' . $this->size_class() : '') . 
		   ' ' . $this->label_class($label);
	}

	/**
         * Get base url for icons.
         * @return base icon url.
         */
	abstract static public function base_icon_url();

	/**
         * Get parent url of icon.
         * @return parent icon url.
         */
	public function parent_icon_url()
	{
		return $this->base_icon_url() . $this->icon_size() . '/';
	}

	/**
         * Get file basename for icon.
         * @param $label icon label.
         * @param $name icon name.
         * @return icon file basename.
         */
	public function icon_file_basename($label, $name = '')
	{
		return $name ? $this->name_class($name) : 
		   $this->label_class($label);
	}

	/**
         * Get extension for icon file.
         * @return icon file extension.
         */
	abstract static public function icon_file_ext();

	/**
         * Get filename for icon.
         * @param $label icon label.
         * @param $name icon name.
         * @return icon filename.
         */
	public function icon_filename($label, $name = '')
	{
		return $this->icon_file_basename($label, $name) . 
		   '.' . $this->icon_file_ext();
	}

	/**
         * Get full url for icon.
         * @param $label icon label.
         * @param $name icon name.
         * @return icon url.
         */
	public function icon_url($label, $name = '')
	{
		return $this->parent_icon_url() . $this->icon_filename($label, $name);
	}

	/**
         * Display css for icon.
         * @param $label icon label.
         * @param $name icon name.
         */
	public function css($label, $name = '')
	{
		echo $this->css_class($label, $name);
?>

{
	background: url('<?php echo $this->icon_url($label, $name); ?>') no-repeat;
}
<?php
	}

	/**
         * Display html list item for icon.
         * @param $label icon label.
         * @param $name icon name.
         */
	public function html($label, $name = '')
	{
?>
<li class="<?php echo $this->html_class($label); ?>"><?php echo $label; if ($name) { echo ' (' . $name . ')'; } ?></li>
<?php
	}

	/**
         * Display html navigation bar for valid icon sizes.
         */
	function html_size_navbar()
	{
?>
| <a href=".">Default</a> | 
<?php
		foreach ($this->valid_icon_sizes() as $icon_size)
		{
?>
<a href="?size=<?php echo $icon_size; ?>"><?php echo $icon_size; ?>px</a> | 
<?php
		}
	}
}

?>
