<?php //netteCache[01]000486a:2:{s:4:"time";s:21:"0.27927500 1426336644";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:97:"/home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/category.php";i:2;i:1425647735;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/category.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, '5yvthytp8f')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb188e5f5123_content')) { function _lb188e5f5123_content($_l, $_args) { extract($_args)
?>

<?php if ($posts): ?>
	
<article id="post-<?php echo htmlSpecialChars($post->id) ?>" class="<?php echo htmlSpecialChars($post->htmlClasses) ?>">

		<header class="entry-header">
			<div class="wrapper">

				<h1 class="entry-title">
					<?php echo NTemplateHelpers::escapeHtml(__('Category Archives:', 'ait'), ENT_NOQUOTES) ?>
 <span><?php echo NTemplateHelpers::escapeHtml($category->title, ENT_NOQUOTES) ?></span>
				</h1>
				<span class="breadcrumbs"><?php echo WpLatteFunctions::breadcrumbs(array()) ?></span>
				
			</div>
		</header>

<?php if (strlen($category->description) !== 0): ?>
		<div class="entry-content">
			<?php echo $category->description ?>

		</div>
<?php endif ?>
		
</article><!-- /#post-<?php echo NTemplateHelpers::escapeHtmlComment($post->id) ?> -->	

<div id="content" role="main">
	<div id="primary">

<?php NCoreMacros::includeTemplate("snippets/content-nav.php", array('location' => 'nav-above') + $template->getParams(), $_l->templates['5yvthytp8f'])->render() ?>

<?php NCoreMacros::includeTemplate("snippets/content-loop.php", array('posts' => $posts) + $template->getParams(), $_l->templates['5yvthytp8f'])->render() ?>

<?php NCoreMacros::includeTemplate("snippets/content-nav.php", array('location' => 'nav-below') + $template->getParams(), $_l->templates['5yvthytp8f'])->render() ?>

<?php if (isset($themeOptions->advertising->showBox4)): ?>
		<div id="advertising-box-4" class="advertising-box wrapper-650">
		    <?php echo $themeOptions->advertising->box4Content ?>

		</div>
<?php endif ?>

<?php else: ?>

<div id="content" role="main">
	<div id="primary">

<?php NCoreMacros::includeTemplate("snippets/nothing-found.php", $template->getParams(), $_l->templates['5yvthytp8f'])->render() ?>

<?php endif ?>

	</div> <!-- /#primary -->
</div> <!-- /#content -->
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
