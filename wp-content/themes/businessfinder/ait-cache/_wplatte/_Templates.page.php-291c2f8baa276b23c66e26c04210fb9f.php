<?php //netteCache[01]000482a:2:{s:4:"time";s:21:"0.41786100 1427374989";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:93:"/home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/page.php";i:2;i:1426999065;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/page.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'b0nrv3ogfw')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb37dee93e2b_content')) { function _lb37dee93e2b_content($_l, $_args) { extract($_args)
?>

<header class="entry-header">
	<div class="wrapper">

		<h1 class="entry-title">
			<a href="<?php echo htmlSpecialChars($post->permalink) ?>" title="<?php echo htmlSpecialChars(__('Permalink to', 'ait')) ?>
 <?php echo htmlSpecialChars($post->title) ?>" rel="bookmark"><?php echo NTemplateHelpers::escapeHtml($post->title, ENT_NOQUOTES) ?></a>
		</h1>
		<span class="breadcrumbs"><?php echo WpLatteFunctions::breadcrumbs(array()) ?></span>



	

	</div>
</header>

<div id="content" role="main">
<div id="primary">

<article id="post-<?php echo htmlSpecialChars($post->id) ?>" class="<?php echo htmlSpecialChars($post->htmlClasses) ?>">
	
<?php if ($post->thumbnailSrc): ?>
	<a href="<?php echo $post->thumbnailSrc ?>">
<?php if ($fullwidth): ?>
		<div class="entry-thumbnail"><img src="<?php echo AitImageResizer::resize($post->thumbnailSrc, array('w' => 940, 'h' => 250)) ?>" alt="" /></div>
<?php else: ?>
		<div class="entry-thumbnail"><img src="<?php echo AitImageResizer::resize($post->thumbnailSrc, array('w' => 650, 'h' => 250)) ?>" alt="" /></div>
<?php endif ?>
	</a>
<?php endif ?>

	<div class="entry-content">
		<?php echo $post->content ?>

	</div>

</article><!-- /#post-<?php echo NTemplateHelpers::escapeHtmlComment($post->id) ?> -->

<?php NCoreMacros::includeTemplate("comments.php", array('closeable' => $themeOptions->general->closeComments, 'defaultState' => $themeOptions->general->defaultPosition) + $template->getParams(), $_l->templates['b0nrv3ogfw'])->render() ?>

<?php if (isset($themeOptions->advertising->showBox4)): ?>
<div id="advertising-box-4" class="advertising-box wrapper-650">
    <?php echo $themeOptions->advertising->box4Content ?>

</div>
<?php endif ?>

</div> <!-- /#primary -->

<?php if(is_active_sidebar("sidebar-1")): ?>
<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar('sidebar-1') ?>
</div>
<?php endif ?>

</div>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($secOrder) as $sec): if (($sec == 'specialOffers') && isset($post->options('sections')->section1Show)): NCoreMacros::includeTemplate('sections/special-offers.php', array('items' => $specialOffers) + $template->getParams(), $_l->templates['b0nrv3ogfw'])->render() ;endif ;if (($sec == 'bestPlaces') && isset($post->options('sections')->section2Show)): NCoreMacros::includeTemplate('sections/best-places.php', array('items' => $bestPlaces) + $template->getParams(), $_l->templates['b0nrv3ogfw'])->render() ;endif ;if (($sec == 'recentPlaces') && isset($post->options('sections')->section3Show)): NCoreMacros::includeTemplate('sections/recent-places.php', array('items' => $recentPlaces) + $template->getParams(), $_l->templates['b0nrv3ogfw'])->render() ;endif ;if (($sec == 'peopleRatings') && isset($post->options('sections')->section4Show)): NCoreMacros::includeTemplate('sections/people-ratings.php', array('items' => $peopleRatings) + $template->getParams(), $_l->templates['b0nrv3ogfw'])->render() ;endif ;$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>

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
