<?php //netteCache[01]000481a:2:{s:4:"time";s:21:"0.46204200 1428946875";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:92:"/home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/404.php";i:2;i:1426999064;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/404.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'f62uikvjs2')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbd39357ed98_content')) { function _lbd39357ed98_content($_l, $_args) { extract($_args)
?>

	<div id="content" role="main">
		<div id="primary">
<?php NCoreMacros::includeTemplate("snippets/nothing-found.php", $template->getParams(), $_l->templates['f62uikvjs2'])->render() ?>
		</div> <!-- /#primary -->
	</div>

<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = true; unset($_extends, $template->_extends);


if ($_l->extends) {
	ob_start();
} elseif (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
$_l->extends = $layout ?>

<?php 
// template extending support
if ($_l->extends) {
	ob_end_clean();
	NCoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render();
}
