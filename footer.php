<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer lt-gray-bg" role="contentinfo">
					
					<div class="grid-container">
					
						<div class="inner-footer grid-x grid-padding-x">
							
							<div class="top cell small-12">
								
								<ul class="menu grid-x grid-padding-x content-wrap">
									
									<li class="cell shrink">
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
									
									<li class="cell shrink">

										<p class="address-heading"><?php the_field('address_heading', 'option');?></p>
									
										<a href="<?php the_field('google_directions_url', 'option');?>" target="_blank">
																						
											<span class="address"><?php the_field('address', 'option');?></span>
											
										</a>	
									</li>
									
									<li class="cell small-12 medium-shrink">
									
										<ul class="menu footer-social grid-x grid-padding-x">
									
											<li class="cell shrink">
												<a href="<?php the_field('twitter_url', 'option');?>">
													
													<img src="/wp-content/themes/Intyllus/assets/images/twitter.svg"/>
													
												</a>
											</li>

											<li class="cell shrink">
												<a href="<?php the_field('instagram_url', 'option');?>">
													
													<img src="/wp-content/themes/Intyllus/assets/images/instagram.svg"/>
													
												</a>
											</li>
											
											<li class="cell shrink">
												<a href="<?php the_field('linkedin_url', 'option');?>">
													
													<img src="/wp-content/themes/Intyllus/assets/images/linkedin-in.svg"/>
													
												</a>
											</li>											
										</ul>
									
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
							
							<div class="bottom small-12 medium-12 large-12 cell">

							   	<?php if ($subfooter = get_field('sub_footer_copy', 'option')):?>
							    <p class="content-wrap"><?php echo $subfooter;?></p>
							    <?php endif;?>
					    
							</div>
						
						</div> <!-- end #inner-footer -->
						
					</div>
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->