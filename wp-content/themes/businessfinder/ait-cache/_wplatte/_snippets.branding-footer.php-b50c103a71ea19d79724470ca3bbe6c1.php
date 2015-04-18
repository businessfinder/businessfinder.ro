<?php //netteCache[01]000503a:2:{s:4:"time";s:21:"0.37986000 1427055578";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:113:"/home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/snippets/branding-footer.php";i:2;i:1426999064;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/snippets/branding-footer.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, '06c80m5ikk')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<div id="site-generator" class="wrapper">
	<div id="footer-text">
		<?php echo $themeOptions->general->footer_text ?>

	</div>
<?php if (!is_admin()): wp_nav_menu(array('theme_location' => 'footer-menu', 'fallback_cb' => 'default_footer_menu', 'container' => 'nav', 'container_class' => 'footer-menu', 'menu_class' => 'menu', 'depth' => 1)); endif ?>
</div>