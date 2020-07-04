<?php
/**
 * Template part for displaying a single post
 */
?>

<?php $imgID = get_field('back_page_banner_background_image', 'option');
	$imgSize = "full";
	$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
	
	if(have_rows('modules', '90')):
	      while(have_rows('modules', '90')): the_row();
	      
	          if( get_row_layout() == 'back_page_title_banner' ):?>
	
				<div class="back-page-title-banner" style="background-image: url(<?php echo $imgArr[0]; ?> );">
					<div class="grid-container">
						<div class="grid-x grid-padding-x align-center">
				
							<?php if($heading = get_sub_field('title')):?>
							<h1 class="h1 cell small-12 xmedium-9 text-left"><?php echo $heading;?></h1>
							<?php endif;?>
					
						</div>
					</div>
				</div>
	
	        <?php
	          endif;
	      endwhile;
	endif;		

?>	

<article id="post-<?php the_ID(); ?>" <?php post_class('module'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="cell small-12 xmedium-9">
						
				<header class="article-header">	
					<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
			    </header> <!-- end article header -->
    
			</div>
		</div>
	</div>
    					
	<?php get_template_part('page-templates/page-post-modules');?>
	
													
</article> <!-- end article -->

<div class="btn-wrap text-center">
	<button class="button" name="action" onclick="history.back()" type="submit" value="Back">Back</button>
</div>