<?php
	$module_settings = get_sub_field('module_settings');
	
	$bg_color = $module_settings['background_color'];
	$ntp = $module_settings['remove_top_padding'];
	$nbp = $module_settings['remove_bottom_padding'];
	
?>

<section class="quote module background-<?php echo $bg_color;?> <?php if($ntp == 'true'):?>no-tp<?php endif;?> <?php if($nbp == 'true'):?>no-bp<?php endif;?>">
	
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="cell small-12 xmedium-11 text-center">
				
				<div class="quote-marks"><span>“</span> <span>”</span></div>
				
				<?php if($quote_text = get_sub_field('quote_text')):?>				
				<p class="text-center"><?php echo $quote_text;?></p>
				<?php endif;?>

				<?php if($quote_author = get_sub_field('quote_author')):?>				
				<div class="author text-center"><?php echo $quote_author;?></div>
				<?php endif;?>
				
			</div>		
		</div>
	</div>
	
</section>