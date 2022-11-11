<?php
/**
 * Gutena block pattern: Two column image and quote
 */
return array(
	'title'      => __( 'Two column image and quote', 'gutena' ),
	'categories' => array( 'gutena-section' ),
	'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"0rem","right":"1.25rem","left":"1.25rem"}}},"layout":{"inherit":false,"contentSize":"1000px","type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--medium);padding-right:1.25rem;padding-bottom:0rem;padding-left:1.25rem"><!-- wp:columns {"style":{"spacing":{"blockGap":"3.5rem"}}} -->
	<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:image {"align":"center","id":32,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="' . GUTENA_THEME_URI . '/assets/img/common/review.png" alt="'. esc_html__( 'review', 'gutena' ).'" class="wp-image-32"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"bottom":"6rem"}}},"layout":{"contentSize":"473px","type":"constrained"}} -->
	<div class="wp-block-group" style="padding-bottom:6rem"><!-- wp:image {"id":31,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . GUTENA_THEME_URI . '/assets/img/icons/quote-icon.svg" alt="'. esc_html__( 'quote', 'gutena' ).'" class="wp-image-31"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:heading {"level":4,"style":{"typography":{"fontSize":"2.1rem","lineHeight":"1.5","fontStyle":"normal","fontWeight":"300"},"spacing":{"padding":{"top":"3.4rem","bottom":"1.9rem"}}}} -->
	<h4 style="padding-top:3.4rem;padding-bottom:1.9rem;font-size:2.1rem;font-style:normal;font-weight:300;line-height:1.5">'. esc_html__( 'The Big Oxmox advised her not to do so, because there were thousands of bad Commas', 'gutena' ).'.</h4>
	<!-- /wp:heading -->
	
	<!-- wp:heading {"level":4} -->
	<h4>'. esc_html__( 'Sofia Miller', 'gutena' ).'</h4>
	<!-- /wp:heading -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">'. esc_html__( 'IT Professional', 'gutena' ).'</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:group -->',
);
