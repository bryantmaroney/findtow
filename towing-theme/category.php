<?php get_header(); ?>


<div class="main-wrapper">
	<div class="main-margin">
		<ul class="bread">
			<li><a href="">Home</a></li>
			<li>Search</li>
			<li>Towing</li>
			<li><a href="">Alabama</a></li>
		</ul>
		<div class="cat-page-title">List of Cities with Towing companies in Alabama</div>
		<div class="cat-left">
			<ul class="parent-cat-list">
				<!--
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
				-->
				<?php 
				    query_posts(array( 
				        'post_type' => 'location',
				        'showposts' => 50 
				    ) );  
				?>
				<?php while (have_posts()) : the_post(); ?>
					<li class="qitem">
			            <a href="/search/<?php echo $parentcat->name;?>/<?php echo $category->name;?>" title="<?php echo $category->name; ?>">
			                <?php the_title(); ?>
			                 <span>(<?php
					        $cat_count = get_category( $category->term_id );
							echo $cat_count->count;
					        ?> companies)</span>
			            </a>
			        </li>
				<?php endwhile;?>
			</ul>
			
		</div>
		<div class="cat-right">
			<div id="map-canvas" class="ZipMap h-48 w-full object-cover"></div>
		</div>
	</div>
</div>


		
<?php get_footer(); ?>