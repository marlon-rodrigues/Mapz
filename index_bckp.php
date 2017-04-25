<?php 

/*include 'phpJson.php';

$j = new superMapplic();
var dump($j->getMapplic());*/

$jsonArray = array(
					        'mapwidth' => "13320",
					        'mapheight' => "3600",
					        'categories' => array(
								array(
									'id' => "fields",
									'title' => "Fields",
									'color' => "#18824B",
									'show' => "false"),
									
								array(
									'id' => "picnics",
									'title' => "Picnic Areas",
									'color' => "#87A43D",
									'show' => "false"),
									
								array(
									'id' => "shelters",
									'title' => "Shelters",
									'color' => "#18824B",
									'show' => "false"),
									
								array(
									'id' => "streets",
									'title' => "Streets",
									'color' => "#87A43D",
									'show' => "false"),
								
								
					        ),
					        'levels' => array(array(
						        	"id" => "lower",
									"name" => "0",
									"title" => "Park",
									"map" => "mapz/images/maps/towergrove.svg",
									"minimap" => "mapz/images/maps/towergrove.svg",
									"locations" => array(
										array( 
											"id" => "39th Street",
											"title" => "39th Street",
											"about" => "39th Street",
											"description" => "<p>39th Street</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.6930",
											"y" => "0.1797",
											"zoom" => "3"),
										array( 
											"id" => "Alfred Avenue (north side)",
											"title" => "Alfred Avenue (north side)",
											"about" => "Alfred Avenue (north side)",
											"description" => "<p>Alfred Avenue (north side)</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.3269",
											"y" => "0.1797",
											"zoom" => "3"),
										array( 
											"id" => "Alfred Avenue (south side)",
											"title" => "Alfred Avenue (south side)",
											"about" => "Alfred Avenue (south side)",
											"description" => "<p>Alfred Avenue (south side)</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.2784",
											"y" => "0.8508",
											"zoom" => "3"),
										array( 
											"id" => "Arsenal Street",
											"title" => "Arsenal Street",
											"about" => "Arsenal Street",
											"description" => "<p>Arsenal Street</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.4963",
											"y" => "0.8025",
											"zoom" => "3"),
										array( 
											"id" => "Bent Avenue",
											"title" => "Bent Avenue",
											"about" => "Bent Avenue",
											"description" => "<p>Bent Avenue</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.4236",
											"y" => "0.8508",
											"zoom" => "3"),
										array( 
											"id" => "Gustine Avenue",
											"title" => "Gustine Avenue",
											"about" => "Gustine Avenue",
											"description" => "<p>Gustine Avenue</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.6980",
											"y" => "0.8508",
											"zoom" => "3"),
										array( 
											"id" => "Gurney Avenue",
											"title" => "Gurney Avenue",
											"about" => "Gurney Avenue",
											"description" => "<p>Gurney Avenue</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.0925",
											"y" => "0.8508",
											"zoom" => "3"),
										array( 
											"id" => "Gurney Court",
											"title" => "Gurney Court",
											"about" => "Gurney Court",
											"description" => "<p>Gurney Court</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.2315",
											"y" => "0.1797",
											"zoom" => "3"),
										array( 
											"id" => "Heger Place",
											"title" => "Heger Place",
											"about" => "Heger Place",
											"description" => "<p>BLANK</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.2573",
											"y" => "0.1797",
											"zoom" => "3"),
										array( 
											"id" => "kingshighway",
											"title" => "Kingshighway Boulevard",
											"about" => "Kingshighway Boulevard",
											"description" => "<p>Kingshighway Boulevard</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.1238",
											"y" => "0.5135",
											"zoom" => "3"),
										array( 
											"id" => "Klemm Street",
											"title" => "Klemm Street",
											"about" => "Klemm Street",
											"description" => "<p>Klemm Street</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.5011",
											"y" => "0.1797",
											"zoom" => "3"),
										array( 
											"id" => "Lackland Avenue",
											"title" => "Lackland Avenue",
											"about" => "Lackland Avenue",
											"description" => "<p>Lackland Avenue</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.1797",
											"y" => "0.8508",
											"zoom" => "3"),
										array( 
											"id" => "Lawrence Street",
											"title" => "Lawrence Street",
											"about" => "Lawrence Street",
											"description" => "<p>Lawrence Street</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.6293",
											"y" => "0.1797",
											"zoom" => "3"),
										array( 
											"id" => "Magnolia Avenue",
											"title" => "Magnolia Avenue",
											"about" => "Magnolia Avenue",
											"description" => "<p>Magnolia Avenue</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.4528",
											"y" => "0.3105",
											"zoom" => "3"),
										
										array( 
											"id" => "Maury Street",
											"title" => "Maury Street",
											"about" => "Maury Street",
											"description" => "<p>Maury Street</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.1416",
											"y" => "0.8508",
											"zoom" => "3"),
										array( 
											"id" => "Morganford Road",
											"title" => "Morganford Road",
											"about" => "Morganford Road",
											"description" => "<p>Morganford Road</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.3320",
											"y" => "0.8508",
											"zoom" => "3"),
										array( 
											"id" => "Oakhill Avenue",
											"title" => "Oakhill Avenue",
											"about" => "Oakhill Avenue",
											"description" => "<p>Oakhill Avenue</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.4962",
											"y" => "0.8508",
											"zoom" => "3"),
										array( 
											"id" => "Portis Avenue",
											"title" => "Portis Avenue",
											"about" => "Portis Avenue",
											"description" => "<p>Portis Avenue</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.2311",
											"y" => "0.8508",
											"zoom" => "3"),
										array( 
											"id" => "Roger Avenue",
											"title" => "Roger Avenue",
											"about" => "Roger Avenue",
											"description" => "<p>Roger Avenue</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.5831",
											"y" => "0.8508",
											"zoom" => "3"),
										array( 
											"id" => "Spring Avenue",
											"title" => "Spring Avenue",
											"about" => "Spring Avenue",
											"description" => "<p>Spring Avenue</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.8221",
											"y" => "0.8508",
											"zoom" => "3"),
										
										
										
										
										
										
										array( 
											"id" => "Thurman Avenue",
											"title" => "Thurman Avenue",
											"about" => "Thurman Avenue",
											"description" => "<p>Thurman Avenue</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.5679",
											"y" => "0.1797",
											"zoom" => "3"),
										
										
										array( 
											"id" => "Tower Grove Avenue",
											"title" => "Tower Grove Avenue",
											"about" => "Tower Grove Avenue",
											"description" => "<p>Tower Grove Avenue</p>",
											"category" => "streets",
											"link" => "",
											"x" => "0.4260",
											"y" => "0.1797",
											"zoom" => "3"),
										array( 
											"id" => "Turkish Pavilion",
											"title" => "Turkish Pavilion",
										
											"description" => "<img src='images/thumbs/turkishPavilion.jpg'><p>Capacity: 200<br/>$100 per day</p>",
											"thumbnail" => "images/thumbs/turkishPavilion.jpg",
											"category" => "shelters",
											"link" => "",
											"x" => "0.4385",
											"y" => "0.5976",
											"zoom" => "3"),
											
											
											
											
											
											array( 
											"id" => "Stone Shelter",
											"title" => "Stone Shelter",
									
											"description" => "<img src='images/thumbs/stoneShelter.jpg'><p>Capacity: 200<br/>$100 per day<br/>Fee includes electrical services at site</p>",
											"thumbnail" => "images/thumbs/stoneShelter.jpg",
											"category" => "shelters",
											"link" => "",
											"x" => "0.2521",
											"y" => "0.4776",
											"zoom" => "3"),
											
											
											
											array( 
											"id" => "Chinese Shelter",
											"title" => "Chinese Shelter",
										
											"description" => "<img src='images/thumbs/chineseShelter.jpg'><p>Capacity: 200<br/>$100 per day</p>",
											"thumbnail" => "images/thumbs/chineseShelter.jpg",
											"category" => "shelters",
											"link" => "",
											"x" => "0.7320",
											"y" => "0.5810",
											"zoom" => "3"),
											
											array( 
											"id" => "Cypress North Shelter",
											"title" => "Cypress North Shelter",
										
											"description" => "<img src='images/thumbs/cypressNorthShelter.jpg'><p>Capacity: 200<br/>$100 per day</p>",
											"thumbnail" => "images/thumbs/cypressNorthShelter.jpg",
											"category" => "shelters",
											"link" => "",
											"x" => "0.6889",
											"y" => "0.4303",
											"zoom" => "3"),
											
											array( 
											"id" => "Cypress South Shelter",
											"title" => "Cypress South Shelter",
										
											"description" => "<img src='images/thumbs/cypressSouthShelter.jpg'><p>Capacity: 200<br/>$100 per day</p>",
											"thumbnail" => "images/thumbs/cypressSouthShelter.jpg",
											"category" => "shelters",
											"link" => "",
											"x" => "0.6457",
											"y" => "0.6104",
											"zoom" => "3"),
											
											array( 
											"id" => "Humboldt South Shelter",
											"title" => "Humboldt South Shelter",
										
											"description" => "<img src='images/thumbs/humboldtSouthShelter.jpg'><p>Capacity: 200<br/>$100 per day</p>",
											"thumbnail" => "images/thumbs/humboldtSouthShelter.jpg",
											"category" => "shelters",
											"link" => "",
											"x" => "0.5404",
											"y" => "0.6308",
											"zoom" => "3"),
											
											
										array( 
											"id" => "Old Carriage Shelter",
											"title" => "Old Carriage Shelter",
											
											"description" => "<img src='images/thumbs/oldCarriageShelter.jpg'><p>Capacity: 200<br/>$100 per day</p>",
											"thumbnail" => "images/thumbs/oldCarriageShelter.jpg",
											"category" => "shelters",
											"link" => "",
											"x" => "0.4800",
											"y" => "0.5849",
											"zoom" => "3"),
										
										
										
										
										array( 
											"id" => "Old Playground Shelter",
											"title" => "Old Playground Shelter",
										
											"description" => "<img src='images/thumbs/oldPlaygroundShelter.jpg'><p>Capacity: 200<br/>$100 per day</p>",
											"thumbnail" => "images/thumbs/oldPlaygroundShelter.jpg",
											"category" => "shelters",
											"link" => "",
											"x" => "0.7638",
											"y" => "0.4865",
											"zoom" => "3"),
										array( 
											"id" => "Sons of Rest Shelter",
											"title" => "Sons of Rest Shelter",
										
											"description" => "<img src='images/thumbs/sonsOfRestShelter.jpg'><p>Capacity: 200<br/>$100 per day</p>",
											"thumbnail" => "images/thumbs/sonsOfRestShelter.jpg",
											"category" => "shelters",
											"link" => "",
											"x" => "0.7981",
											"y" => "0.6211",
											"zoom" => "3"),
											
											
											
											
											
										array( 
											"id" => "Concession Picnic Site",
											"title" => "Concession Picnic Site",
											"about" => "Concession Picnic Site",
											"description" => "<p>Concession Picnic Site</p>",
											"category" => "picnics",
											"link" => "",
											"x" => "0.3119",
											"y" => "0.4395",
											"zoom" => "3"),	
											
											
											array( 
											"id" => "Gurney Picnic Site",
											"title" => "Gurney Picnic Site",
											"about" => "Gurney Picnic Site",
											"description" => "<p>Gurney Picnic Site</p>",
											"category" => "picnics",
											"link" => "",
											"x" => "0.2899",
											"y" => "0.6293",
											"zoom" => "3"),
											
											array( 
											"id" => "Gus Fogt Picnic Site",
											"title" => "Gus Fogt Picnic Site",
											"about" => "Gus Fogt Picnic Site",
											"description" => "<p>Gus Fogt Picnic Site</p>",
											"category" => "picnics",
											"link" => "",
											"x" => "0.3112",
											"y" => "0.3479",
											"zoom" => "3"),
											
											array( 
											"id" => "Tunica Picnic Site",
											"title" => "Tunica Picnic Site",
											"about" => "Tunica Picnic Site",
											"description" => "<p>Tunica Picnic Site</p>",
											"category" => "picnics",
											"link" => "",
											"x" => "0.3127",
											"y" => "0.5769",
											"zoom" => "3"),
											
										array( 
											"id" => "West End Picnic Site",
											"title" => "West End Picnic Site",
											"about" => "West End Picnic Site",
											"description" => "<p>West End Picnic Site</p>",
											"category" => "picnics",
											"link" => "",
											"x" => "0.2179",
											"y" => "0.5897",
											"zoom" => "3"),
										
										
										
										
										array( 
											"id" => "Field BB-1",
											"title" => "Field BB-1",
											"about" => "Baseball Field",
											"description" => "<p>Baseball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.1160",
											"y" => "0.6642",
											"zoom" => "3"),
										array( 
											"id" => "Field SB-9",
											"title" => "Field SB-9",
											"about" => "Softball Field",
											"description" => "<p>Softball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.0964",
											"y" => "0.7621",
											"zoom" => "3"),
										array( 
											"id" => "Field SB-8",
											"title" => "Field SB-8",
											"about" => "Softball Field",
											"description" => "<p>Softball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.2408",
											"y" => "0.7621",
											"zoom" => "3"),
										array( 
											"id" => "Field SB-7",
											"title" => "Field SB-7",
											"about" => "Softball Field",
											"description" => "<p>Softball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.2867",
											"y" => "0.7621",
											"zoom" => "3"),
										array( 
											"id" => "Field SB-6",
											"title" => "Field SB-6",
											"about" => "Softball Field",
											"description" => "<p>Softball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.3146",
											"y" => "0.7621",
											"zoom" => "3"),
										array( 
											"id" => "Field SB-5",
											"title" => "Field SB-5",
											"about" => "Softball Field",
											"description" => "<p>Softball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.4676",
											"y" => "0.7621",
											"zoom" => "3"),
										array( 
											"id" => "Field SB-4",
											"title" => "Field SB-4",
											"about" => "Softball Field",
											"description" => "<p>Softball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.5065",
											"y" => "0.7177",
											"zoom" => "3"),
										array( 
											"id" => "Field SB-3",
											"title" => "Field SB-3",
											"about" => "Softball Field",
											"description" => "<p>Softball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.5385",
											"y" => "0.7469",
											"zoom" => "3"),
										array( 
											"id" => "Field SB-3A",
											"title" => "Field SB-3A",
											"about" => "Softball Field",
											"description" => "<p>Softball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.5731",
											"y" => "0.7621",
											"zoom" => "3"),
										array( 
											"id" => "Field SB-2",
											"title" => "Field SB-2",
											"about" => "Softball Field",
											"description" => "<p>Softball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.6034",
											"y" => "0.7255",
											"zoom" => "3"),
										array( 
											"id" => "Field SB-1A",
											"title" => "Field SB-1A",
											"about" => "Softball Field",
											"description" => "<p>Softball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.6402",
											"y" => "0.7621",
											"zoom" => "3"),
										array( 
											"id" => "Field SB-1",
											"title" => "Field SB-1",
											"about" => "Softball Field",
											"description" => "<p>Softball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.6720",
											"y" => "0.7254",
											"zoom" => "3"),
										array( 
											"id" => "CB-A",
											"title" => "CB-A",
											"about" => "Corkball Field",
											"description" => "<p>Corkball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.7063",
											"y" => "0.7621",
											"zoom" => "3"),
										array( 
											"id" => "CB-B",
											"title" => "CB-B",
											"about" => "Corkball Field",
											"description" => "<p>Corkball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.7274",
											"y" => "0.7621",
											"zoom" => "3"),
										array( 
											"id" => "CB-C",
											"title" => "CB-C",
											"about" => "Corkball Field",
											"description" => "<p>Corkball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.7483",
											"y" => "0.7621",
											"zoom" => "3"),
										array( 
											"id" => "CB-D",
											"title" => "CB-D",
											"about" => "Corkball Field",
											"description" => "<p>Corkball Field</p>",
											"category" => "fields",
											"link" => "",
											"x" => "0.7694",
											"y" => "0.7621",
											"zoom" => "3"),
									)
								)
					        )
	                   ); 
