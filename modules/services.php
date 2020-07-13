<?php
	$module_settings = get_sub_field('module_settings');
	
	$bg_color = $module_settings['background_color'];
	$ntp = $module_settings['remove_top_padding'];
	$nbp = $module_settings['remove_bottom_padding'];
	
	$layout = get_sub_field('layout');
	
?>

<section class="services module layout-<?php the_sub_field('layout');?> <?php if( $layout == 'with-copy'):?>background-<?php echo $bg_color;?><?php endif;?> <?php if($ntp == 'true'):?>no-tp<?php endif;?> <?php if($nbp == 'true'):?>no-bp<?php endif;?>">
	
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="cell small-12 xmedium-10 text-center">
				
				<div class="inner padded background-<?php echo $bg_color;?>">
				
					<div class="service-cards-wrap grid-x grid-padding-x align-center">
					
						<?php if($heading = get_sub_field('heading')):?>				
						<h2 class="cell small-12 text-center"><?php echo $heading;?></h2>
						<?php if( $layout == 'with-copy'):?>
						<div class="heading-underline"></div>
						<?php endif;?>
						<?php endif;?>
						
					</div>
					
					<?php if( $layout == 'with-copy'):?>
					<?php if($copy = get_sub_field('copy')):?>				
						<div class="copy-wrap grid-x grid-padding-x align-center">
			
							<p class="cell small-12 xmedium-9 text-center"><?php echo $copy;?></p>
							
						</div>	
					<?php endif;?>
					<?php endif;?>			
					
				    <?php if( have_rows('service_cards') ):?>
					<div class="service-cards-wrap grid-x grid-padding-x align-center">
				    	<?php while ( have_rows('service_cards') ) : the_row();?>	
				    	
				    	<div class="single-service-card cell small-12 medium-4">
					    	
					    	<div class="inner">
				    	
					    	<?php if( have_rows('single_service_card') ):?>
					    		<?php while ( have_rows('single_service_card') ) : the_row();?>	
					    		
					    		<div class="top">
					    		
					    			<?php 
									$image = get_sub_field('icon');
									if( !empty( $image ) ): ?>
									<div class="icon-wrap">
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									</div>
									<?php endif; ?>
									
								   	<?php if ($cardlabel = get_sub_field('label')):?>
								    <h3 class="text-center"><?php echo $cardlabel;?></h3>
								    <?php endif;?>
	
								   	<?php if ($cardcopy = get_sub_field('copy')):?>
								    <p class="card-copy text-center"><?php echo $cardcopy;?></p>
								    <?php endif;?>
								    
					    		</div>
					    		
					    		<div class="bottom">
								    
								    <?php 
									$link = get_sub_field('link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <div class="btn-wrap text-center">										    
								    		<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>									    		
									    </div>
									<?php endif; ?>
									
					    		</div>
					    				    	
					    		<?php endwhile;?>
					    	<?php endif;?>
				    	
					    	</div>
				    	
				    	</div>
				    
				    	<?php endwhile;?>
				    </div>
				    <?php endif;?>
				    
				</div>			
				
			</div>		
		</div>
	</div>
	
</section>