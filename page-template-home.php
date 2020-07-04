<?php 
/**
 * Template Name: Home
 *
 * This is the template that displays the home page.
 */

get_header(); ?>

	<?php
		$imgID = get_field('hero_background_image');
		$imgSize = "full";
		$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
	?>				

	<div class="hero">
		
		<div class="hero-slider">
			
			<div class="single-slide">
			
				<div class="hero-bg" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
				
				<div class="grid-container">
					<div class="grid-x grid-padding-x align-center align-middle">
						
						<div class="tagline-img-wrap cell small-12 text-center">
							<?php 
							$image = get_field('hero_tagline_image');
							if( !empty( $image ) ): ?>
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
						</div>
						
						<div class="hero-text left small-12 medium-6 show-for-sr">
							<?php the_field('left_text');?>
						</div>
						
						<div class="hero-text right small-12 medium-6 show-for-sr">
							<?php the_field('right_text');?>
						</div>
					
					</div>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="content">
	
		<div class="inner-content grid-x grid-padding-x">
	
		    <main class="main small-12" role="main">
			    
			    
			    <section id="s1">
				    
				<div class="grid-container content-wrap">
				<div class="grid-x grid-padding-x">
				<div class="cell small-12 text-center">
				    
				   	<?php if ($s1heading = get_field('s1_heading')):?>
				    <h2 class="text-center"><?php echo $s1heading;?></h2>
				    <div class="heading-underline"></div>
				    <?php endif;?>
				    
				   	<?php if ($s1copy = get_field('s1_copy')):?>
				    <div class="text-center"><?php echo $s1copy;?></div>
				    <?php endif;?>	
				    
				</div>
				</div>
				</div>
				    			    
			    </section>
			    

			    <section id="s2" class="lt-gray-bg">
				    
				<div class="grid-container content-wrap">
				<div class="grid-x grid-padding-x">
				<div class="cell small-12 text-center">
									    
				   	<?php if ($s2heading = get_field('s2_heading')):?>
				    <h2 class="text-center"><?php echo $s2heading;?></h2>
				    <div class="heading-underline"></div>
				    <?php endif;?>
				    
				   	<?php if ($s2copy = get_field('s2_copy')):?>
				    <p class="copy text-center"><?php echo $s2copy;?></p>
				    <?php endif;?>	
				    
				    <?php if( have_rows('service_cards') ):?>
				    <div class="service-cards-wrap grid-x grid-padding-x align-center">
				    	<?php while ( have_rows('service_cards') ) : the_row();?>	
				    	
				    	<div class="single-service-card cell small-12 medium-4">
					    	
					    	<div class="inner">
				    	
					    	<?php if( have_rows('single_service_card') ):?>
					    		<?php while ( have_rows('single_service_card') ) : the_row();?>	
					    		
					    			<?php 
									$image = get_sub_field('icon');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
									
								   	<?php if ($cardlabel = get_sub_field('label')):?>
								    <h4 class="text-center"><?php echo $cardlabel;?></h4>
								    <?php endif;?>
	
								   	<?php if ($cardcopy = get_sub_field('copy')):?>
								    <p class="text-center"><?php echo $cardcopy;?></p>
								    <?php endif;?>
					    				    	
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
								    			    
			    </section>
			    
			    
			    <section id="s3">
				    
				<div class="grid-container">
					
					<?php $image = get_field('image');?>
				
					
				<div class="career-wrap grid-x grid-padding-x" style="background-image:url(<?php echo esc_url($image['url']);?>)">
					
					
					<?php if( !empty( $image ) ): ?>
						<div class="cell small-12 text-center">
						    <img class="show-for-small-only" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						</div>
					<?php endif; ?>
					
					<div class="left cell small-12 medium-7 text-center">
										    
					   	<?php if ($s3heading = get_field('s3_heading')):?>
					    <h2 class="text-center"><?php echo $s3heading;?></h2>
					    <div class="heading-underline"></div>
					    <?php endif;?>
					    
					   	<?php if ($s3copy = get_field('s3_copy')):?>
					    <p class="text-center intro-text"><?php echo $s3copy;?></p>
					    <?php endif;?>	
	
					    
					   	<?php if ($hiring = get_field('hiring')):?>
					    <div class="copy-wrap text-center"><?php echo $hiring;?></div>
					    <?php endif;?>	
					    
					</div>
					
<!--
					<div class="right cell small-12 medium-6 medium-pull-1">
						<?php 
						$image = get_field('image');
						if( !empty( $image ) ): ?>
						    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					</div>
-->
				
				</div>
				</div>
								    			    
			    </section>			
			    

			    <section id="s4" class="lt-gray-bg">
				    
				<div class="grid-container content-wrap">
				<div class="grid-x grid-padding-x">
				<div class="cell small-12">
									    
				   	<?php if ($s4heading = get_field('s4_heading')):?>
				    <h2 class="text-center"><?php echo $s4heading;?></h2>
				    <div class="heading-underline"></div>
				    <?php endif;?>
				    
				   	<?php if ($s4copy = get_field('s4_copy')):?>
				    <p><?php echo $s4copy;?></p>
				    <?php endif;?>	
				    
				    <?php gravity_form( 1, false, false, false, '', true );?>

				    
				</div>
				</div>
				</div>
								    			    
			    </section>	
						
			    					
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>