<?php //netteCache[01]000484a:2:{s:4:"time";s:21:"0.02253900 1427055578";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:95:"/home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/single.php";i:2;i:1426999065;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/single.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, '6ptsdwo649')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbd7edc478df_content')) { function _lbd7edc478df_content($_l, $_args) { extract($_args)
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

<div id="content" role="main" class="single-blog-post">
	<div id="primary">

		<article id="post-<?php echo htmlSpecialChars($post->id) ?>" class="<?php echo htmlSpecialChars($post->htmlClasses) ?>">

<?php if ($post->thumbnailSrc != false): ?>
				<a href="<?php echo htmlSpecialChars($post->thumbnailSrc) ?>">
				<div class="entry-thumbnail">
<?php $imgWidth = 980 ?>
					<?php if(is_active_sidebar("post-sidebar")): ?> <?php $imgWidth = 650 ?> <?php endif ?>

					<img src="<?php echo AitImageResizer::resize($post->thumbnailSrc, array('w' => $imgWidth, 'h' => 400)) ?>" class="block" alt="" />
				</div>
				</a>
<?php endif ?>


				<div class="entry-meta post-footer clearfix">
					<a href="<?php echo WpLatteFunctions::getDayLink($post->date) ?>" class="date meta-info" title="<?php echo WpLatteFunctions::getTranslatedDate($post->date) ?>
" rel="bookmark"><?php echo WpLatteFunctions::getTranslatedDate($post->date) ?></a>
					<a class="url fn n ln author meta-info" href="<?php echo htmlSpecialChars($post->author->postsUrl) ?>
" title="View all posts by <?php echo htmlSpecialChars($post->author->name) ?>" rel="author"><?php echo NTemplateHelpers::escapeHtml($post->author->name, ENT_NOQUOTES) ?></a>
<?php if ($post->type == 'post' && $post->categories): ?>
					<span class="categories meta-info"><?php echo $post->categories ?></span>
<?php endif ;if ($post->tags): ?>
					<span class="tags meta-info"><?php echo $post->tags ?></span>
<?php endif ?>
					<span class="comments meta-info"><?php echo NTemplateHelpers::escapeHtml($post->commentsCount, ENT_NOQUOTES) ?></span>
				</div><!-- /.entry-meta -->
				
				<div class="post-content entry-content">
					<?php echo $post->content ?>

				</div>


<?php if (strlen($post->author->bio) !== 0): ?>
				<aside class="author-archive-meta clearfix">
					<div id="author-avatar" class="left"><?php echo $post->author->avatar(60) ?></div>
					<div id="author-description" class="clearfix">
						<div class="author-name"><?php echo NTemplateHelpers::escapeHtml(_x('', 'about author', 'ait'), ENT_NOQUOTES) ?>
 <?php echo NTemplateHelpers::escapeHtml($post->author->name, ENT_NOQUOTES) ?></div>
						<div class="bio"><?php echo NTemplateHelpers::escapeHtml($post->author->bio, ENT_NOQUOTES) ?></div>
					</div>
				</aside>
<?php endif ?>


		</article><!-- /#post-<?php echo NTemplateHelpers::escapeHtmlComment($post->id) ?> -->

<?php NCoreMacros::includeTemplate("comments.php", array('closeable' => $themeOptions->general->closeComments, 'defaultState' => $themeOptions->general->defaultPosition) + $template->getParams(), $_l->templates['6ptsdwo649'])->render() ?>

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
