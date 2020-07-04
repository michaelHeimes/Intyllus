<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header show-for-sr">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header> <!-- end article header -->
					
    <section class="entry-content" itemprop="text">
	    <div class="grid-container">
	    	<div class="grid-x grid-margin-x grid-padding-x align-center">
		    	<div class="cell small-12 xmedium-9 ">
					<?php the_content(); ?>
		    	</div>
	    	</div>
	    </div>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->
						    
	<?php comments_template(); ?>
					
</article> <!-- end article -->