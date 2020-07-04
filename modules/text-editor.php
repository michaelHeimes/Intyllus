<?php
	$module_settings = get_sub_field('module_settings');
	
	$bg_color = $module_settings['background_color'];
	$ntp = $module_settings['remove_top_padding'];
	$nbp = $module_settings['remove_bottom_padding'];
	
?>

<section class="text-editor module background-<?php echo $bg_color;?> <?php if($ntp == 'true'):?>no-tp<?php endif;?> <?php if($nbp == 'true'):?>no-bp<?php endif;?>">
	
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			
			<?php if(get_sub_field('width') == 'ninety'):?>
			
				<div class="cell small-12 xmedium-9">
				
			<?php else:?>
			
				<div class="cell small-12">
			
			<?php endif;?>
				
			<?php the_sub_field('editor');?>
				
			</div>		
		</div>
	</div>
	
</section>