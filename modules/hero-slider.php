<div class="hero">
	<div class="hero-slider">
		
		<?php if( have_rows('hero_slider') ):?>
			<?php while ( have_rows('hero_slider') ) : the_row();?>	
			
			<?php if( have_rows('single_slide') ):?>
				<?php while ( have_rows('single_slide') ) : the_row();
				
					$imgID = get_sub_field('background_image');
					$imgSize = "full";
					$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
				?>		
				
				<div class="single-slide">
					
					<div class="hero-bg" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
					
					<div class="grid-container">
						<div class="grid-x grid-padding-x">
							
							<div class="cell small-12 medium-10 xmedium-5">
								
								<div class="inner">
									
									<div class="text-wrap">
										
										<div class="bg"></div>	
									
										<?php if($heading = get_sub_field('heading')):?>
										<h2><?php echo $heading;?></h2>
										<?php endif;?>
	
										<?php if($copy = get_sub_field('copy')):?>
										<p><?php echo $copy;?></p>
										<?php endif;?>
										
										<?php 
										$link = get_sub_field('link');
										if( $link ): 
										    $link_url = $link['url'];
										    $link_title = $link['title'];
										    $link_target = $link['target'] ? $link['target'] : '_self';
										    ?>
										    <div class="link-wrap">
										    	<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
										    </div>
										<?php endif; ?>	
										
										
									</div>							
									
								</div>
								
							</div>
							
						</div>
					</div>
					
				</div>
			
				<?php endwhile;?>
			<?php endif;?>
		
			<?php endwhile;?>
		<?php endif;?>
		
	</div>
</div>