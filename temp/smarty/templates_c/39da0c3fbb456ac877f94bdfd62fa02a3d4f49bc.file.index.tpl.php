<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-23 07:00:32
         compiled from "C:\wamp\www\mandinet.com\temp\smarty\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10803550d3c1ba5d258-80034574%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39da0c3fbb456ac877f94bdfd62fa02a3d4f49bc' => 
    array (
      0 => 'C:\\wamp\\www\\mandinet.com\\temp\\smarty\\templates\\index.tpl',
      1 => 1427090221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10803550d3c1ba5d258-80034574',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_550d3c1bb13f54_35592230',
  'variables' => 
  array (
    'title' => 0,
    'mainContent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_550d3c1bb13f54_35592230')) {function content_550d3c1bb13f54_35592230($_smarty_tpl) {?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<link rel="shortcut icon" href="css/images/icon.ico">
	<link rel="stylesheet"  href="css/style.css">	
	<link rel="stylesheet"  href="css/jquery.treeview.css">
	<link rel="stylesheet"  href="css/mainstyle.css">	
	<link rel="stylesheet"  href="css/qtipv2css.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet"  href="css/themes/default/jquery.mobile-1.4.2.min.css">	
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
	<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="_assets/js/index.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/index.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery.mobile-1.4.2.min.js" ><?php echo '</script'; ?>
>	
	<?php echo '<script'; ?>
 src="js/jquery.treeview.min.js" ><?php echo '</script'; ?>
>		
	<?php echo '<script'; ?>
 src="js/qtipv2js.js" ><?php echo '</script'; ?>
>		
	<?php echo '<script'; ?>
 src="js/invoice.js"><?php echo '</script'; ?>
>
	
	<!--script type="text/javascript">
	$(document).bind( "pagecontainerload", function( e, triggerData ) {
	var redirect = triggerData.xhr.getResponseHeader( "X-Redirect" );
	if ( redirect ) {
	$( e.target ).pagecontainer( "load", redirect, triggerData.options );
	e.preventDefault();
	}
	});
	<?php echo '</script'; ?>
-->

</head>
<body>
 
<button class="show-page-loading-msg" data-textonly="false" data-textvisible="false" data-msgtext="" data-inline="true">Icon (default)</button>
<button class="show-page-loading-msg" data-textonly="false" data-textvisible="true" data-msgtext="" data-inline="true">Icon + text</button>
<button class="show-page-loading-msg" data-textonly="true" data-textvisible="true" data-msgtext="Text only loader" data-inline="true">Text only</button>
<button class="hide-page-loading-msg" data-inline="true" data-icon="delete">Hide</button>

<div id="page" data-role="page" class="jqm-demos jqm-home" data-ajax="false">
	<!-- /header -->
	<div data-role="header" class="jqm-header">
	  <h2><img src="css/images/mandilaslogo1.png" alt="Mandilas"></h2>
		<p><a href="../mandinet.com/?action=logout" data-ajax="false">Logout</a></p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-btn-right">Search</a>
	</div><!-- /header -->
	
	<!-- content -->
      <div role="main" class="ui-content jqm-content" id="forummaindiv" >

		<?php echo $_smarty_tpl->tpl_vars['mainContent']->value;?>


	</div><!-- /content -->
	
<!-- panel -->
<div data-role="panel" class="jqm-navmenu-panel" data-position="left" data-display="overlay" data-theme="a">
<ul class="jqm-list ui-alt-icon ui-nodisc-icon">
<li data-filtertext="homepage" data-icon="home" ><a href="../mandinet.com/?view=homeView" data-ajax="false">Home</a></li>
<li data-filtertext="homepage" data-icon="caret-r" ><a href="../mandinet.com/?view=nlngView" data-ajax="false">NLNG</a></li>
<!--total-->
<li data-filtertext="homepage" data-icon="caret-r" ><a href="../mandinet.com/?view=totalView" data-ajax="false">Total</a></li>
<!---UBA-------->
<li data-filtertext="homepage" data-icon="caret-r" ><a href="../mandinet.com/?view=ubaView" data-ajax="false">Union Bank</a></li>
<!----ADMIN-------->
<li data-filtertext="homepage" data-icon="caret-r" ><a href="../mandinet.com/?view=adminView" data-ajax="false">Administrations</a></li>
</ul>
  </div>
<!-- /panel -->


	<div data-role="footer" data-position="fixed" data-tap-toggle="true" class="jqm-footer">
		<p>mandinet 1.0.1</p>
		<p>Copyright &COPY; mandilas ent. ltd. Bonny Island Rivers state.</p>
	</div><!-- /footer -->
	
	<!-- TODO: This should become an external panel so we can add input to markup (unique ID) -->
    <div data-role="panel" class="jqm-search-panel" data-position="right" data-display="overlay" data-theme="a">
		<div class="jqm-search">
			<ul class="jqm-list" data-filter-placeholder="Search demos..." data-filter-reveal="true">
<li data-filtertext="demos homepage" data-icon="home"><a href="../mandinet.com/./">Home</a></li>
<li data-filtertext="introduction overview getting started"><a href="../mandinet.com/intro/" data-ajax="false">Introduction</a></li>
<li data-filtertext="buttons button markup buttonmarkup method anchor link button element"><a href="../mandinet.com/button-markup/" data-ajax="false">Buttons</a></li>
<li data-filtertext="form button widget input button submit reset"><a href="../mandinet.com/button/" data-ajax="false">Button widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Checkboxradio widget</h3>
	<ul>
		<li data-filtertext="pm"><a href="../mandinet.com/checkboxradio-checkbox/" data-ajax="false">Checkboxes</a></li>
		<li data-filtertext="pm"><a href="../mandinet.com/checkboxradio-radio/" data-ajax="false">Radio buttons</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Collapsible (set) widget</h3>
	<ul>
		<li data-filtertext="collapsibles content formatting"><a href="../mandinet.com/collapsible/" data-ajax="false">Collapsible</a></li>
		<li data-filtertext="dynamic collapsible set accordion append expand"><a href="../mandinet.com/collapsible-dynamic/" data-ajax="false">Dynamic collapsibles</a></li>
		<li data-filtertext="accordions collapsible set widget content formatting grouped collapsibles"><a href="../mandinet.com/collapsibleset/" data-ajax="false">Collapsible set</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Controlgroup widget</h3>
	<ul>
		<li data-filtertext="controlgroups selectmenu checkboxradio input grouped buttons horizontal vertical"><a href="../mandinet.com/controlgroup/" data-ajax="false">Controlgroup</a></li>
		<li data-filtertext="dynamic controlgroup dynamically add buttons"><a href="../mandinet.com/controlgroup-dynamic/" data-ajax="false">Dynamic controlgroups</a></li>
	</ul>
</li>
<li data-filtertext="form datepicker widget date input"><a href="../mandinet.com/datepicker/" data-ajax="false">Datepicker</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Events</h3>
	<ul>
		<li data-filtertext="swipe to delete list items listviews swipe events"><a href="../mandinet.com/swipe-list/" data-ajax="false">Swipe list items</a></li>
		<li data-filtertext="swipe to navigate swipe page navigation swipe events"><a href="../mandinet.com/swipe-page/" data-ajax="false">Swipe page navigation</a></li>
	</ul>
</li>
<li data-filtertext="filterable filter elements sorting searching listview table"><a href="../mandinet.com/filterable/" data-ajax="false">Filterable widget</a></li>
<li data-filtertext="form flipswitch widget flip toggle switch binary select checkbox input"><a href="../mandinet.com/flipswitch/" data-ajax="false">Flipswitch widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Forms</h3>
	<ul>
		<li data-filtertext="forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements"><a href="../mandinet.com/forms/" data-ajax="false">Forms</a></li>
		<li data-filtertext="form hide labels hidden accessible ui-hidden-accessible forms"><a href="../mandinet.com/forms-label-hidden-accessible/" data-ajax="false">Hide labels</a></li>
		<li data-filtertext="form field containers fieldcontain ui-field-contain forms"><a href="../mandinet.com/forms-field-contain/" data-ajax="false">Field containers</a></li>
		<li data-filtertext="forms disabled form elements"><a href="../mandinet.com/forms-disabled/" data-ajax="false">Forms disabled</a></li>
		<li data-filtertext="forms gallery examples overview forms text checkbox radio range button submit reset inputs selects textarea slider flipswitch label form elements"><a href="../mandinet.com/forms-gallery/" data-ajax="false">Forms gallery</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Grids</h3>
	<ul>
		<li data-filtertext="grids columns blocks content formatting rwd responsive css framework"><a href="../mandinet.com/grids/" data-ajax="false">Grids</a></li>
		<li data-filtertext="buttons in grids css framework"><a href="../mandinet.com/grids-buttons/" data-ajax="false">Buttons in grids</a></li>
		<li data-filtertext="custom responsive grids rwd css framework"><a href="../mandinet.com/grids-custom-responsive/" data-ajax="false">Custom responsive grids</a></li>
	</ul>
</li>
<li data-filtertext="blocks content formatting sections heading"><a href="../mandinet.com/body-bar-classes/" data-ajax="false">Grouping and dividing content</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Icons</h3>
	<ul>
		<li data-filtertext="button icons svg disc alt custom icon position"><a href="../mandinet.com/icons/" data-ajax="false">Icons</a></li>
		<li data-filtertext=""><a href="../mandinet.com/icons-grunticon/" data-ajax="false">Grunticon loader</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Listview widget</h3>
	<ul>
		<li data-filtertext="listview widget thumbnails icons nested split button collapsible ul ol"><a href="../mandinet.com/listview/" data-ajax="false">Listview</a></li>
		<li data-filtertext="autocomplete filterable reveal listview filtertextbeforefilter placeholder"><a href="../mandinet.com/listview-autocomplete/" data-ajax="false">Listview autocomplete</a></li>
		<li data-filtertext="autocomplete filterable reveal listview remote data filtertextbeforefilter placeholder"><a href="../mandinet.com/listview-autocomplete-remote/" data-ajax="false">Listview autocomplete remote data</a></li>
		<li data-filtertext="autodividers anchor jump scroll linkbars listview lists ul ol"><a href="../mandinet.com/listview-autodividers-linkbar/" data-ajax="false">Listview autodividers linkbar</a></li>
		<li data-filtertext="listview autodividers selector autodividersselector lists ul ol"><a href="../mandinet.com/listview-autodividers-selector/" data-ajax="false">Listview autodividers selector</a></li>
		<li data-filtertext="listview nested list items"><a href="../mandinet.com/listview-nested-lists/" data-ajax="false">Listview Nested Listviews</a></li>
		<li data-filtertext="listview collapsible list items flat"><a href="../mandinet.com/listview-collapsible-item-flat/" data-ajax="false">Listview collapsible list items (flat)</a></li>
		<li data-filtertext="listview collapsible list indented"><a href="../mandinet.com/listview-collapsible-item-indented/" data-ajax="false">Listview collapsible list items (indented)</a></li>
		<li data-filtertext="grid listview responsive grids responsive listviews lists ul"><a href="../mandinet.com/listview-grid/" data-ajax="false">Listview responsive grid</a></li>
	</ul>
</li>
<li data-filtertext="loader widget page loading navigation overlay spinner"><a href="../mandinet.com/loader/" data-ajax="false">Loader widget</a></li>
<li data-filtertext="navbar widget navmenu toolbars header footer"><a href="../mandinet.com/navbar/" data-ajax="false">Navbar widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Navigation</h3>
	<ul>
		<li data-filtertext="ajax navigation navigate widget history event method"><a href="../mandinet.com/navigation/" data-ajax="false">Navigation</a></li>
		<li data-filtertext="linking pages page links navigation ajax prefetch cache"><a href="../mandinet.com/navigation-linking-pages/" data-ajax="false">Linking pages</a></li>
		<li data-filtertext="php redirect server redirection server-side navigation"><a href="../mandinet.com/navigation-php-redirect/" data-ajax="false">PHP redirect demo</a></li>
		<li data-filtertext="navigation redirection hash query"><a href="../mandinet.com/navigation-hash-processing/" data-ajax="false">Hash processing demo</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Pages</h3>
	<ul>
		<li data-filtertext="pages page widget ajax navigation"><a href="../mandinet.com/pages/" data-ajax="false">Pages</a></li>
		<li data-filtertext="single page"><a href="../mandinet.com/pages-single-page/" data-ajax="false">Single page</a></li>
		<li data-filtertext="multipage multi-page page"><a href="../mandinet.com/pages-multi-page/" data-ajax="false">Multi-page template</a></li>
		<li data-filtertext="dialog page widget modal popup"><a href="../mandinet.com/pages-dialog/" data-ajax="false">Dialog page</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Panel widget</h3>
	<ul>
		<li data-filtertext="panel widget sliding panels reveal push overlay responsive"><a href="../mandinet.com/panel/" data-ajax="false">Panel</a></li>
		<li data-filtertext=""><a href="../mandinet.com/panel-external/" data-ajax="false">External panels</a></li>
		<li data-filtertext="panel "><a href="../mandinet.com/panel-fixed/" data-ajax="false">Fixed panels</a></li>
		<li data-filtertext="panel slide panels sliding panels shadow rwd responsive breakpoint"><a href="../mandinet.com/panel-responsive/" data-ajax="false">Panels responsive</a></li>
		<li data-filtertext="panel custom style custom panel width reveal shadow listview panel styling page background wrapper"><a href="../mandinet.com/panel-styling/" data-ajax="false">Custom panel style</a></li>
		<li data-filtertext="panel open on swipe"><a href="../mandinet.com/panel-swipe-open/" data-ajax="false">Panel open on swipe</a></li>
		<li data-filtertext="panels outside page internal external toolbars"><a href="../mandinet.com/panel-external-internal/" data-ajax="false">Panel external and internal</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Popup widget</h3>
	<ul>
		<li data-filtertext="popup widget popups dialog modal transition tooltip lightbox form overlay screen flip pop fade transition"><a href="../mandinet.com/popup/" data-ajax="false">Popup</a></li>
		<li data-filtertext="popup alignment position"><a href="../mandinet.com/popup-alignment/" data-ajax="false">Popup alignment</a></li>
		<li data-filtertext="popup arrow size popups popover"><a href="../mandinet.com/popup-arrow-size/" data-ajax="false">Popup arrow size</a></li>
		<li data-filtertext="dynamic popups popup images lightbox"><a href="../mandinet.com/popup-dynamic/" data-ajax="false">Dynamic popups</a></li>
		<li data-filtertext="popups with iframes scaling"><a href="../mandinet.com/popup-iframe/" data-ajax="false">Popups with iframes</a></li>
		<li data-filtertext="popup image scaling"><a href="../mandinet.com/popup-image-scaling/" data-ajax="false">Popup image scaling</a></li>
		<li data-filtertext="external popup outside multi-page"><a href="../mandinet.com/popup-outside-multipage" data-ajax="false">Popup outside multi-page</a></li>
	</ul>
</li>
<li data-filtertext="form rangeslider widget dual sliders dual handle sliders range input"><a href="../mandinet.com/rangeslider/" data-ajax="false">Rangeslider widget</a></li>
<li data-filtertext="responsive web design rwd adaptive progressive enhancement PE accessible mobile breakpoints media query media queries"><a href="../mandinet.com/rwd/" data-ajax="false">Responsive Web Design</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Selectmenu widget</h3>
	<ul>
		<li data-filtertext="form selectmenu widget select input custom select menu selects"><a href="../mandinet.com/selectmenu/" data-ajax="false">Selectmenu</a></li>
		<li data-filtertext="form custom select menu selectmenu widget custom menu option optgroup multiple selects"><a href="../mandinet.com/selectmenu-custom/" data-ajax="false">Custom select menu</a></li>
		<li data-filtertext="filterable select filter popup dialog"><a href="../mandinet.com/selectmenu-custom-filter/" data-ajax="false">Custom select menu with filter</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Slider widget</h3>
	<ul>
		<li data-filtertext="form slider widget range input single sliders"><a href="../mandinet.com/slider/" data-ajax="false">Slider</a></li>
		<li data-filtertext="form slider widget flipswitch slider binary select flip toggle switch"><a href="../mandinet.com/slider-flipswitch/" data-ajax="false">Slider flip toggle switch</a></li>
		<li data-filtertext="form slider tooltip handle value input range sliders"><a href="../mandinet.com/slider-tooltip/" data-ajax="false">Slider tooltip</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Table widget</h3>
	<ul>
		<li data-filtertext="table widget reflow column toggle th td responsive tables rwd hide show tabular"><a href="../mandinet.com/table-column-toggle/" data-ajax="false">Table Column Toggle</a></li>
		<li data-filtertext="table column toggle phone comparison demo"><a href="../mandinet.com/table-column-toggle-example/" data-ajax="false">Table Column Toggle demo</a></li>
		<li data-filtertext="responsive tables table column toggle heading groups rwd breakpoint"><a href="../mandinet.com/table-column-toggle-heading-groups/" data-ajax="false">Table Column Toggle heading groups</a></li>
		<li data-filtertext="responsive tables table column toggle hide rwd breakpoint customization options"><a href="../mandinet.com/table-column-toggle-options/" data-ajax="false">Table Column Toggle options</a></li>
		<li data-filtertext="table reflow th td responsive rwd columns tabular"><a href="../mandinet.com/table-reflow/" data-ajax="false">Table Reflow</a></li>
		<li data-filtertext="responsive tables table reflow heading groups rwd breakpoint"><a href="../mandinet.com/table-reflow-heading-groups/" data-ajax="false">Table Reflow heading groups</a></li>
		<li data-filtertext="responsive tables table reflow stripes strokes table style"><a href="../mandinet.com/table-reflow-stripes-strokes/" data-ajax="false">Table Reflow stripes and strokes</a></li>
		<li data-filtertext="responsive tables table reflow stack custom styles"><a href="../mandinet.com/table-reflow-styling/" data-ajax="false">Table Reflow custom styles</a></li>
	</ul>
</li>
<li data-filtertext="ui tabs widget"><a href="../mandinet.com/tabs/" data-ajax="false">Tabs widget</a></li>
<li data-filtertext="form textinput widget text input textarea number date time tel email file color password"><a href="../mandinet.com/textinput/" data-ajax="false">Textinput widget</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Theming</h3>
	<ul>
		<li data-filtertext="default theme swatches theming style css"><a href="../mandinet.com/theme-default/" data-ajax="false">Default theme</a></li>
		<li data-filtertext="classic theme old theme swatches theming style css"><a href="../mandinet.com/theme-classic/" data-ajax="false">Classic theme</a></li>
	</ul>
</li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>Toolbar widget</h3>
	<ul>
		<li data-filtertext="toolbar widget header footer toolbars fixed fullscreen external sections"><a href="../mandinet.com/toolbar/" data-ajax="false">Toolbar</a></li>
		<li data-filtertext="dynamic toolbars dynamically add toolbar header footer"><a href="../mandinet.com/toolbar-dynamic/" data-ajax="false">Dynamic toolbars</a></li>
		<li data-filtertext="external toolbars header footer"><a href="../mandinet.com/toolbar-external/" data-ajax="false">External toolbars</a></li>
		<li data-filtertext="fixed toolbars header footer"><a href="../mandinet.com/toolbar-fixed/" data-ajax="false">Fixed toolbars</a></li>
		<li data-filtertext="fixed fullscreen toolbars header footer"><a href="../mandinet.com/toolbar-fixed-fullscreen/" data-ajax="false">Fullscreen toolbars</a></li>
		<li data-filtertext="external fixed toolbars header footer"><a href="../mandinet.com/toolbar-fixed-external/" data-ajax="false">Fixed external toolbars</a></li>
		<li data-filtertext="external persistent toolbars header footer navbar navmenu"><a href="../mandinet.com/toolbar-fixed-persistent/" data-ajax="false">Persistent toolbars</a></li>
		<li data-filtertext="external ajax optimized toolbars persistent toolbars header footer navbar"><a href="../mandinet.com/toolbar-fixed-persistent-optimized/" data-ajax="false">Ajax optimized toolbars</a></li>
		<li data-filtertext="form in toolbars header footer"><a href="../mandinet.com/toolbar-fixed-forms/" data-ajax="false">Form in toolbar</a></li>
	</ul>
</li>
<li data-filtertext="page transitions animated pages popup navigation flip slide fade pop"><a href="../mandinet.com/transitions/" data-ajax="false">Transitions</a></li>
<li data-role="collapsible" data-collapsed-icon="carat-d" data-expanded-icon="carat-u" data-iconpos="right" data-inset="false">
	<h3>3rd party API demos</h3>
	<ul>
		<li data-filtertext="backbone requirejs navigation router"><a href="../mandinet.com/backbone-requirejs/" data-ajax="false">Backbone RequireJS</a></li>
		<li data-filtertext="google maps geolocation demo"><a href="../mandinet.com/map-geolocation/" data-ajax="false">Google Maps geolocation</a></li>
		<li data-filtertext="google maps hybrid"><a href="../mandinet.com/map-list-toggle/" data-ajax="false">Google Maps list toggle</a></li>
	</ul>
</li>



			</ul>
		</div>
    </div>
	
	
	
</div><!-- /page -->

</body>
</html>
<?php }} ?>
