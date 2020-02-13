<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<ul class="menu">
			<li class="logo"><a href="<?php echo home_url(); ?>">
				<span class="show-for-sr"><?php bloginfo('name'); ?></span>
				<?php if ( function_exists( 'the_custom_logo' ) ) {
					
					the_custom_logo();?>
					
					<span class="show-for-sr"><?php  bloginfo('name');?></span>
					
				<?php } else {
					
					bloginfo('name');
				
				};?>
				
				</a></li>
		</ul>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small-only hide">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>