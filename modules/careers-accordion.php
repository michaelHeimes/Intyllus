<?php
	
	$module_settings = get_sub_field('module_settings');
	
	$bg_color = $module_settings['background_color'];
	$ntp = $module_settings['remove_top_padding'];
	$nbp = $module_settings['remove_bottom_padding'];
	
?>

<section class="career-accordion module background-<?php echo $bg_color;?> <?php if($ntp == 'true'):?>no-tp<?php endif;?> <?php if($nbp == 'true'):?>no-bp<?php endif;?>">
	
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="accordion cell small-12" data-accordion data-allow-all-closed="true">
				
				<?php
				$args = array( 
				'post_status' => 'publish',
				'post_type' => 'career',
				'posts_per_page' => -1 ,
				'order' => 'DESC'
				
				);
				
				$loop = new WP_Query( $args );
				
				while ( $loop->have_posts() ) : $loop->the_post();?>
				

					<div class="accordion-item grid-x grix-padding-x align-center" data-accordion-item>
									  
						<a class="accordion-title cell small-12 xmedium-9" href="#"><?php the_title(); ?> <img src="/wp-content/themes/Intyllus/assets/images/down-arrow.svg"/></a>
							
						<div class="accordion-content cell small-12 xmedium-9" data-tab-content>
							
							<div class="copy-wrap">
								<?php the_field('copy');?>
							</div>
							
							<div class="btn-wrap">
								<a class="button" href="/apply">Apply Now</a>
							</div>
							
						</div>
										  	
					</div>
				
				<?php endwhile; wp_reset_query();?> 
								
				
			</div>
					
		</div>
	</div>
	
</section>