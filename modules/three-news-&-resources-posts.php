<?php
	$module_settings = get_sub_field('module_settings');
	
	$bg_color = $module_settings['background_color'];
	$ntp = $module_settings['remove_top_padding'];
	$nbp = $module_settings['remove_bottom_padding'];
	
?>

<section class="three-news-resources module background-<?php echo $bg_color;?> <?php if($ntp == 'true'):?>no-tp<?php endif;?> <?php if($nbp == 'true'):?>no-bp<?php endif;?>">
	
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="cell small-12 xmedium-11">
				
				<?php if($heading = get_sub_field('heading')):?>				
				<h2 class="h1 text-center"><?php echo $heading;?></h2>
				<div class="heading-underline"></div>
				<?php endif;?>

				<?php
				$featured_posts = get_sub_field('posts');
				if( $featured_posts ): ?>
				    <div class="grid-x grid-padding-x">
				    <?php foreach( $featured_posts as $post ):?>
				    
						<?php get_template_part('alm_templates/default');?>
	
				    <?php endforeach; ?>
				    </div>
				    <?php 
				    // Reset the global post object so that the rest of the page works correctly.
				    wp_reset_postdata(); ?>
				<?php endif; ?>
				
				<div class="btn-wrap view-all-wrap cell-12 text-center">
					
					<?php 
					$link = get_sub_field('view_all_link');
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    ?>
					    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
					
				</div>
				
			</div>		
		</div>
	</div>
	
</section>