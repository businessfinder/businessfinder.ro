<?php //netteCache[01]000495a:2:{s:4:"time";s:21:"0.13588600 1427375744";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:105:"/home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/snippets/sorting.php";i:2;i:1426999064;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/snippets/sorting.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, '6y4s6x9a41')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
if (isset($themeOptions->directory->showSortingControl)): ?>

<div class="dir-sorting clearfix">
	
	<!-- <div class="label"><?php echo NTemplateHelpers::escapeHtmlComment(__("Showing", 'ait')) ?>
 <?php echo NTemplateHelpers::escapeHtmlComment($GLOBALS['wp_query']->post_count) ?>
 <?php echo NTemplateHelpers::escapeHtmlComment(__("from", 'ait')) ?> <?php echo NTemplateHelpers::escapeHtmlComment($GLOBALS['wp_query']->found_posts) ?>
 <?php echo NTemplateHelpers::escapeHtmlComment(__("Items", 'ait')) ?></div> -->

	<form>

<?php $params = array() ?>
		<?php echo NTemplateHelpers::escapeHtml(parse_str($_SERVER['QUERY_STRING'],$params), ENT_NOQUOTES) ?>

		
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($params) as $key => $param): if (($key != "pagination") && ($key != "orderby") && ($key != "order")): ?>
		<input type="hidden" id="sorting-<?php echo htmlSpecialChars($key) ?>" name="<?php echo htmlSpecialChars($key) ?>
" value="<?php echo htmlSpecialChars($param) ?>" />
<?php endif ;$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>

		<div class="count">
			<label for="pagination"><?php echo NTemplateHelpers::escapeHtml(__("Count:", 'ait'), ENT_NOQUOTES) ?></label>
			<select name="pagination" id="sorting-pagination">
				<option value="5">5</option>
				<option value="10">10</option>
				<option value="20">20</option>
				<option value="30">30</option>
				<option value="40">40</option>
				<option value="50">50</option>
				<option value="100">100</option>
			</select>
		</div>

		<div class="sortby">
			<label for="orderby"><?php echo NTemplateHelpers::escapeHtml(__("Sort by:", 'ait'), ENT_NOQUOTES) ?></label>
			<select name="orderby" id="sorting-sortby">
				<option value="post_date"><?php echo NTemplateHelpers::escapeHtml(__("Date", 'ait'), ENT_NOQUOTES) ?></option>
				<option value="post_title"><?php echo NTemplateHelpers::escapeHtml(__("Title", 'ait'), ENT_NOQUOTES) ?></option>
<?php if (isset($themeOptions->rating->enableRating)): ?>
				<option value="rating"><?php echo NTemplateHelpers::escapeHtml(__("Rating", 'ait'), ENT_NOQUOTES) ?></option>
<?php endif ?>
				<option value="comment_count"><?php echo NTemplateHelpers::escapeHtml(__("Comment count", 'ait'), ENT_NOQUOTES) ?></option>
				<option value="packages"><?php echo NTemplateHelpers::escapeHtml(__("Packages", 'ait'), ENT_NOQUOTES) ?></option>
			</select>
		</div>

		<div class="sort">
			<label for="order"><?php echo NTemplateHelpers::escapeHtml(__("Sort:", 'ait'), ENT_NOQUOTES) ?></label>
			<select name="order" id="sorting-sort">
				<option value="ASC">&and;</option>
				<option value="DESC">&or;</option>
			</select>
		</div>

	</form>

</div>

<script>
jQuery(document).ready(function($) {
	
	var sorting = $('.dir-sorting'),
		form = sorting.find('form'),
		count = sorting.find('#sorting-pagination'),
		sortby = sorting.find('#sorting-sortby'),
		sort = sorting.find('#sorting-sort');

	var firstPageLink = "<?php echo get_pagenum_link(1,false) ?>";

	var values = { };
		values.count = <?php echo NTemplateHelpers::escapeJs(get_query_var('posts_per_page')) ?>;
		values.sortby = "<?php if (!empty($_GET['orderby'])): echo $_GET['orderby'] ;elseif (isset($themeOptions->directory->defaultOrderby)): echo $themeOptions->directory->defaultOrderby ;else: ?>
date<?php endif ?>";
		values.sort = "<?php if (!empty($_GET['order'])): echo $_GET['order'] ;elseif (isset($themeOptions->directory->defaultOrder)): echo $themeOptions->directory->defaultOrder ;else: ?>
DESC<?php endif ?>";
		
	// if select don't have value
	if (count.find("option[value='"+values.count+"']").length == 0) {
		count.prepend('<option value="'+values.count+'">'+values.count+'</option>');
	}
	count.val(values.count);
	sortby.val(values.sortby);
	sort.val(values.sort);

	count.change(function(event) {
		form.attr("action",firstPageLink);
		form.submit();
	});
	sortby.change(function(event) {
		form.removeAttr('action');
		form.submit();
	});
	sort.change(function(event) {
		form.removeAttr('action');
		form.submit();
	});

});
</script>

<?php endif ?>

