<?php get_header(); ?>


<div class="main-wrapper">
	<div class="main-margin">
		<ul class="bread">
			<li><a href="">Home</a></li>
			<li>Search</li>
			<li>Towing</li>
			<li><a href="">Alabama</a></li>
		</ul>
		<div class="cat-page-title">List of Cities with Towing companies in Alabamax</div>
		<div class="cat-left">
			<ul class="parent-cat-list">
				<?php
				$category = get_category( get_query_var( 'cat' ) );
				$cat_id = $category->cat_ID;
				
				$parentcat = get_category( $cat_id );
				//echo $cat_id;	
				$categories =  get_categories('child_of='. $cat_id .'&hide_empty=0');
				foreach ($categories as $category) : ?>
			        <li class="qitem">
			            <a href="/search/<?php echo $parentcat->name;?>/<?php echo $category->name;?>" title="<?php echo $category->name; ?>">
			                <?php echo $category->name; ?>
			                 <span>(<?php
					        $cat_count = get_category( $category->term_id );
							echo $cat_count->count;
					        ?> companies)</span>
			            </a>
			        </li>
				<?php endforeach;?>
			</ul>
			
		</div>
		<div class="cat-right">
			<div id="map-canvas" class="ZipMap h-48 w-full object-cover"></div>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?libraries=maps&amp;key=AIzaSyDyaMWmqSCIVjlxknxPLgEpCUewy2uFTcM"></script>
<script>
var myLatlng;
var mapOptions = {
    zoom: 3,
    disableDefaultUI: true,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
}
var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
google.maps.event.addListener(map, 'click', function() {
infowindow.close();
});
var infowindow = new google.maps.InfoWindow(
{
size: new google.maps.Size(200,75)
});

var locations = [
[33.2440504,-86.81799849999999,1], 
[31.0867809,-87.53847159999998,2], 
[32.5402454,-85.52865150000002,3], 
[33.401866,-86.949168,4], 
[33.640562,-86.68551300000001,5], 
[33.45425,-86.83390200000002,6], 
[33.6042533,-86.95229469999998,7], 
[33.5304736,-86.7922926,8], 
[33.52479650000001,-86.78655549999996,9], 
[33.4165524,-86.68125299999997,10], 
[34.150881,-86.48644990000003,11], 
[33.0327044,-86.78851170000002,12], 
[33.6422798,-86.6847735,13],
[31.0803349,-88.23813200000001,14], 
[32.7872186,-86.68125299999997,15], 
[33.7611664,-87.18422470000002,16], 
[34.1050295,-86.92699490000001,17], 
[34.1827159,-86.9124341,18], 
];
var marker, i;
for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
        icon: '/wp-content/uploads/2021/11/towtruck-pin-e1637530083532.png',
        position: new google.maps.LatLng(locations[i][0], locations[i][1]),
        map: map
    });

	/*
    google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
            infowindow.setContent(locations[i][0]);
            infowindow.open(map, marker);
        }
    })(marker, i));
    */
}

 // Get category from URL
url = window.location.pathname;
surl = url.split('/');
surl = surl[2];

// Get Lat/Lng by State
var wisconsin = new google.maps.LatLng(44.500000,-89.500000);
var westvirginia = new google.maps.LatLng(39.000000, -80.500000);
var vermont = new google.maps.LatLng(44.000000,-72.699997);
var texas = new google.maps.LatLng(31.000000,-100.000000);
var southdakota = new google.maps.LatLng(44.500000,-100.000000);
var rhodeisland = new google.maps.LatLng(41.700001,-71.500000);
var oregon = new google.maps.LatLng(44.000000,-120.500000);
var newYork = new google.maps.LatLng(43.000000,-75.000000);
var newhampshire = new google.maps.LatLng(44.000000,-71.500000);
var nebraska = new google.maps.LatLng(41.500000,-100.000000);
var kansas = new google.maps.LatLng(38.500000,-98.000000);
var mississippi = new google.maps.LatLng(33.000000,-90.000000);
var illinois = new google.maps.LatLng(40.000000,-89.000000);
var delaware = new google.maps.LatLng(39.000000,-75.500000);
var connecticut = new google.maps.LatLng(41.599998,-72.699997);
var arkansas = new google.maps.LatLng(34.799999,-92.199997);
var indiana = new google.maps.LatLng(40.273502,-86.126976);
var missouri = new google.maps.LatLng(38.573936,-92.603760);
var florida = new google.maps.LatLng(27.994402,-81.760254);
var nevada = new google.maps.LatLng(39.876019,-117.224121);
var maine = new google.maps.LatLng(45.367584,-68.972168);
var michigan = new google.maps.LatLng(44.182205,-84.506836);
var georgia = new google.maps.LatLng(33.247875,-83.441162);
var hawaii = new google.maps.LatLng(19.741755,-155.844437);
var alaska = new google.maps.LatLng(66.160507,-153.369141);
var tennessee = new google.maps.LatLng(35.860119,-86.660156);
var virginia = new google.maps.LatLng(37.926868,-78.024902);
var newJersey = new google.maps.LatLng(39.833851,-74.871826);
var kentucky = new google.maps.LatLng(37.839333,-84.270020);
var northdakota = new google.maps.LatLng(47.650589,-100.437012);
var minnesota = new google.maps.LatLng(46.392410,-94.636230);
var oklahoma = new google.maps.LatLng(36.084621,-96.921387);
var montana = new google.maps.LatLng(46.965260,-109.533691);
var washington = new google.maps.LatLng(47.751076,-120.740135);
var utah = new google.maps.LatLng(39.419220,-111.950684);
var colorado = new google.maps.LatLng(39.113014,-105.358887);
var ohio = new google.maps.LatLng(40.367474,-82.996216);
var alabama = new google.maps.LatLng(32.318230,-86.902298);
var iowa = new google.maps.LatLng(42.032974,-93.581543);
var newMexico = new google.maps.LatLng(34.307144,-106.018066);
var southcarolina = new google.maps.LatLng(33.836082,-81.163727);
var pennsylvania = new google.maps.LatLng(41.203323,-77.194527);
var arizona = new google.maps.LatLng(34.048927,-111.093735);
var maryland = new google.maps.LatLng(39.045753,-76.641273);
var massachusetts = new google.maps.LatLng(42.407211,-71.382439);
var california = new google.maps.LatLng(36.778259,-119.417931);
var idaho = new google.maps.LatLng(44.068203,-114.742043);
var wyoming = new google.maps.LatLng(43.075970,-107.290283);
var northcarolina = new google.maps.LatLng(35.782169,-80.793457);
var louisiana = new google.maps.LatLng(30.391830,-92.329102);

// pull in sidebar map (centered)
map.setCenter(alabama)
map.setZoom(6)
</script>


		
<?php get_footer(); ?>