<?php

// Template Name: Services

get_header(); ?>


	<?php query_posts(array('post_type' => 'services', 'order' => 'ASC', 'posts_per_page' => 50)); ?>
	<!-- <?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="tip-text"><?php the_title(); ?></div>
	<?php endwhile; ?>
	<?php endif; ?> -->
		<?php $count = 1; ?>
		<?php global $ancestor;	$childcats = get_categories('child_of=10'); ?>
			<?php foreach ($childcats as $childcat) {
		  		if (cat_is_ancestor_of($ancestor, $childcat->cat_ID) == false){ ?>
				<div class="service-cont cont-<?php echo $count;?>">
			    	<div class="main-title"><?php echo $childcat->cat_name; ?></div>
					<div id="<?php echo strtolower(str_replace(' ','-',$childcat->cat_name)); ?>" class="service-box">
						<?php $sub_cats = get_categories('parent='.$childcat->term_id.'&hide_empty=0'); ?>
						<?php if($sub_cats) { ?>
							<?php foreach($sub_cats as $sub_cat) { ?>
								<div id="<?php echo strtolower(str_replace(' ','-',$sub_cat->name)); ?>" class="sub-service-cont">
							   		<div class="sub-service"><?php echo $sub_cat->name ?></div>
									<?php if ( have_posts() ) : ?>
										<?php while ( have_posts() ) : the_post(); ?>
											<div class="service-info <?php foreach((get_the_category()) as $category) {echo strtolower(str_replace(' ','-',$category->cat_name));} ?>">
												<span>.......................................................................</span>
												<div class="service-title "><?php the_title(); ?></div>
												<div class="service-price"><?php the_field('price'); ?></div>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
																		
									<!-- <?php $sub_subs = get_categories('parent='.$sub_cat->term_id.'&hide_empty=0'); ?>
										<?php foreach($sub_subs as $sub_sub) { ?>
											<div id="<?php echo strtolower(str_replace(' ','-',$sub_sub->name)); ?>" class="sub-sub-cont">
												<div class="subsub-service"><?php echo $sub_sub->name ?></div>
												<?php if ( have_posts() ) : ?>
													<?php while ( have_posts() ) : the_post(); ?>
														<div class="service-info <?php foreach((get_the_category()) as $category) {echo strtolower(str_replace(' ','-',$category->cat_name));} ?>">
															<div class="service-title "><?php the_title(); ?></div>
															<div class="service-price"><?php the_field('price'); ?></div>
														</div>
													<?php endwhile; ?>
												<?php endif; ?>
											</div>
										<?php } ?>	 -->
								</div>
							<?php }  ?>	
						<?php } else { ?>	
							<?php if ( have_posts() ) : ?>
								<?php while ( have_posts() ) : the_post(); ?>
									<div class="service-info <?php foreach((get_the_category()) as $category) {echo strtolower(str_replace(' ','-',$category->cat_name));} ?> nosub">
										<span>.......................................................................</span>
										<div class="service-title "><?php the_title(); ?></div>
										<div class="service-price"><?php the_field('price'); ?></div>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
							
						<?php } ?>	
					</div>
				</div>
				<?php $count++; ?>
			<?php $ancestor = $childcat->cat_ID; }	}	?>
		

		
		<!-- <?php 	//	wp_dropdown_categories(array('hide_empty' => 0, 'cat' => 10, 'name' => 'category_parent', 'orderby' => 'name', 'selected' => $category->parent, 'hierarchical' => true, 'show_option_none' => __('None'))); ?> -->
		
		
		<!--<select name="event-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'> 
		 <option value=""><?php echo esc_attr(__('Select Event')); ?></option> 
		 <?php 
		  $categories=  get_categories('child_of=10'); 
		  foreach ($categories as $category) {
		  	$option = '<option value="/category/archives/'.$category->category_nicename.'">';
			$option .= $category->cat_name;
			$option .= ' ('.$category->category_count.')';
			$option .= '</option>';
			echo $option;
		  }
		 ?>
		</select>
		
		<?php
		$args=array(
		  'orderby' => 'name',
		  'order' => 'ASC'
		  );
		$categories=get_categories($args);
		  foreach($categories as $category) { 
		    echo '<p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
		    echo '<p> Description:'. $category->description . '</p>';
		    echo '<p> Post Count: '. $category->count . '</p>';  } 
		?>
		
		<?php
		$args= array(
		  'orderby' => 'name',
		  'parent' => 0
		  );
		$categories = get_categories( $args );
		foreach ( $categories as $category ) {
			echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a><br/>';
		}
		?> -->

<?php get_footer(); ?>