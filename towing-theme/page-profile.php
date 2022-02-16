<?php get_header(); ?>

<div class="main-wrapper">
	<div class="main-margin">
		
		<?php include('includes/nav.php');?>
		
		<div class="cat-page-title">Edit Account Info</div>
		<div class="cat-left">
			<ul class="city-tow-list">
				<?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]'); ?>
			</ul>
		</div>
		<div class="cat-right">
			<?php
			$author_query = new WP_Query(array(
			   'posts_per_page' => '-1',
			   'author' => $current_user->ID,
			));
			?>
			<?php while( $author_query->have_posts() ) : $author_query->the_post() ?>
				<div class="sidebar-profile-post">
					<div class="sidebare-profile-title"><?php the_title();?></div>
					<div class="sidebar-profile-link"><a href="<?php the_permalink();?>">View Listing</a></div>
				</div>
			<?php endwhile; 
				wp_reset_postdata(); ?>
		</div>
	</div>
</div>




		
<?php get_footer(); ?>