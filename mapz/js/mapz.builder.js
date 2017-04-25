/**
 * Plugin Name: Ungerboeck Calendar Integration Plug-in
 * Plugin URI: http://digital.ungerboeck.com/work/all-work
 * Description: This plug-in allows the calendar integration with Ungerboeck software.
 * Version: 1.0.0
 * Author: Marlon Rodrigues
 * Author URI: http://digital.ungerboeck.com/about/our-team
 * License: Ungerboeck Software International - Copyright 2016
 */
 
jQuery(document).ready(function(){  
		//for IE and cross domain calls
	jQuery.support.cors = true;

	var webServicePath = "http://digitaldemo.ungerboeck.com/Digital_Services/MAP/Spaces.aspx";
	var bookingURL = 'http://digitaldemo-web.ungerboeck.com/va/va_p1_search.aspx?oc=10&cc=DBSPACE&mode=multidate'; 
	var defaultLevelID = ''; //holds the default level to be displayed - comes from XML file
	var defaultMapZoom = ''; //holds the defaul zoom level of the map - comes from XML file

		//start building map by getting all available categories
	getMapCategories();
	
		//get all available categories
    function getMapCategories() { 	
        jQuery.ajax({
            url: webServicePath,
			crossDomain: true,
            type: 'GET',
            dataType: 'json',
            data: {
                FunctionName: 'getAllCategories'
            },
            success: function (data) { 
				buildMap(data);
            }
        });
    }
		
		//build the map 
	function buildMap(wscategories) {	
			//holds map configurations
		var mapConfigs = [];	
			//map array/object - contains all the map info, including categories, levels and spaces
		var mapArray = [];
		var mapObject = {};
			//levels array - contains all the levels info, including spaces
		var levels = [];
			//categories array - contains all the categories info
		var categories = [];	

			//get XML config file contents
		jQuery.get(hostName + '/mapz/mapz.xml?version=' + Math.random(), function(d){
				
			jQuery(d).find('map').each(function(){
				var currMap = jQuery(this);
				
					//pull info only for the selected map
				if(currMap.find('id').first().text() == mapzID) {
						//get booking info
					//bookingURL = currMap.find('bookingURL').text();

						//get the map info
					mapObject.mapwidth = currMap.find('mapwidth').text();
					mapObject.mapheight = currMap.find('mapheight').text();
					
					mapConfigs['showcoords'] = currMap.find('showcoords').text().toLowerCase();
					mapConfigs['minimap'] = currMap.find('minimap').text().toLowerCase();
					mapConfigs['sidebar'] = currMap.find('sidebar').text().toLowerCase();
					mapConfigs['zoombuttons'] = currMap.find('zoombuttons').text().toLowerCase();
					mapConfigs['maxscale'] = currMap.find('maxscale').text();
					
					defaultMapZoom = currMap.find('mapzoom').text();
						
						//loop through categories and create categories object
					for (var i = 0; i < wscategories.length; i++) {
						var categoriesInfo = {};		
						categoriesInfo.id = wscategories[i]['id'];
						categoriesInfo.title = wscategories[i]['title'];
						
						//if color is valid hex uses it, otherwise assings a random hex
						var validColor  = /(^#[0-9A-F]{6}$)|(^#[0-9A-F]{3}$)/i.test(wscategories[i]['color']); 
						//categoriesInfo.color = (validColor) ? wscategories[i]['color'] : '#'+(Math.random()*0xFFFFFF<<0).toString(16);
						categoriesInfo.color = (validColor) ? wscategories[i]['color'] : randomColor();
						//categoriesInfo.show = wscategories[i]['show'];
						categoriesInfo.show = "false";
						
						categories.push(categoriesInfo);
					}
					
					mapObject.categories = categories;
					
					var levelsCount = currMap.find('level').length; //total number of levels in the xml
					var currLevel = 0; //number of iterations -> once this is equal to levelsCount the mapObject is ready
					
						//loop through available levels on XML
					currMap.find('level').each(function(){
						var level = jQuery(this); 
						var lastItem = false;
									
							//set the default level
						if(level.find('default').text().toLowerCase() == 'yes') {
							defaultLevelID = level.find('id').text();
						}
					
						var levelInfo = {};	
						levelInfo.id = level.find('id').text();
						levelInfo.name = level.find('name').text();
						levelInfo.title = level.find('title').text();
						levelInfo.map = level.find('mapimage').text();
						levelInfo.minimap = level.find('minimapimage').text();
						levelInfo.locations = []; //each level location is an array
						
							//uses the when function in combination with ajax to allow the map to be built only when all spaces have been pulled from the web service
						jQuery.when(
							jQuery.ajax({
								url: webServicePath,
								crossDomain: true,
								type: 'GET',
								dataType: 'json',
								data: {
									FunctionName: 'getAllSpaces',
									SpaceLevel: level.find('name').text()
								},
								success: function (data) { 			
									var wsspaces = data;
									
									for (var i = 0; i < wsspaces.length; i++) {
										var spaceInfo = {};
										spaceInfo.id = wsspaces[i]['id'];
										spaceInfo.title = wsspaces[i]['title'];
										spaceInfo.description = wsspaces[i]['description'];
										spaceInfo.about = wsspaces[i]['about'];
										spaceInfo.category = wsspaces[i]['category'];
										spaceInfo.link = wsspaces[i]['link'];
										spaceInfo.x = wsspaces[i]['x'];
										spaceInfo.y = wsspaces[i]['y'];
										//spaceInfo.zoom = wsspaces[i]['z'];
										spaceInfo.zoom = defaultMapZoom;
											
										levelInfo.locations.push(spaceInfo);
									}

									levels.push(levelInfo);
								}
							})
						).done(function() {
							currLevel++;
							//console.log(currLevel);
								
								//validate the # of iterations against the # of levels - used to prevent cases when the last iteration finishes before the first iteration
							if(currLevel >= levelsCount) {					
								mapObject.levels = levels;
											
									//convert object to JSON
								var jsonMap = JSON.stringify(mapObject);	
											
								createContent(jsonMap, mapConfigs);
							}
						});						
					});
				}
			});
		});
	}
	
	
	function createContent(jsonMap, mapConfigs){
		//console.log(jsonMap);
		
			//set default values for map options
		var showcoords = false;
		var minimap = false;
		var sidebar = false;
		var zoombuttons = false;
		var maxscale = 2; 
		
		if(typeof mapConfigs['showcoords'] != 'undefined' && mapConfigs['showcoords'] == 'yes') {
			showcoords = true;
		} 
		if(typeof mapConfigs['minimap'] != 'undefined' && mapConfigs['minimap'] == 'yes') {
			minimap = true;
		} 
		if(typeof mapConfigs['sidebar'] != 'undefined' && mapConfigs['sidebar'] == 'yes') {
			sidebar = true;
		} 
		if(typeof mapConfigs['zoombuttons'] != 'undefined' && mapConfigs['zoombuttons'] == 'yes') {
			zoombuttons = true;
		} 
		if(typeof mapConfigs['maxscale'] != 'undefined') {
			maxscale = mapConfigs['maxscale'];
		} 
		
			//create map
		jQuery('#mapplic').mapplic({
			source: jQuery.parseJSON(jsonMap),
			height: 400,
			animate: false,
			mapfill: true,
			sidebar: sidebar,
			minimap: minimap,
			deeplinking: false,
			fullscreen: true,
			hovertip: true,
			developer: showcoords,
			zoombuttons: zoombuttons,
			maxscale: maxscale
		});

		jQuery('.usage').click(function(e) {
			e.preventDefault();
				
			jQuery('.editor-window').slideToggle(200);
		});

		jQuery('.editor-window .window-mockup').click(function() {
			jQuery('.editor-window').slideUp(200);
		});
		
			//override the pin click 
		jQuery('.mapplic-pin').on('click touchend', function(e){
			var tooltipLeft = this.style.left;
			var tooltipTop = this.style.top;
			
			closeInfoWindow();	
			buildLocationMedia(jQuery(this).attr('data-location'), tooltipLeft, tooltipTop);
		});
		
			//override the category list click 
		jQuery('.mapplic-list-location.mapplic-list-shown').on('click touchend', function(){
			closeInfoWindow();			
			buildLocationMedia(jQuery(this).attr('data-location'), '0', '0');
		});
		
			//hover for map pin 
		jQuery('.mapplic-pin').hover(
			function(){
				jQuery('.mapplic-tooltip.mapplic-hovertip').css('cssText', 'display: block !important');
			}, function() {
				jQuery('.mapplic-tooltip.mapplic-hovertip').css('cssText', 'display: none !important');
			}
		);
		
			//select the default level
		if(defaultLevelID != '') {
			jQuery('.mapplic-levels-select').val(defaultLevelID);
			jQuery('.mapplic-levels-select').trigger('change');
		}	

			//hide categories with count 0
		jQuery('.mapplic-list-container .mapplic-list-category').each(function(){
			if(jQuery(this).children('a').children('span').text() == '0') {
				jQuery(this).hide();
			}
		});		
	}
	
	function buildLocationMedia(location, tooltipLeft, tooltipTop){		
			//get css from standar popup if values are "empty"
		if(tooltipLeft == '0') {
			tooltipLeft = jQuery('.mapplic-map .mapplic-tooltip').first().css('left');
		}
		
		if(tooltipTop == '0') {
			tooltipTop = jQuery('.mapplic-map .mapplic-tooltip').first().css('top');
		}
		
			//default values
		var tooltipMarginTop = '-66px';
		var tooltipMarginLeft = '-16px';
		
			//build the custom popup box
		var htmlString = '';
		htmlString += '<div class="mapz-tooltip ' + location + '" style="left:' + tooltipLeft + '; top:' + tooltipTop + '; margin-top:' + tooltipMarginTop + '; margin-left:' + tooltipMarginLeft + ';">';
		//htmlString += '<div class="space-close-window">X</div>';
		htmlString += '<div class="containerPointer"></div>';
		htmlString += '<div class="docImages"></div>';
		htmlString += '<div class="spaceContainer">';
		htmlString += '<div class="spaceInfo"></div>';
		htmlString += '<div class="docPDFs"><h4>Docs & Files</h4><ul></ul></div>';	
		htmlString += '</div>';
		htmlString += '<div class="spaceButtonsContainer"></div>';
		htmlString += '</div>';
		
		jQuery('.map-container #mapplic .mapplic-map').append(htmlString);
		
			//get values froms standard popup
		var spaceTitle = jQuery('.mapplic-tooltip-title:first').text();
		var spaceDescription = jQuery('.mapplic-tooltip-description').text();
		var spaceLink = '';
		
		if(jQuery('.mapplic-tooltip-link').css('display') != 'none') {
			spaceLink = jQuery('.mapplic-tooltip-link').attr('href');
		}
			
		jQuery('.mapz-tooltip .spaceInfo').append('<h4>' + spaceTitle + '</h4>');
		jQuery('.mapz-tooltip .spaceInfo').append('<div class="spaceContent">' + spaceDescription + '</div>');
		jQuery('.mapz-tooltip .spaceInfo').append('<image src="' + hostName + '/mapz/images/ajax-loader.gif" class="mapz-spinner">');
		
			//get docs 
		getSpaceDocs(location);
		
			//add book button
		jQuery('.mapz-tooltip .spaceButtonsContainer').append('<div class="spaceButtons bookButton"><a href="' + bookingURL + '&space=' + location + '" target="_blank">Book</a></div>');	
		
			//add link button
		if(spaceLink != '') {
			jQuery('.mapz-tooltip .spaceButtonsContainer').append('<div class="spaceButtons"><a href="' + spaceLink + '" target="_blank">More</a></div>');	
		}
		
			//add close button
		jQuery('.mapz-tooltip .spaceButtonsContainer').append('<div class="spaceButtons closeButton"><a href="#">Close</a></div>');		
			
			//for images
		jQuery('.fancybox').fancybox({
			openEffect	: 'none',
			closeEffect	: 'none',
			type: 'image'
		});
			
			//add close button
		jQuery('.mapz-tooltip .space-close-window, .mapz-tooltip .spaceButtonsContainer .closeButton').click(function(e){
			e.preventDefault();
			closeInfoWindow();
		});
	}
	
		//get all space documents
    function getSpaceDocs(filterSpace) { 		
        jQuery.ajax({
            url: webServicePath,
			crossDomain: true,
            type: 'GET',
            dataType: 'json',
            data: {
                FunctionName: 'getSpaceDocs',
				SpaceID: filterSpace
            },
            success: function (data) { 
				buildDocs(data);
            }
        });
    }
		
	function buildDocs(docs) {
		var imgCount = 0; 
		
		if(docs.length > 0) { 
			for(var i = 0; i < docs.length; i++){
					//check the file type
				var fileType = ((docs[i]['file_name']).substr(((docs[i]['file_name']).lastIndexOf('.') +1))).toLowerCase();
				
					//build image 
				if (fileType == 'jpg' || fileType == 'png' || fileType == 'gif' || fileType == 'jpeg' || fileType == 'bmp') {
					imgCount++;
					var image = new Image();
					var imgSource = webServicePath + "?FunctionName=getDocument&DocID=" + docs[i]['id'] + "&DocClass=" + docs[i]['docClass'] + "&DocSeqNumber=" + docs[i]['docSeqNumber'] + "&DocType=" + fileType;
					image.src = imgSource;
					
					jQuery('.mapz-tooltip .docImages').append('<a class="fancybox set' + i + '" rel="' + location + '" href="' + imgSource + '" title="' + docs[i]['description'] + '"><i class="fa fa-angle-right"></i></a>');
					jQuery('.mapz-tooltip .fancybox.set' + i).append(image);
					
					if(imgCount > 1) { //determines how many images should be displayed in the popup
						jQuery('.mapz-tooltip .docImages .fancybox.set' + i).addClass('imageNoShow');
					}
				} else { //build all other types
					var htmlDownload = '';
						//allow pdf documents to be opened in the browser
					htmlDownload = '<li><a class="fancyboxFrame set' + i + '" href="" ';
					htmlDownload += ' doc-id="' + docs[i]['id'] + '"';
					htmlDownload += ' doc-class="' + docs[i]['docClass'] + '"';
					htmlDownload += ' doc-seq="' + docs[i]['docSeqNumber'] + '"';
					htmlDownload += ' doc-type="' + fileType + '"';
					htmlDownload += '>' + docs[i]['description'] + '</a></li>';
					jQuery('.mapz-tooltip .docPDFs ul').append(htmlDownload);
				}
			}	
		} else {
			jQuery('.mapz-tooltip .docPDFs').hide();
		}
		
			//make sure docPDFs div is hidden if only images are available
		if(jQuery('.mapz-tooltip .docPDFs ul').children().length <= 0) {
			jQuery('.mapz-tooltip .docPDFs').hide();
		}
		
		jQuery('.mapz-spinner').hide();
		
			//for list of documents - either download it or display it in a new window based on how the browser handles the different content type
		jQuery('.mapz-tooltip ul li a.fancyboxFrame').click(function(e){
			e.preventDefault();
			var docID = jQuery(this).attr('doc-id');
			var docClass = jQuery(this).attr('doc-class');
			var docSeq = jQuery(this).attr('doc-seq');
			var docType = jQuery(this).attr('doc-type');
			
			var docURL = webServicePath + "?FunctionName=getDocument&DocID=" + docID + "&DocClass=" + docClass + "&DocSeqNumber=" + docSeq + "&DocType=" + docType;
			window.open(docURL, '_blank');
		});
	}
		
	function closeInfoWindow() {
			//destroy the mapztooltip object
		jQuery('.mapz-tooltip').fadeOut();
		jQuery('.mapz-tooltip').remove();
	}
	
	function randomColor(){
		r = Math.floor(Math.random() * (100))+100;
		g = Math.floor(Math.random() * (100))+100;
		b = Math.floor(Math.random() * (100))+100;
		return('#'+componentToHex(r)+''+componentToHex(g)+''+componentToHex(b)+'');
	}
	
	function componentToHex(c) {
		var hex = c.toString(16);
		return hex.length == 1 ? "0" + hex : hex;
	}
});