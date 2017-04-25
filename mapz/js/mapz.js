/**
 * Plugin Name: Ungerboeck Calendar Integration Plug-in
 * Plugin URI: http://digital.ungerboeck.com/work/all-work
 * Description: This plug-in allows the spaces integration with Ungerboeck software.
 * Version: 1.0.0
 * Author: Marlon Rodrigues
 * Author URI: http://digital.ungerboeck.com/about/our-team
 * License: Ungerboeck Software International - Copyright 2016
 * Purpose: Load necessary integration files
 */
 
var hostName = '/mapz'; //global variable - default value is empty
 
	//load jQuery in case isn't already loaded
if (typeof jQuery == 'undefined') {
	
	function getScript(url, success) {	
		var script = document.createElement('script');
		script.src = url;
		
		var head = document.getElementsByTagName('head')[0],
		done = false;
		
			//attach handlers for all browsers
		script.onload = script.onreadystatechange = function() {
			if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {			
				done = true;
				
					//callback function provided as param
				success();
				
				//script.onload = script.onreadystatechange = null;
				//head.removeChild(script);
			};		
		};
		
		head.appendChild(script);
	};
	
	getScript('https://code.jquery.com/jquery-1.12.1.min.js', function() {
		buildMapStructure();	
	});
	
} else { // jQuery was already loaded
		// Run your jQuery Code
	buildMapStructure();
};

function buildMapStructure(){
	var html = '';
	
		//load js libraries and css files
	html += "<link href='https://fonts.googleapis.com/css?family=Oswald|Lato:400,700,300' rel='stylesheet' type='text/css'>";
	html += '<link rel="stylesheet" type="text/css" href="' + hostName + '/mapz/mapplic/mapplic.css">';
	html += '<link rel="stylesheet" href="' + hostName + '/mapz/js/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />';
	html += '<link rel="stylesheet" type="text/css" href="' + hostName + '/mapz/css/font-awesome.css">';
	html += '<link rel="stylesheet" type="text/css" href="' + hostName + '/mapz/css/style.css">';
	html += '<script type="text/javascript" src="' + hostName + '/mapz/js/x-domainRequest.js"></script>';
	html += '<script type="text/javascript" src="' + hostName + '/mapz/js/hammer.min.js"></script>';
	html += '<script type="text/javascript" src="' + hostName + '/mapz/js/jquery.easing.js"></script>';
	html += '<script type="text/javascript" src="' + hostName + '/mapz/js/jquery.mousewheel.js"></script>';
	html += '<script type="text/javascript" src="' + hostName + '/mapz/js/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>';
	html += '<script type="text/javascript" src="' + hostName + '/mapz/js/smoothscroll.js"></script>';
	html += '<script type="text/javascript" src="' + hostName + '/mapz/mapplic/mapplic.js"></script>';
	html += '<script type="text/javascript" src="' + hostName + '/mapz/js/mapz.builder.js"></script>';
	
		//create map container
		//TODO - VERIFY IF ALL THOSE DIV's ARE NECESSARY
	html += '<section id="map-section" class="inner over">';
	html += '<!-- Map -->';
	html += '<div class="map-container">';
	html += '<div class="window-mockup">';
	html += '<div class="window-bar"></div>';
	html += '</div>';
	html += '<div id="mapplic"></div>';
	html += '</div>';
	html += '</section>';

		//add libraries to html body on the "{{mapz}}" location
	jQuery("body:contains('{{mapz}}')").each(function() {
		var replaced = jQuery(this).html().replace(/{{mapz}}/g, html);
		jQuery(this).html(replaced);
	});
}
