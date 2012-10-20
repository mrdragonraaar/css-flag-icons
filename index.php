<?php
/**
 * index.php
 *
 * Display IconDrawer flag icons.
 *
 * (c)2012 mrdragonraaar.com
 */
include('functions.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>IconDrawer flag-icons (<?php echo $flag_icon_css->icon_size(); ?>px)</title>
<link rel="stylesheet" href="css-flag-icons.php<?php if ($flag_icon_css->is_valid_icon_size()) { echo '?size=' . $flag_icon_css->icon_size(); } ?>" type="text/css" />

<style type="text/css">
body
{
	font-family: verdana, helvetica, arial, sans-serif;
	font-size: 11px;
	margin: 20px 20px 20px 20px;
	padding: 0;
}

h1
{
	font-size: 13px;
	margin: 0;
	margin-bottom: 10px;
	padding: 0;
}

div.icon_sizes
{
	margin: 0;
	padding: 0;
}

a
{
	color: #444;
}

a:hover
{
	color: #000;
}

ul
{
	margin: 0;
	margin-top: 20px;
	padding: 0;
	list-style-type: none;
}

li
{
	height: <?php echo $flag_icon_css->icon_size(); ?>px;
	line-height: <?php echo $flag_icon_css->icon_size(); ?>px;
	vertical-align: bottom;
	padding-left: <?php echo $flag_icon_css->icon_size() + 3; ?>px;
}
</style>
</head>

<body>
<h1>IconDrawer flag-icons (<?php echo $flag_icon_css->icon_size(); ?>px)</h1>

<!-- Icon Size Navbar -->
<div class="icon_sizes">
<?php flag_icon_html_size_navbar(); ?>
</div>
<!-- END Icon Size Navbar -->

<ul>
<!-- ISO-3166 Flags -->
<?php flag_icon_countrycodes_html(); ?>
<!-- END ISO-3166 Flags -->

<!-- ISO-3166 Reserved Flags -->
<?php flag_icon_countrycodes_reserved_html(); ?>
<!-- END ISO-3166 Reserved Flags -->

<!-- Non ISO-3166 Flags -->
<?php
flag_icon_html('African Union');
flag_icon_html('Alderney');
flag_icon_html('Arab League');
flag_icon_html('ASEAN');
flag_icon_html('Basque Country');
flag_icon_html('Catalonia');
flag_icon_html('CIS');
flag_icon_html('Commonwealth');
flag_icon_html('England');
flag_icon_html('FAO');
flag_icon_html('Galicia');
flag_icon_html('IAEA');
flag_icon_html('IHO');
flag_icon_html('Islamic Conference');
flag_icon_html('Kosovo');
flag_icon_html('NATO');
flag_icon_html('Northern Cyprus');
flag_icon_html('Northern Ireland');
flag_icon_html('OAS');
flag_icon_html('OECD');
flag_icon_html('Olimpic Movement');
flag_icon_html('OPEC');
flag_icon_html('Red Cross');
flag_icon_html('Scotland');
flag_icon_html('Somaliland');
flag_icon_html('UNESCO');
flag_icon_html('UNICEF');
flag_icon_html('United Nations');
flag_icon_html('Wales');
flag_icon_html('WHO');
flag_icon_html('WTO');
flag_icon_html('Bonaire');
flag_icon_html('Sint Eustatius');
flag_icon_html('Saba');
flag_icon_html('Melilla');
?>
<!-- END Non ISO-3166 Flags -->
</ul>
</body>
</html>

