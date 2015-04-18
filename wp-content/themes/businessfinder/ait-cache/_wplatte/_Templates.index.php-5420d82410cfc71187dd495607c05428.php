<?php //netteCache[01]000483a:2:{s:4:"time";s:21:"0.10880600 1425647747";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:94:"/home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/index.php";i:2;i:1425647735;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/index.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'tgjdtv7pab')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb1c876e9354_content')) { function _lb1c876e9354_content($_l, $_args) { extract($_args)
?>

<?php if ($posts): ?>
	
<?php if ($type): ?>

	<header class="entry-header search-header">
		<div class="wrapper">
			<h1 class="entry-title"><span><?php echo NTemplateHelpers::escapeHtml(__('Search Results for:', 'ait'), ENT_NOQUOTES) ?>
 <strong><?php echo $site->searchQuery ?></strong></span></h1>
			<div class="clearfix">
				<div class="breadcrumbs left clearfix"><?php echo WpLatteFunctions::breadcrumbs(array()) ?></div>
<?php if ($type): ?>
				<div class="right">
<?php NCoreMacros::includeTemplate('snippets/sorting.php', $template->getParams(), $_l->templates['tgjdtv7pab'])->render() ?>
				</div>
<?php endif ?>
			</div>
		</div>
	</header>

	<div id="content" class="onecolumn" role="main">
		<div id="primary">
<?php NCoreMacros::includeTemplate("snippets/content-loop-dir-search.php", array('posts' => $posts) + $template->getParams(), $_l->templates['tgjdtv7pab'])->render() ?>

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
		</div> <!-- /#primary -->
<?php else: ?>

<?php if (!$isIndexPage): ?>

		<header class="entry-header">
			<div class="wrapper">

				<h1 class="entry-title">
					<a href="<?php echo htmlSpecialChars($post->permalink) ?>" title="<?php echo htmlSpecialChars(__('Permalink to', 'ait')) ?>
 <?php echo htmlSpecialChars($post->title) ?>" rel="bookmark"><?php echo NTemplateHelpers::escapeHtml($post->title, ENT_NOQUOTES) ?></a>
				</h1>
				<span class="breadcrumbs"><?php echo WpLatteFunctions::breadcrumbs(array()) ?></span>
				
			</div>
		</header>
			
					
<?php endif ?>

		<div id="content" role="main">
			<div id="primary">

				<article <?php if (!$isIndexPage): ?>id="post-<?php echo htmlSpecialChars($post->id) ?>
" class="<?php echo htmlSpecialChars($post->htmlClasses) ?>"<?php else: ?>id="post-loop"<?php endif ?>>
					
<?php if (!$isIndexPage): ?>
					<div class="entry-content">
						<?php echo $post->content ?>

					</div>
<?php endif ?>

<?php NCoreMacros::includeTemplate("snippets/content-nav.php", array('location' => 'nav-above') + $template->getParams(), $_l->templates['tgjdtv7pab'])->render() ?>

<?php NCoreMacros::includeTemplate("snippets/content-loop.php", array('posts' => $posts) + $template->getParams(), $_l->templates['tgjdtv7pab'])->render() ?>

<?php NCoreMacros::includeTemplate("snippets/content-nav.php", array('location' => 'nav-below') + $template->getParams(), $_l->templates['tgjdtv7pab'])->render() ?>

				</article><!-- /#post -->	
				
<?php if (isset($themeOptions->advertising->showBox4)): ?>
				<div id="advertising-box-4" class="advertising-box wrapper-650">
				    <?php echo $themeOptions->advertising->box4Content ?>

				</div>
<?php endif ?>

			</div> <!-- /#primary -->

<?php endif ?>

<?php else: ?>
	<div id="content" role="main">
		<div id="primary">
<?php NCoreMacros::includeTemplate("snippets/nothing-found.php", $template->getParams(), $_l->templates['tgjdtv7pab'])->render() ?>
		</div> <!-- /#primary -->

<?php endif ?>

<?php if (!$type): if(is_active_sidebar("sidebar-1")): ?>
<div id="secondary" class="widget-area" role="complementary">
<?php dynamic_sidebar('sidebar-1') ?>
</div>
<?php endif; endif ?>

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
