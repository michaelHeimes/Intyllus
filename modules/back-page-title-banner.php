<?php $imgID = get_field('back_page_banner_background_image', 'option');
	$imgSize = "full";
	$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
?>		

<div class="back-page-title-banner" style="background-image: url(<?php echo $imgArr[0]; ?> );">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">

			<?php if($heading = get_sub_field('title')):?>
			<h1 class="cell small-12 xmedium-9 text-left"><?php echo $heading;?></h1>
			<?php endif;?>
	
		</div>
	</div>
</div>