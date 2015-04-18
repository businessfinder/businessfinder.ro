<?php //netteCache[01]000484a:2:{s:4:"time";s:21:"0.86047500 1426448752";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:95:"/home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/author.php";i:2;i:1425647735;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/author.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'so479u1kxy')
;//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb22ef8d90f1_content')) { function _lb22ef8d90f1_content($_l, $_args) { extract($_args)
?>

<?php if ($posts): ?>

<article>

	<header class="entry-header">
		<div class="wrapper">

			<h1 class="entry-title">
				 <?php echo NTemplateHelpers::escapeHtml(__('Author Archives:', 'ait'), ENT_NOQUOTES) ?>

	            <span class="vcard">
	                <a class="url fn n" href="<?php echo htmlSpecialChars($author->postsUrl) ?>
" title="<?php echo htmlSpecialChars($author->name) ?>" rel="me"><?php echo NTemplateHelpers::escapeHtml($author->name, ENT_NOQUOTES) ?></a>
	            </span>
			</h1>
	        <span class="breadcrumbs"><?php echo WpLatteFunctions::breadcrumbs(array()) ?></span>

		</div>
	</header>

</article>

<div id="content" role="main">
	<div id="primary">

<?php NCoreMacros::includeTemplate("snippets/content-nav.php", array('location' => 'nav-above') + $template->getParams(), $_l->templates['so479u1kxy'])->render() ?>

<?php NCoreMacros::includeTemplate("snippets/content-loop.php", array('posts' => $posts) + $template->getParams(), $_l->templates['so479u1kxy'])->render() ?>

<?php NCoreMacros::includeTemplate("snippets/content-nav.php", array('location' => 'nav-below') + $template->getParams(), $_l->templates['so479u1kxy'])->render() ?>

<?php if (strlen($author->bio) !== 0): ?>
		<div class="author-archive-meta clearfix">
			<div id="author-avatar" class="left"><?php echo $author->avatar(60) ?></div>
			<div id="author-description" class="clearfix">
				<div class="author-name"><?php echo NTemplateHelpers::escapeHtml(_x('About', 'about author', 'ait'), ENT_NOQUOTES) ?>
 <?php echo NTemplateHelpers::escapeHtml($author->name, ENT_NOQUOTES) ?></div>
				<div class="bio"><?php echo NTemplateHelpers::escapeHtml($author->bio, ENT_NOQUOTES) ?></div>
			</div>
		</div>
<?php endif ?>

<?php if (isset($themeOptions->advertising->showBox4)): ?>
		<div id="advertising-box-4" class="advertising-box wrapper-650">
		    <?php echo $themeOptions->advertising->box4Content ?>

		</div>
<?php endif ?>

<?php else: ?>
<div id="content" role="main">
	<div id="primary">
<?php NCoreMacros::includeTemplate("snippets/nothing-found.php", $template->getParams(), $_l->templates['so479u1kxy'])->render() ;endif ?>

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
