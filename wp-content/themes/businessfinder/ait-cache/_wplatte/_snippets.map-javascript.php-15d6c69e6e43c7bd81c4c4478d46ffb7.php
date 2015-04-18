<?php //netteCache[01]000502a:2:{s:4:"time";s:21:"0.04999100 1427375744";s:9:"callbacks";a:3:{i:0;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:9:"checkFile";}i:1;s:112:"/home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/snippets/map-javascript.php";i:2;i:1426999064;}i:1;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:20:"NFramework::REVISION";i:2;s:30:"eee17d5 released on 2011-08-13";}i:2;a:3:{i:0;a:2:{i:0;s:6:"NCache";i:1;s:10:"checkConst";}i:1;s:21:"WPLATTE_CACHE_VERSION";i:2;i:4;}}}?><?php

// source file: /home/monkeyen/public_html/businessfinder/wp-content/themes/businessfinder/Templates/snippets/map-javascript.php

?><?php list($_l, $_g) = NCoreMacros::initRuntime($template, '02lv474yr7')
;
// snippets support
if (!empty($control->snippetMode)) {
	return NUIMacros::renderSnippets($control, $_l, get_defined_vars());
}

//
// main template
//
?>
<script type="text/javascript">
var mapDiv,
	map,
	infobox;

/*******************************************
 MARTIN 11.7.2013 MAP STYLING SUPPORT
********************************************/
function aitAddMapStyles(hueVal, lightnessVal, saturationVal, gammaVal) {

	var stylersArray = [];

	if (hueVal) {
		stylersArray.push({
			"hue": hueVal
		});
	}

	 if (lightnessVal) {
		var mapLightness = parseInt(lightnessVal);
		if (mapLightness < -100) {
			mapLightness = -100;
		} else if (mapLightness > 100) {
			mapLightness = 100;
		}
		stylersArray.push({
			"lightness": mapLightness
		});
	}

	if (saturationVal) {
		var mapSaturation = parseInt(saturationVal);
		if (mapSaturation < -100) {
			mapSaturation = -100;
		} else if (mapSaturation > 100) {
			mapSaturation = 100;
		}
		stylersArray.push({
			"saturation": mapSaturation
		});
	}

	if (gammaVal) {
		var mapGamma = parseFloat(gammaVal);
		if (mapGamma < 0.01) {
			mapGamma = 0.01;
		} else if (mapGamma > 9.99) {
			mapGamma = 9.99;
		}
		stylersArray.push({
			"gamma": mapGamma
		});
	}

	return stylersArray;
}
/*******************************************
 // END MAP STYLING SUPPORT
********************************************/

function infoboxResponsiveMove(width, height, offsetX, offsetY) {
	width = (typeof width !== 'undefined') ? width : 600;
	height = (typeof height !== 'undefined') ? height : 600;
	if ((typeof map !== 'undefined') && (typeof mapDiv !== 'undefined')) {
		if (mapDiv.width() <= width) {
			map.panBy(offsetX,0);
		}
		if (mapDiv.height() <= height) {
			map.panBy(0,offsetY);
		}
	}
}

