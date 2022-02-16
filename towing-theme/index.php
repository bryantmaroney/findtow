<?php get_header(); ?>

<div class="main-wrapper">
	<div class="main-margin">
		
		<?php include('includes/nav.php');?>
		
		<div class="cat-page-title">Search for a Towing Service Near You</div>
		<div class="cat-left">
			<form action="" method="post">
				<input type="text" pattern="[0-9]*" placeholder="Enter Zip Code.." required name="zip" id="zip">
				<input class="zipsubmit" type="button" value="Search">
			</form>
		</div>
		<div class="cat-right">
			<!--<div id="map-canvas" class="ZipMap h-48 w-full object-cover"></div>-->
		</div>
	</div>
</div>



		
<?php get_footer(); ?>






<script>
jQuery(document).ready(function(){
	// checking zipcode validation
	function is_int(value){ 
	if ((parseFloat(value) == parseInt(value)) && !isNaN(value)) {
			return true;
		} else { 
			return false;
		} 
	}
	
	var getZipCode = '';
	// on keyup, pull city and state
	$('.zipsubmit').click(function(e) {
		getZipCode = jQuery('#zip').val();
		e.preventDefault();
		//var el = $(this);
		//if ((el.val().length == 5) && (is_int(el.val()))) {
			/*
			$.ajax({
				type: "GET",
				beforeSend: function(request) {
                	request.setRequestHeader("x-key", "4eaa3a40e0c701a11f7a76d7c01a38c86d8471e3");
              	},
			  	url: location.protocol + "//zip.getziptastic.com/v3/US/90210",
				//url: "http://zip.elevenbasetwo.com",
				cache: false,
				dataType: "json",
				//type: "GET",
				//data: "zip=" + el.val(),
				success: function(result, success) {
					getZipCode = jQuery('form input#zip').val();
					$('ul.output li:nth-child(1) span').html(getZipCode);
					$('ul.output li:nth-child(2) span').html(result.city);
					$('ul.output li:nth-child(3) span').val(result.state);
				},
				error: function(result, success) {
					$(".zip-error").show();
				}
			});
			*/
			
			$.ajax({
			    type: "GET",
			    beforeSend: function(request) {
			        request.setRequestHeader("x-key", "4eaa3a40e0c701a11f7a76d7c01a38c86d8471e3");
			    },
			    url: location.protocol + "//zip.getziptastic.com/v3/US/" + getZipCode,
			    //url: "http://zip.elevenbasetwo.com",
			    cache: false,
			    dataType: "json",
			    //type: "GET",
			    //data: "zip=" + el.val(),
			    success: function(result, success) {
			        //console.log(result[0].city);
			        //console.log(result[0].state);
			        //console.log(getZipCode);
			        getLat = result[0].latitude;
			        getLong = result[0].longitude;
			        getState = result[0].state;
			        getState = getState.toLowerCase();
			        getCity = result[0].city;
			        getCity = getCity.split(' ').join('-').toLowerCase();
			        getZip = getZipCode;
			        
			        console.log(getState);
			        
			        window.location.href = "/location/" + getState + "/" + getCity + "/?zip=" + getZip + "&lat=" + getLat + "&long=" + getLong;
			    },
			    error: function(result, success) {
			        $(".zip-error").show(); /* Ruh row */
			    }
			});
		//}
	});
});
</script>



<?php get_footer(); ?>
