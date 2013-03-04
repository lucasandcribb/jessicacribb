<?php

// Template Name: Services

get_header(); ?>


	<?php query_posts(array('post_type' => 'services', 'order' => 'ASC', 'posts_per_page' => 50)); ?>
		<?php 
		$categories = get_categories('child_of=10&depth=1' );
		
		foreach($categories as $cat) { 
			//$cat=array('orderby' => 'none');
		    echo '<div class="cat-cont '.$cat->name.'"><div class="sort-by">'.$cat->name.'</div>';
		    // $sub_cats = get_categories('parent='.$cat->term_id.'&hide_empty=0');
		    // if($sub_cats) {
		    //     echo '<div class="drop-list">';
		    //     foreach($sub_cats as $sub_cat) {
		    //     echo '<div id="'.$sub_cat->name.'" class="cat-name">'.$sub_cat->name.'</div>';
		    //     }
		    //     echo '</div>';
		    echo '</div>';
		    // }
		}

		
		?>
		
		<?php
		global $ancestor;
		$childcats = get_categories('child_of=10');
		foreach ($childcats as $childcat) {
		  if (cat_is_ancestor_of($ancestor, $childcat->cat_ID) == false){
		    echo '<li><h2><a href="'.get_category_link($childcat->cat_ID).'">';
		    echo $childcat->cat_name . '</a></h2>';
		    echo '<p>'.$childcat->category_description.'</p>';
		    echo '</li>';
		    $ancestor = $childcat->cat_ID;
		  }
		}
		?>
		

		
		<?php 		wp_dropdown_categories(array('hide_empty' => 0, 'cat' => 10, 'name' => 'category_parent', 'orderby' => 'name', 'selected' => $category->parent, 'hierarchical' => true, 'show_option_none' => __('None'))); ?>
		
		
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