?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<title>Tower Grove Map Sample</title>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		<!-- Viewport for Responsivity -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
		<meta name="description" content="Sample Map of Tower Grove Park">

		<!-- Stylesheets -->
		<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" type="text/css" href="mapplic/mapplic.css">
		<!-- Internet Explorer -->
		<!--[if lt IE 9]>
			<link rel="stylesheet" type="text/css" href="mapplic/mapplic-ie.css">
			<script type="text/javascript" src="js/html5shiv.js"></script>
		<![endif]-->
		<style>
		html, body { padding: 0; margin: 0; font-family: Arial, Verdana, Geneva, sans-serif;  }
		#content { padding: 0; }
		.siteLogo { display: block; max-width: 160px; z-index: 100; padding: 5px 30px; margin-left: auto; margin-right: auto; }
		

		.mapplic-sidebar { background: #ADD064; }
		
		.mapplic-search-input { border: 1px solid #4F351F; }
		.mapplic-tooltip img, .mapplic-list-thumbnail { width: 50px; margin: 0 15px 0 0; float: left; border: 1px solid #4F351F}
		.mapplic-list-location > a { border-left: 3px solid transparent; }
		.mapplic-list-location > a:hover { border-left: 3px solid #18824B; transparent; background: #D6E7B1; }
		.mapplic-tooltip-description p { float: left; width: 200px; }
		.mapplic-tooltip-description p:first-child { width: auto; }
		
		@media (min-width:667px){
			.siteLogo { position: absolute; left: 10px; top: 10px; border: 1px solid #4F351F; background: #ffffff; height: 170px; }
			#mapplic { height: 100vh !important; }
			.mapplic-sidebar { border: 1px solid #4F351F; position: absolute; width: 220px; background: rgba(173,208,100,.9); top: 200px; left: 10px; height: 50vh !important;}
			.mapplic-container { width: 100%;  height: 100% !important; }
			.mapplic-zoom-buttons { left: 40px; bottom: 0; width: 80px; }
			.mapplic-zoom-buttons a { float: left; margin-right: 10px; }
		}
		</style>
	</head>
	<body>
		<div id="wrap">



			<!-- Site content -->
			<div id="content">
			
				<img class="siteLogo" alt="Tower Grove Park" src="mapz/images/maps/towergroveLogo.svg" />
				
				<section id="map-section" class="inner over">

					<!-- Map -->
					<div class="map-container">
						<div class="window-mockup">
							<div class="window-bar"></div>
						</div>
						<div id="mapplic"></div>
					</div>
				</section>


			</div>

		</div>

		<!-- Scripts -->
		<script type="text/javascript" src="mapz/js/jquery-1.11.2.min.js"></script>
		<script type="text/javascript" src="mapz/js/hammer.min.js"></script>
		<script type="text/javascript" src="mapz/js/jquery.easing.js"></script>
		<script type="text/javascript" src="mapz/js/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="mapz/js/smoothscroll.js"></script>
		<script type="text/javascript" src="mapz/mapplic/mapplic.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				var inlineJson = jQuery.parseJSON('{ "mapwidth": "2000", "mapheight": "2000", "categories": [ { "id": "furniture", "title": "Furniture", "color": "#4cd3b8", "show": "false" }, { "id": "rooms", "title": "Rooms", "color": "#63aa9c", "show": "true" } ], "levels": [ { "id": "lower", "name": "0", "title": "Lower floor", "map": "images/apartment/lower.jpg", "minimap": "images/apartment/lower-small.jpg", "locations": [ { "id": "coffeetable", "title": "Coffee Table", "about": "The best place to spend the afternoon", "description": "This is an awesome coffee table.", "category": "furniture", "link": "http://codecanyon.net/user/sekler?ref=sekler", "x": "0.2050", "y": "0.4660", "zoom": "3" } ] } ] }');
				alert(inlineJson);
				alert(<?php echo json_encode($jsonArray); ?>);
				$('#mapplic').mapplic({
					//source: 'lancaster.json',
					//source: <?php echo json_encode($jsonArray); ?>,
					source: inlineJson,
					height: 400,
					animate: false,
					mapfill: true,
					sidebar: true,
					minimap: true,
					deeplinking: false,
					fullscreen: true,
					hovertip: true,
					developer: false,
					maxscale: 5,
					developer: true
				});

				$('.usage').click(function(e) {
					e.preventDefault();
					
					$('.editor-window').slideToggle(200);
				});

				$('.editor-window .window-mockup').click(function() {
					$('.editor-window').slideUp(200);
				});
				
				//$('.mapplic-sidebar').prepend('<div class="donate">Donate Now!</div>');
			});
		</script>
	</body>
</html>