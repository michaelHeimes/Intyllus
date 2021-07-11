<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
 
 	<?php if(get_field('show_wwu', 'option') == 'true' && get_field('wwu_cta_hide') !='true'):
	 	
		$imgID = get_field('wwu_background_image', 'option');
		$imgSize = "full";
		$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
		
	?>	
	
 	<div class="work-with-us" style="background-image: url(<?php echo $imgArr[0]; ?> );">
	 	
		<div class="grid-container">		
			<div class="grid-x grid-padding-x align-center">
							
				<div class="cell small-12 xmedium-7 text-center">
					
					<?php if($heading = get_field('wwu_heading', 'option')):?>
					<h2><?php echo $heading;?></h2>
					<div class="heading-underline"></div>
					<?php endif;?>

					<?php if($copy = get_field('wwu_copy', 'option')):?>
					<p><?php echo $copy;?></p>
					<?php endif;?>
					
					<?php 
					$link = get_field('wwu_link', 'option');
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    ?>
					    <a class="button white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>
					
				</div>
				
			</div>
		</div>
 	</div>
 	<?php endif;?>
					
				<footer class="footer lt-gray-bg" role="contentinfo">
					
					<div class="grid-container">
					
						<div class="inner-footer grid-x grid-padding-x">
							
							<div class="top small-12">
								
								<ul class="menu grid-x grid-padding-x content-wrap">
									
									<li class="footer-logo-wrap cell shrink">
										<a href="<?php echo home_url(); ?>">
										<span class="show-for-sr"><?php bloginfo('name'); ?></span>
										
										<?php 
										$image = get_field('footer_logo', 'option');
										if( !empty( $image ) ): ?>
										    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />										 
										 
										 
										<?php else:
											bloginfo('name');?>
										
										<?php endif;?>
										</a>
									</li>
									
									<li class="footer-contact cell shrink">
									
										<a href="<?php the_field('google_directions_url', 'option');?>" target="_blank">
																						
											<span class="address"><?php the_field('address', 'option');?></span>
											
										</a>	
										
										<a href="tel:<?php the_field('phone_number', 'option');?>" target="_blank">
																						
											<span class="phone_number"><?php the_field('phone_number', 'option');?></span>
											
										</a>	
										
										<a class="email" href="mailto:<?php the_field('email_address', 'option');?>" target="_blank">
																						
											<span class="aemail_address"><?php the_field('email_address', 'option');?></span>
											
										</a>	
										
									</li>
									
									<li class="cell small-12 medium-shrink">
									
										<ul class="menu footer-social grid-x grid-padding-x">
									
											<li class="cell shrink">
												<a href="<?php the_field('twitter_url', 'option');?>" target="_blank">
													
													<img src="/wp-content/themes/Intyllus/assets/images/twitter.svg"/>
													
												</a>
											</li>

											<li class="cell shrink">
												<a href="<?php the_field('instagram_url', 'option');?>" target="_blank">
													
													<img src="/wp-content/themes/Intyllus/assets/images/instagram.svg"/>
													
												</a>
											</li>
											
											<li class="cell shrink">
												<a href="<?php the_field('linkedin_url', 'option');?>" target="_blank">
													
													<img src="/wp-content/themes/Intyllus/assets/images/linkedin-in.svg"/>
													
												</a>
											</li>											
										</ul>
									
									</li>
									
									<li class="cell shrink">
										<img src="/wp-content/themes/Intyllus/assets/images/u.s.-flag.svg"/>
									</li>
									
								</ul>
							
							</div>
							

							
							
<!--
							<div class="small-12 medium-12 large-12 cell">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
-->
							
							<div class="content-wrap bottom small-12 medium-12 large-12 cell">

							   	<?php if ($subfooter = get_field('sub_footer_copy', 'option')):?>
							    <p><?php echo $subfooter;?></p>
							    <?php endif;?>
							    
							    <p>&copy; Copyright <?php echo date('Y'); ?> - Intyllus Advisors</p>
					    
							</div>
						
						</div> <!-- end #inner-footer -->
						
					</div>
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->