<?php //netteCache[01]000484a:2:{s:4:"time";s:21:"0.96564400 1427375743";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:95:"/home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/search.php";i:2;i:1426999065;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/search.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'd4o52q8qzo')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb58428c08e4_content')) { function _lb58428c08e4_content($_l, $_args) { extract($_args)
?>

<header class="entry-header search-header">
	<div class="wrapper">
		<h1 class="entry-title"><span><?php echo NTemplateHelpers::escapeHtml(__('Search Results for:', 'ait'), ENT_NOQUOTES) ?>
 <strong><?php echo $site->searchQuery ?></strong></span></h1>
		<div class="clearfix">
			<div class="breadcrumbs left clearfix"><?php echo WpLatteFunctions::breadcrumbs(array()) ?></div>
<?php if ($type): ?>
			<div class="right">
<?php NCoreMacros::includeTemplate('snippets/sorting.php', $template->getParams(), $_l->templates['d4o52q8qzo'])->render() ?>
			</div>
<?php endif ?>
		</div>
	</div>
</header>

<div id="content" role="main">
	<div id="primary">

<?php if ($posts): ?>
			

<?php if ($type): ?>
				
<?php NCoreMacros::includeTemplate("snippets/content-loop-dir-search.php", array('posts' => $posts) + $template->getParams(), $_l->templates['d4o52q8qzo'])->render() ?>

<?php else: ?>

<?php NCoreMacros::includeTemplate("snippets/content-loop.php", array('posts' => $posts) + $template->getParams(), $_l->templates['d4o52q8qzo'])->render() ?>

<?php endif ?>

<?php if($GLOBALS["wp_query"]->max_num_pages > 1): ?>
			<nav class="paginate-links">
				<?php echo WpLatteFunctions::paginateLinks(true) ?>

			</nav>
<?php endif ?>

<?php if (isset($themeOptions->advertising->showBox4)): ?>
			<div id="advertising-box-4" class="advertising-box wrapper-650">
			    <?php echo $themeOptions->advertising->box4Content ?>

			</div>
<?php endif ?>

<?php else: ?>

<?php NCoreMacros::includeTemplate("snippets/nothing-found.php", $template->getParams(), $_l->templates['d4o52q8qzo'])->render() ?>

<?php endif ?>

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
