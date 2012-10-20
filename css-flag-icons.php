<?php
/**
 * css-flag-icons.php
 *
 * CSS for IconDrawer flag icons.
 *
 * (c)2012 mrdragonraaar.com
 */
include('functions.php');
header("Content-type: text/css");
?>
/**
 * IconDrawer flag-icons (<?php echo $flag_icon_css->icon_size(); ?>px)
 */

/**
 * ISO-3166 Flag Icons
 */
<?php
flag_icon_countrycodes_css();
?>

/**
 * ISO-3166 Reserved Flag Icons
 */
<?php
flag_icon_countrycodes_reserved_css();
?>

/**
 * Non ISO-3166 Flag Icons
 */
<?php
flag_icon_css('African Union');
flag_icon_css('Alderney');
flag_icon_css('Arab League');
flag_icon_css('ASEAN');
flag_icon_css('Basque Country');
flag_icon_css('Catalonia');
flag_icon_css('CIS');
flag_icon_css('Commonwealth');
flag_icon_css('England');
flag_icon_css('FAO');
flag_icon_css('Galicia');
flag_icon_css('IAEA');
flag_icon_css('IHO');
flag_icon_css('Islamic Conference');
flag_icon_css('Kosovo');
flag_icon_css('NATO');
flag_icon_css('Northern Cyprus');
flag_icon_css('Northern Ireland');
flag_icon_css('OAS');
flag_icon_css('OECD');
flag_icon_css('Olimpic Movement');
flag_icon_css('OPEC');
flag_icon_css('Red Cross');
flag_icon_css('Scotland');
flag_icon_css('Somaliland');
flag_icon_css('UNESCO');
flag_icon_css('UNICEF');
flag_icon_css('United Nations');
flag_icon_css('Wales');
flag_icon_css('WHO');
flag_icon_css('WTO');
flag_icon_css('Bonaire');
flag_icon_css('Sint Eustatius');
flag_icon_css('Saba');
flag_icon_css('Melilla');
?>

