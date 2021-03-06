<?php
	$module_settings = get_sub_field('module_settings');
	
	$bg_color = $module_settings['background_color'];
	$ntp = $module_settings['remove_top_padding'];
	$nbp = $module_settings['remove_bottom_padding'];
	
?>

<section class="centered-heading-and-copy module background-<?php echo $bg_color;?> <?php if($ntp == 'true'):?>no-tp<?php endif;?> <?php if($nbp == 'true'):?>no-bp<?php endif;?>">
	
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="cell small-12 xmedium-9 text-center">
				
				<?php if($heading = get_sub_field('heading')):?>				
				<h2 class="h1 text-center"><?php echo $heading;?></h2>
				<div class="heading-underline"></div>
				<?php endif;?>

				<?php if($copy = get_sub_field('copy')):?>				
				<div class="text-center"><?php echo $copy;?></div>
				<?php endif;?>
				
			</div>		
		</div>
	</div>
	
</section>