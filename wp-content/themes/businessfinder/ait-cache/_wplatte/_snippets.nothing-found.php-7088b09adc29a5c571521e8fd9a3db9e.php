<?php //netteCache[01]000501a:2:{s:4:"time";s:21:"0.15713500 1427375744";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:111:"/home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/snippets/nothing-found.php";i:2;i:1426999064;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/snippets/nothing-found.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, 'xhe79iirby')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<article id="post-0" class="post no-results not-found">
	<header class="entry-header">
		<h1 class="entry-title"><span><?php echo NTemplateHelpers::escapeHtml(__('Nothing Found', 'ait'), ENT_NOQUOTES) ?></span></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
<?php if (isset($type)): ?>
			<p><?php echo NTemplateHelpers::escapeHtml(__('Apologies, but no results were found for the request.', 'ait'), ENT_NOQUOTES) ?></p>
<?php else: ?>
			<p><?php echo NTemplateHelpers::escapeHtml(__('Apologies, but no results were found for the request. Perhaps searching will help find a related post.', 'ait'), ENT_NOQUOTES) ?></p>
			<div class="clearfix">
<?php NCoreMacros::includeTemplate("search-form.php", $template->getParams(), $_l->templates['xhe79iirby'])->render() ?>
			</div>
<?php endif ?>
	</div><!-- .entry-content -->
</article><!-- #post-0 -->