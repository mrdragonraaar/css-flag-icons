<?php
/**
 * CountryCodes.php
 *
 * (c)2012 mrdragonraaar.com
 */
define('ISO3166_TXT', 'iso-3166/country_names_and_code_elements.txt');
define('ISO3166_RESERVED_TXT', 'iso-3166/country_names_and_code_elements_reserved.txt');

/**
 * Get iso3166 country codes by country.
 * @return array of country codes.
 */
function countrycodes_by_country()
{
	return read_iso3166(dirname(__FILE__) . '/' . ISO3166_TXT);
}

/**
 * Get iso3166 reserved country codes by country.
 * @return array of country codes.
 */
function countrycodes_reserved_by_country()
{
	return read_iso3166(dirname(__FILE__) . '/' . ISO3166_RESERVED_TXT);
}

/**
 * Get iso3166 country codes by code.
 * @return array of country codes.
 */
function countrycodes_by_code()
{
	return read_iso3166(dirname(__FILE__) . '/' . ISO3166_TXT, true);
}

/**
 * Get iso3166 reserved country codes by code.
 * @return array of country codes.
 */
function countrycodes_reserved_by_code()
{
	return read_iso3166(dirname(__FILE__) . '/' . ISO3166_RESERVED_TXT, true);
}

/**
 * Read iso3166 text file.
 * @param string $filename iso3166 file to read.
 * @param boolean $by_code return country codes keyed by code.
 * @return array of country codes.
 */
function read_iso3166($filename = '', $by_code = false)
{
	$countrycodes = array();

	if ($handle = fopen($filename, 'r'))
	{
		while (($buffer = fgets($handle)) !== false)
		{
			$codes = split(';', $buffer);

			$country = $codes[0];
			$country = trim($country);

			if (isset($country) && $country && 
				strcmp($country, 'Country Name'))
			{
				$code = $codes[1];
				$code = trim($code);

				if ($by_code)
				{
					$countrycodes[$code] = $country;
				}
				else
				{
					$countrycodes[$country] = $code;
				}
			}	
		}

		fclose($handle);
	}

	return $countrycodes;
}

?>