jQuery(document).ready(function($) {

	mapDiv = $("#directory-main-bar");
	clusterEnabled = true;
	mapDiv.height(<?php echo $themeOptions->directoryMap->mapHeight ?>).gmap3({
		map: {
			options: {
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator(parseMapOptions($themeOptions->directoryMap)) as $key => $value): ?>
				<?php if ($iterator->first): echo NTemplateHelpers::escapeJs($key) ?>: <?php echo $value ;else: ?>
,<?php echo NTemplateHelpers::escapeJs($key) ?>: <?php echo $value ;endif ?>

<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ;if ((isset($items)) && (count($items) == 1)): ?>
				,center: [<?php if (isset($items[0]->optionsDir['gpsLatitude'])): echo $items[0]->optionsDir['gpsLatitude'] ;else: ?>
0<?php endif ?>,<?php if (isset($items[0]->optionsDir['gpsLongitude'])): echo $items[0]->optionsDir['gpsLongitude'] ;else: ?>
0<?php endif ?>]
				,zoom: <?php echo $themeOptions->directory->setZoomIfOne ?>

<?php endif ?>

				/*******************************************
				 MARTIN 11.7.2013 MAP STYLING SUPPORT
				********************************************/

<?php if (isset($themeOptions->directoryMap->changeMapStyle) &&
					(!empty($themeOptions->directoryMap->mapStyleHue) || !empty($themeOptions->directoryMap->mapStyleSaturation) ||
					 !empty($themeOptions->directoryMap->mapStyleLightness) || !empty($themeOptions->directoryMap->mapStyleGamma))): ?>
				,styles: [{
					"stylers": aitAddMapStyles(<?php echo NTemplateHelpers::escapeJs($themeOptions->directoryMap->mapStyleHue) ?>
, <?php echo NTemplateHelpers::escapeJs($themeOptions->directoryMap->mapStyleLightness) ?>,
						<?php echo NTemplateHelpers::escapeJs($themeOptions->directoryMap->mapStyleSaturation) ?>
, <?php echo NTemplateHelpers::escapeJs($themeOptions->directoryMap->mapStyleGamma) ?>)
				}]
<?php endif ?>
				/*******************************************
				 // END MAP STYLING SUPPORT
				********************************************/
			}
<?php if (!isset($themeOptions->directoryMap->clusterDisable)): ?>
			,events:{
				zoom_changed: function(map){
					clusterer = mapDiv.gmap3({ get: { name: "clusterer" }});
					if (map.getZoom() >= 19) {
						if (clusterEnabled) {
							clusterer.disable();
							clusterEnabled = false;
						}
					} else {
						if (!clusterEnabled) {
							clusterer.enable();
							clusterEnabled = true;
						}
					}
				}
			}
<?php endif ?>
		}
<?php if (!empty($items)): ?>
		,marker: {
			values: [
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new NSmartCachingIterator($items) as $item): if (isset($item->optionsDir['gpsLatitude'], $item->optionsDir['gpsLongitude']) && !(empty($item->optionsDir['gpsLatitude']) && empty($item->optionsDir['gpsLongitude']))): ?>
					{
						latLng: [<?php echo $item->optionsDir['gpsLatitude'] ?>,<?php echo $item->optionsDir['gpsLongitude'] ?>],
						options: {
							icon: "<?php echo $item->marker ?>",
							shadow: "<?php echo $themeOptions->directoryMap->mapMarkerImageShadow ?>",
						},
						data: 	'<div class="marker-holder">'+
									'<div class="marker-content<?php if (isset($item->thumbnailDir)): ?> with-image"><img src="<?php echo TIMTHUMB_URL . "?" . http_build_query(array('src' => getRealThumbnailUrl($item->thumbnailDir), 'w' => 120, 'h' => 160), "", "&amp;") ?>
" alt=""><?php else: ?>"><?php endif ?>'+
										'<div class="map-item-info">'+
											'<div class="title">'+<?php if (isset($item->post_title)): echo NTemplateHelpers::escapeJs($item->post_title) ?>
+<?php endif ?>'</div>'+
<?php if ($item->rating): ?>
											'<div class="rating">'+
<?php for ($i=1; $i <= $item->rating["max"]; $i++): ?>
													'<div class="star<?php if ($i <= $item->rating["val"]): ?> active<?php endif ?>"></div>'+
<?php endfor ?>
											'</div>'+
<?php endif ?>
											'<div class="address">'+<?php if (isset($item->optionsDir["address"])): echo NTemplateHelpers::escapeJs($template->nl2br($item->optionsDir["address"])) ?>
+<?php endif ?>'</div>'+
											'<a href="<?php echo $item->link ?>" class="more-button">' + <?php echo NTemplateHelpers::escapeJs(__('VIEW MORE', 'ait')) ?> + '</a>'+
											'</div><div class="arrow">'+
										'</div>'+
									'</div>'+
								'</div>'
					}<?php if (!($iterator->last)): ?>,<?php endif ?>

<?php endif ;$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
			],
			options:{
				draggable: false
			},
<?php if (!isset($themeOptions->directoryMap->clusterDisable)): ?>
			cluster:{
				radius: <?php echo ((!empty($themeOptions->directoryMap->clusterRadius)) ? $themeOptions->directoryMap->clusterRadius : 20) ?>,
				// This style will be used for clusters with more than 0 markers
				0: {
					content: "<div class='cluster cluster-1'>CLUSTER_COUNT</div>",
					width: 90,
					height: 80
				},
				// This style will be used for clusters with more than 20 markers
				20: {
					content: "<div class='cluster cluster-2'>CLUSTER_COUNT</div>",
					width: 90,
					height: 80
				},
				// This style will be used for clusters with more than 50 markers
				50: {
					content: "<div class='cluster cluster-3'>CLUSTER_COUNT</div>",
					width: 90,
					height: 80
				},
				events: {
					click: function(cluster) {
						map.panTo(cluster.main.getPosition());
						map.setZoom(map.getZoom() + 2);
					}
				}
			},
<?php endif ?>
			events: {
				click: function(marker, event, context){
					var map = jQuery(this).gmap3("get");
					jQuery("#directory-main-bar").find('.infoBox').remove();
					if(context.data != "disabled"){

						var infoBoxOptions = {
							content: context.data,
							disableAutoPan: false,
							maxWidth: 150,
							pixelOffset: new google.maps.Size(-50, -65),
							boxStyle: {
								width: "290px"
							},
							closeBoxURL: "<?php echo $themeImgUrl ?>/map-icon/pop_up-close.png",
							// enableEventPropagation: true,
							infoBoxClearance: new google.maps.Size(1, 1),
							position: marker.position
						};
						infobox = new InfoBox(infoBoxOptions);

						infobox.open(map,marker);
					}
					map.panTo(marker.getPosition());

					// if map is small
					var iWidth = 260;
					var iHeight = 300;
					if((mapDiv.width() / 2) < iWidth ){
						var offsetX = iWidth - (mapDiv.width() / 2);
						map.panBy(offsetX,0);
					}
					if((mapDiv.height() / 2) < iHeight ){
						var offsetY = -(iHeight - (mapDiv.height() / 2));
						map.panBy(0,offsetY);
					}
				}
			}
		}
		<?php endif ?> 	}<?php if ((isset($items) && (count($items) > 1))): ?>,"autofit"<?php endif ?>);

	map = mapDiv.gmap3("get");
	infobox = new InfoBox({
		pixelOffset: new google.maps.Size(-50, -65),
		closeBoxURL: "<?php echo $themeImgUrl ?>/map-icon/pop_up-close.png",
		boxStyle: {
			width: "290px"
		},
		enableEventPropagation: false
	});

	if (Modernizr.touch){
		<?php if (isset($themeOptions->directoryMap->draggableForTouch)): ?>map.setOptions({ draggable : true });<?php else: ?>
map.setOptions({ draggable : false });<?php endif ?>

<?php if (isset($themeOptions->directoryMap->draggableToggleButton)): ?>
		var draggableClass = <?php if (isset($themeOptions->directoryMap->draggableForTouch)): ?>
'active'<?php else: ?>'inactive'<?php endif ?>;
		var draggableTitle = <?php if (isset($themeOptions->directoryMap->draggableForTouch)): echo NTemplateHelpers::escapeJs(__('Deactivate map', 'ait')) ;else: echo NTemplateHelpers::escapeJs(__('Activate map', 'ait')) ;endif ?>;
		var draggableButton = $('<div class="draggable-toggle-button '+draggableClass+'">'+draggableTitle+'</div>').appendTo(mapDiv);
		draggableButton.click(function () {
			if($(this).hasClass('active')){
				$(this).removeClass('active').addClass('inactive').text(<?php echo NTemplateHelpers::escapeJs(__('Activate map', 'ait')) ?>);
				map.setOptions({ draggable : false });
			} else {
				$(this).removeClass('inactive').addClass('active').text(<?php echo NTemplateHelpers::escapeJs(__('Deactivate map', 'ait')) ?>);
				map.setOptions({ draggable : true });
			}
		});
<?php endif ?>
	}

<?php NCoreMacros::includeTemplate('ajaxfunctions-javascript.php', $template->getParams(), $_l->templates['02lv474yr7'])->render() ?>

});
</script>