<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div id="top-bar-menu">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="top-bar-left cell shrink">
				<ul class="menu">
					<li class="logo">
						
						<span class="show-for-sr"><?php bloginfo('name'); ?></span>
						
						<?php if ( function_exists( 'the_custom_logo' ) ) {
							
							the_custom_logo();?>
							
							<span class="show-for-sr"><?php  bloginfo('name');?></span>
							
						<?php } else {
							
							bloginfo('name');
						
						};?>
						
					</li>
				</ul>
			</div>
		
			<div class="cell auto top-bar-right show-for-xmedium">
				<?php joints_top_nav(); ?>	
			</div>
			
			<div class="cell shrink top-bar-right hide-for-xmedium">
				<ul class="menu">
					<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
					<li><a class="mobile-toggle" data-toggle="off-canvas"><span></span><span></span><span></span></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</div>