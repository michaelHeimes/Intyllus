<?php 
	$term_list = get_the_terms($post->ID, 'nr_type'); 
	$types =''; 
	$separator = ' '; 
	$output = '';	
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-card cell small-12 medium-6 xmedium-4'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<div class="inner">
		<div class="top">
			
			<?php
				foreach($term_list as $term_single) { 
					
					$color = get_field('color', $term_single);
					
			    	$types .= '<div class="cat-tab" style= "background-color:' . $color . '">' . esc_html( $term_single->name ) . ':</div>' . $separator; 
				} 
				
				$typesz = rtrim($types, $separator); 
				echo $typesz; 
			?> 
			
			<h2><?php the_title();?></h2>
			
		</div>
	
		<div class="bottom">
			<a class="chev-link" href="<?php echo get_permalink();?>" target="_self">Read More<img src="/wp-content/themes/Intyllus/assets/images/chevron-navy.svg"></a>
		</div>	
	
	</div>
</article>