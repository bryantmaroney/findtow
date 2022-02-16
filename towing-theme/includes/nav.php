<?php
if(is_page() || is_single()){ ?>
	<ul class="bread">
		<li><a href="/">Home</a></li>
		<li>Search</li>
		<li>Towing</li>
		<li><?php echo $firstCategory;?></li>
		<li><a href=""><?php the_title();?></a></li>
		
		<div class="login-listing">Login</div>
		<div class="add-listing">Create Listing</div>
	</ul>
<?php } else { ?>
	<ul class="bread">
		<li><a href="/">Home</a></li>
		
		<div class="login-listing">Login</div>
		<div class="add-listing">Create Listing</div>
	</ul>
<?php }
?>


<script>
jQuery(document).ready(function(){
	jQuery('.add-listing').click(function(){
		jQuery('.listing-pop').show();
	});
	jQuery('.listing-pop-close').click(function(){
		jQuery('.listing-pop').hide();
	});
	
	jQuery('.login-listing').click(function(){
		jQuery('.login-pop').show();
	});
	jQuery('.listing-pop-close').click(function(){
		jQuery('.listing-pop, .login-pop').hide();
	});
});
</script>