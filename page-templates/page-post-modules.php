<?php
if( have_rows('modules') ):
while ( have_rows('modules') ) : the_row();

	if( get_row_layout() == 'hero_slider' ):
		get_template_part('modules/hero-slider');

	elseif( get_row_layout() == 'back_page_title_banner' ):
		get_template_part('modules/back-page-title-banner');

	elseif( get_row_layout() == 'careers_accordion' ):
		get_template_part('modules/careers-accordion');

	elseif( get_row_layout() == 'padded_box' ):
		get_template_part('modules/padded-box');

	elseif( get_row_layout() == 'heading_and_copy' ):
		get_template_part('modules/heading-and-copy');
		
	elseif( get_row_layout() == 'centered_heading_and_copy' ):
		get_template_part('modules/centered-heading-and-copy');

	elseif( get_row_layout() == 'services' ):
		get_template_part('modules/services');

	elseif( get_row_layout() == 'three_news_&_resources_posts' ):
		get_template_part('modules/three-news-&-resources-posts');

	elseif( get_row_layout() == 'quote' ):
		get_template_part('modules/quote');

	elseif( get_row_layout() == 'text_editor' ):
		get_template_part('modules/text-editor');

	endif;

endwhile;
endif;?>