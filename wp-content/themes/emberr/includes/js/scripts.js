var $j = jQuery.noConflict();
$j(document).ready(function() {
	$j('.labelpop').popover();
	$j('.inputpopup').popover();
	$j('.inputpopup').blur( function() {
		$j(this).popover('hide');
	});
	var date_now = new Date();
	var start_date = formatDate(date_now);
	$j('#auction_date_picker').datetimepicker({
        pickTime: false
    }).on('changeDate', function(event) {
    	$j(this).datetimepicker('hide');
    	$j('input[name=autoremovelisting]:nth(0)').attr("checked","checked");
    });
    $j('#map_form').on('hidden', function () {
    	$j('.maximize i').removeClass('icon-hand-up').addClass('icon-hand-down');
    	$j('.min_max').html('Maximize');
	}).on('shown', function() {
		$j('.maximize i').removeClass('icon-hand-down').addClass('icon-hand-up');
		$j('.min_max').html('Minimize');
	});
	function formatDate(d) {
		var dd = d.getDate();
		if ( dd < 10 ) dd = '0' + dd;
		var mm = d.getMonth()+1;
		if ( mm < 10 ) mm = '0' + mm;
		var yy = d.getFullYear() % 100;
		if ( yy < 10 ) yy = '0' + yy;
		return dd+'/'+mm+'/'+yy;
	}


	function initToolbarBootstrapBindings() {
		$j('a[title]').tooltip({container:'body'});
		$j('[data-role=magic-overlay]').each(function () { 
		var overlay = $j(this), target = $j(overlay.data('target')); 
		overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
		});
	};
	function showErrorAlert (reason, detail) {
		var msg='';
		if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
		else {
		console.log("error uploading file", reason, detail);
	}
	$j('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
	'<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
	};
	initToolbarBootstrapBindings();  
	$j('#editor').wysiwyg({ fileUploadError: showErrorAlert} );
	window.prettyPrint && prettyPrint();
// reset search ajax values

	/*var infoBubble2 = new InfoBubble({
		map: map,
		content: '<div class="phoneytext">Some label</div>',
		position: new google.maps.LatLng(-35, 151),
		shadowStyle: 1,
		padding: 0,
		backgroundColor: 'rgb(57,57,57)',
		borderRadius: 4,
		arrowSize: 10,
		borderWidth: 1,
		borderColor: '#2c2c2c',
		disableAutoPan: true,
		hideCloseButton: true,
		arrowPosition: 30,
		backgroundClassName: 'phoney',
		arrowStyle: 2
	});
	infoBubble2.open();*/
});


var mapDiv,
		map,
		infobox;
	jQuery(document).ready(function($) {

		mapDiv = $("#map-canvas");
		mapDiv.gmap3({
			map: {
				options: {
					"draggable": true, 
					"zoom" : 10,
					"mapTypeControl": true,
					"mapTypeId": google.maps.MapTypeId.ROADMAP,
					"scrollwheel": true,
					"panControl": true,
					"rotateControl": false,
					"scaleControl": true,
					"streetViewControl": true,
					"zoomControl": true,
					"zoomControlOptions": {
                        style: google.maps.ZoomControlStyle.LARGE,
                        position: google.maps.ControlPosition.RIGHT_CENTER
                    },
                    "panControlOptions": {
                        position: google.maps.ControlPosition.TOP_RIGHT
                    }
				}
			}
			,marker: {
				values: [
						
						
						{
							latLng: [40.71493168249224,-73.95352363586426],
							options: {
								icon: "http://preview.ait-themes.com/directory/wp1/wp-content/uploads/automotive1.png",
								shadow: "http://preview.ait-themes.com/directory/wp1/wp-content/themes/directory/design/img/map-icon/icon-shadow.png",
							},
							data: '<div class="marker-holder"><div class="marker-content with-image"><img src="http://preview.ait-themes.com/directory/wp1/wp-content/themes/directory/tn.php?src=http%3A%2F%2Fpreview.ait-themes.com%2Fdirectory%2Fwp1%2Fwp-content%2Fuploads%2Fbigstock-Business-man-working-at-a-car-30747773-150x150.jpg&amp;w=120&amp;h=160" alt=""><div class="map-item-info"><div class="title">'+"LLA - Car"+'</div><div class="rating"><div class="star active"></div><div class="star active"></div><div class="star active"></div><div class="star"></div><div class="star"></div></div><div class="address">'+"330 Adams Street Brooklyn, NY 11201, United States<br \/>\n"+'</div><a href="http://preview.ait-themes.com/directory/wp1/item/lll-rent-a-car/" class="more-button">' + "VIEW MORE" + '</a></div><div class="arrow"></div><div class="close"></div></div></div></div>'
						}, 
						{
							latLng: [40.71283357396648,-74.00152444839478],
							options: {
								icon: "http://preview.ait-themes.com/directory/wp1/wp-content/uploads/food1.png",
								shadow: "http://preview.ait-themes.com/directory/wp1/wp-content/themes/directory/design/img/map-icon/icon-shadow.png",
							},
							data: '<div class="marker-holder"><div class="marker-content with-image"><img src="http://preview.ait-themes.com/directory/wp1/wp-content/themes/directory/tn.php?src=http%3A%2F%2Fpreview.ait-themes.com%2Fdirectory%2Fwp1%2Fwp-content%2Fuploads%2Fbigstock-Pepperoni-Pizza-Slice-2471467-150x150.jpg&amp;w=120&amp;h=160" alt=""><div class="map-item-info"><div class="title">'+"Pizza House JARO"+'</div><div class="rating"><div class="star active"></div><div class="star active"></div><div class="star active"></div><div class="star active"></div><div class="star active"></div></div><div class="address">'+"66 Pearl Street, New York, NY 10000, United States"+'</div><a href="http://preview.ait-themes.com/directory/wp1/item/jaro-pizza-2/" class="more-button">' + "VIEW MORE" + '</a></div><div class="arrow"></div><div class="close"></div></div></div></div>'
						}
					
				],
				options:{
					draggable: false
				},
				cluster:{
              		radius: 20,
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
				events: {
					click: function(marker, event, context){
						map.panTo(marker.getPosition());

						infobox.setContent(context.data);
						infobox.open(map,marker);

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
			 		},"autofit");

		map = mapDiv.gmap3("get");
        infobox = new InfoBox({
        	pixelOffset: new google.maps.Size(-50, -65),
        	closeBoxURL: '',
        	enableEventPropagation: true
        });
        mapDiv.delegate('.infoBox .close','click',function () {
        	infobox.close();
        });

        if (Modernizr.touch){
        	map.setOptions({ draggable : false });
	        var draggableClass = 'inactive';
	        var draggableTitle = "Activate map";
	        var draggableButton = $('<div class="draggable-toggle-button '+draggableClass+'">'+draggableTitle+'</div>').appendTo(mapDiv);
	        draggableButton.click(function () {
	        	if($(this).hasClass('active')){
	        		$(this).removeClass('active').addClass('inactive').text("Activate map");
	        		map.setOptions({ draggable : false });
	        	} else {
	        		$(this).removeClass('inactive').addClass('active').text("Deactivate map");
	        		map.setOptions({ draggable : true });
	        	}
	        });
	    }


// loading spinner
var opts = {
  lines: 13, // The number of lines to draw
  length: 9, // The length of each line
  width: 9, // The line thickness
  radius: 27, // The radius of the inner circle
  corners: 1, // Corner roundness (0..1)
  rotate: 0, // The rotation offset
  color: '#FFF', // #rgb or #rrggbb
  speed: 1.8, // Rounds per second
  trail: 81, // Afterglow percentage
  shadow: true, // Whether to render a shadow
  hwaccel: false, // Whether to use hardware acceleration
  className: 'spinner', // The CSS class to assign to the spinner
  zIndex: 2e9, // The z-index (defaults to 2000000000)
  top: 'auto', // Top position relative to parent in px
  left: 'auto' // Left position relative to parent in px
};
var target = document.getElementById('directory-main-bar');
var spinner = new Spinner(opts).spin(target);
var spinnerDiv = mapDiv.find('.spinner');

// set interactive search
var search = $('#directory-search');
if(search.data('interactive') == 'yes'){
	var searchInput = $('#dir-searchinput-text'),
		categoryInput = $('#dir-searchinput-category'),
		locationInput = $('#dir-searchinput-location'),
		geoInput = $('#dir-searchinput-geo'),
		geoRadiusInput = $('#dir-searchinput-geo-radius');
	
	searchInput.typeWatch({
		callback: function() {
			ajaxGetMarkers(true,false);
		},
		wait: 500,
		highlight: false,
		captureLength: 0
	});

	categoryInput.on( "autocompleteselect", function( event, ui ) {
		ajaxGetMarkers(true,false,ui.item.value,false);
	});
	locationInput.on( "autocompleteselect", function( event, ui ) {
		ajaxGetMarkers(true,false,false,ui.item.value);
	});
	categoryInput.on( "autocompleteclose", function( event, ui ) {
		if($('#dir-searchinput-category-id').val() == '0'){
			ajaxGetMarkers(true,false);
		}
	});
	locationInput.on( "autocompleteclose", function( event, ui ) {
		if($('#dir-searchinput-location-id').val() == '0'){
			ajaxGetMarkers(true,false);
		}
	});
}

// ajax geolocation
$('#dir-searchinput-geo').FancyCheckbox().bind("afterChangeIphone",function(event) {
	if($(this).is(':checked')){
		mapDiv.gmap3({
			getgeoloc:{
				callback : function(latLng){
					if (latLng){
						$('#dir-searchinput-geo-lat').val(latLng.lat());
						$('#dir-searchinput-geo-lng').val(latLng.lng());
						if(search.data('interactive') == 'yes'){
							ajaxGetMarkers(true,false);
						}
					}
				}
			}
		});
	} else {
		if(search.data('interactive') == 'yes'){
			ajaxGetMarkers(true,false);
		}
	}
});

$('#dir-searchinput-settings .icon').click(function() {
	$('#dir-search-advanced').toggle();
});

$('#dir-search-advanced-close').click(function() {
	$('#dir-search-advanced').hide();
});

/*$('#dir-search-advanced .value-slider').slider({
	value: $('#dir-searchinput-geo-radius').val(),
	min: 5,
	max: 1000,
	step: 5,
	change: function( event, ui ) {
		if(geoInput.is(':checked')){
			ajaxGetMarkers(true,false);
		}
	},
	slide: function( event, ui ) {
		$( "#dir-searchinput-geo-radius" ).val( ui.value );
	}
});*/

function ajaxGetMarkers(ajax,geoloc,rewriteCategory,rewriteLocation,reset) {

	//map.panTo(new google.maps.LatLng(0,0));
	var topPosition = mapDiv.height() / 2;
	spinnerDiv.css('top',topPosition+'px').fadeIn();

	radius = new Array();

	var category = 0;
	var location = 0;
	var search = '';

	if(ajax){
		if(rewriteCategory){
			category = rewriteCategory;
		} else {
			category = $('#dir-searchinput-category-id').val();
		}
		if(rewriteLocation){
			location = rewriteLocation;
		} else {
			location = $('#dir-searchinput-location-id').val();
		}
		search = $('#dir-searchinput-text').val();

		var ajaxGeo = $('#dir-searchinput-geo').attr("checked");

		if(ajaxGeo && !reset){
			var inputRadius = $('#dir-searchinput-geo-radius').val();
			if(!isNaN(inputRadius)){
				radius.push(parseInt(inputRadius));
			} else {
				$('#dir-searchinput-geo-radius').val($('#dir-searchinput-geo-radius').data('default-value'));
				radius.push(parseInt($('#dir-searchinput-geo-radius').data('default-value')));
			}
			radius.push(parseFloat($('#dir-searchinput-geo-lat').val()));
			radius.push(parseFloat($('#dir-searchinput-geo-lng').val()));
		}
	} else {
		if(reset){
			category = parseInt(mapDiv.data('category'));
			location = parseInt(mapDiv.data('location'));
			search = mapDiv.data('search');
		} else {
			if(geoloc){
				radius.push(parseInt(100));
				radius.push(geoloc.lat());
				radius.push(geoloc.lng());

				category = parseInt(mapDiv.data('category'));
				location = parseInt(mapDiv.data('location'));
				search = mapDiv.data('search');
			}
		}
	}
	// get items from ajax
	$.post(
		// MyAjax defined in functions.php
		MyAjax.ajaxurl,
	    {
	        action : 'get_items',
	        category : category,
	        location : location,
	        search : search,
	        radius : radius
	    },
	    function( response ) {
	    	// show reset ajax button
	    	if((!reset) && (!geoloc)){
	    		$('#directory-search .reset-ajax').show();
	    	}
	    	if((!reset) && (!geoloc)){
	    		generateContent(response);
	    	}
	    	if(ajaxGeo && !reset){
	    		var ajaxGeoObj = new google.maps.LatLng(parseFloat($('#dir-searchinput-geo-lat').val()),parseFloat($('#dir-searchinput-geo-lng').val()));
	    		generateMarkers(response,ajaxGeoObj,true);
	    	} else {
	    		generateMarkers(response,geoloc);
	    	}
	    }
	)
	.fail(function(e) { console.log("AJAX ERROR", e); });
}

function generateMarkers(dataRaw,geoloc,ajaxGeo) {
	
	// clear map
	infobox.close();
	mapDiv.gmap3({ clear: { } });

	map.setZoom(10);
	
	var len = $.map(dataRaw, function(n, i) { return i; }).length;

	var i = 0;
	// prepare data
	var data = new Array();
    for(var key in dataRaw){
    	
    	var rating = '';
		if(dataRaw[key].rating){
			rating += '<div class="rating">';
			for (var j = 1; j <= dataRaw[key].rating['max']; j++) {
				rating += '<div class="star';
				if(j <= dataRaw[key].rating['val']) {
					rating += ' active';
				}
				rating += '"></div>';
			}
			rating += '</div>';
		}

    	var thumbCode = (dataRaw[key].timthumbUrl) ? ' with-image"><img src="'+dataRaw[key].timthumbUrl+'" alt="" />' : '">';
    	data[i] = { 
			latLng: [dataRaw[key].optionsDir['gpsLatitude'],dataRaw[key].optionsDir['gpsLongitude']], 
			options: { 
				icon: dataRaw[key].marker,
				shadow: "http://preview.ait-themes.com/directory/wp1/wp-content/themes/directory/design/img/map-icon/icon-shadow.png",
			},
			data: '<div class="marker-holder"><div class="marker-content'+thumbCode+'<div class="map-item-info"><div class="title">'+dataRaw[key].post_title+'</div>'+rating+'<div class="address">'+dataRaw[key].optionsDir["address"]+'</div><a href="'+dataRaw[key].link+'" class="more-button">VIEW MORE</a></div><div class="arrow"></div><div class="close"></div></div></div></div>'
		};
		i++;
    }

    // show geoloc marker
    if(geoloc){
    	mapDiv.gmap3({
			marker: {
    			latLng: geoloc,
    			options: {
    				animation: google.maps.Animation.DROP,
    				zIndex: 1000,
    				icon: "http://preview.ait-themes.com/directory/wp1/wp-content/themes/directory/design/img/geolocation-pin.png"
    			}
    		}
    	});
	}

	// generate markers in map
	var mapObj = {
		marker: {
			values: data,
			options:{
				draggable: false
			},
			cluster:{
          		radius: 20,
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
			events: {
				click: function(marker, event, context){
					map.panTo(marker.getPosition());

					infobox.setContent(context.data);
					infobox.open(map,marker);

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
	};

	if(geoloc){
		if(ajaxGeo){
			var inputRadius = $('#dir-searchinput-geo-radius').val();
			if(!isNaN(inputRadius)){
				var radiusInM = parseInt($('#dir-searchinput-geo-radius').val()) * 1000;
			} else {
				var radiusInM = parseInt($('#dir-searchinput-geo-radius').data('default-value')) * 1000;
			}
			// autofit by circle
			mapObj.circle = {
				options: {
					center: geoloc,
					radius : radiusInM,
					visible : true,
					fillOpacity : 0.15,
					fillColor : "#2c82be",
					strokeColor : "#2c82be"
				}
			}
		} else {
			var radiusInM = parseInt(100) * 1000;
			// autofit by circle
			mapObj.circle = {
				options: {
					center: geoloc,
					radius : radiusInM,
					visible : false,
					fillOpacity : 0.15,
					fillColor : "#2c82be",
					strokeColor : "#2c82be"
				}
			}
		}
	}

	spinnerDiv.fadeOut();

	mapDiv.gmap3( mapObj, "autofit" );

	if(len == 1 && !geoloc){
		map.setZoom(10);
	}

}

function generateOnlyGeo(lat,lng,radius) {
	var geoloc = new google.maps.LatLng(parseFloat(lat),parseFloat(lng));
	// generate geo pin
	mapDiv.gmap3({
		marker: {
			latLng: geoloc,
			options: {
				animation: google.maps.Animation.DROP,
				zIndex: 1000,
				icon: "http://preview.ait-themes.com/directory/wp1/wp-content/themes/directory/design/img/geolocation-pin.png"
			}
		}
	});
	// generate and autofit by circle
	var mapObj = {};
	var radiusInM = parseInt(radius) * 1000;
	// autofit by circle
	mapObj.circle = {
		options: {
			center: geoloc,
			radius : radiusInM,
			visible : true,
			fillOpacity : 0.15,
			fillColor : "#2c82be",
			strokeColor : "#2c82be"
		}
	}
	mapDiv.gmap3( mapObj, "autofit" );
}

var contentDiv = $('#main #content');
var currContent = contentDiv.html();
var ajaxContent;

function generateContent(data) {

	var length = $.map(data, function(n, i) { return i; }).length;

	contentDiv.find('.ajax-content').remove();
	var title;
	if(length == 0){
		title = $('<header class="entry-header"><h1 class="entry-title"><span>No result found</span></h1></header>');
	} else {
		title = $('<header class="entry-header"><h1 class="entry-title"><span>Search result</span></h1></header>');
	}
	
	var html;
	if(length > 0){
		html = $('<ul class="items"></ul>');
	}
	var limit = 30;
	if(limit > length) {
		limit = length;
	}
	var i = 0;
	for(var key in data){
		var thumbnailHtml;
		if(data[key].timthumbUrlContent){
			var thumbnailHtml = '<div class="thumbnail"><img src="'+data[key].timthumbUrlContent+'" alt="Item thumbnail" /><div class="comment-count">'+data[key].comment_count+'</div></div>';
		} else {
			thumbnailHtml = '';
		}
		var rating = '';
		if(data[key].rating){
			rating += '<span class="rating">';
			for (var i = 1; i <= data[key].rating['max']; i++) {
				rating += '<span class="star';
				if(i <= data[key].rating['val']) {
					rating += ' active';
				}
				rating += '"></span>';
			}
			rating += '</span>';
		}
		var descriptionHtml = '<div class="description"><h3><a href="'+data[key].link+'">'+data[key].post_title+'</a>'+rating+'</h3>'+data[key].excerptDir+'</div>';
		html.append('<li class="item clear">'+thumbnailHtml+descriptionHtml+'</li>');
		if(i <= limit){
			i++;
		} else {
			break;
		}
	};
	ajaxContent = $('<div class="ajax-content"></div>').html(title).append(html);
	contentDiv.find('>').hide();
	contentDiv.append(ajaxContent);
}

// reset search ajax values
$('#directory-search .reset-ajax').click(function () {
	
	// get default values
	ajaxGetMarkers(false,false,false,false,true);

	contentDiv.find('.ajax-content').remove();
	contentDiv.find('>').show();

	$('#dir-searchinput-text').val("");
	// for IE
	$('span.for-dir-searchinput-text label').show();

	$('#dir-searchinput-location').val("");
	$('#dir-searchinput-location-id').val("0");
	// for IE
	$('span.for-dir-searchinput-category label').show();

	$('#dir-searchinput-category').val("");
	$('#dir-searchinput-category-id').val("0");
	// for IE
	$('span.for-dir-searchinput-location label').show();

	$('#dir-searchinput-geo').attr('checked',false);
	$('div.iphone-style[rel=dir-searchinput-geo]').removeClass('on').addClass('off');

	//$('#dir-searchinput-geo-radius').val($('#dir-searchinput-geo-radius').data('default-value'));
	
	// hide close icon
	$(this).hide();
});


	});