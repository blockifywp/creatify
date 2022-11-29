<?php
/**
 * Title: Template Search
 * Slug: template-search
 * Categories: template
 * Inserter: false
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xxl","bottom":"var:preset|spacing|md"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xxl);padding-bottom:var(--wp--preset--spacing--md)"><!-- wp:spacer {"height":"100vh","style":{"position":{"all":"absolute"},"top":{"all":"0px"},"right":{"all":"0px"},"left":{"all":"0px"},"zIndex":{"all":"-1"}},"align":"full","gradient":"primary"} -->
	<div style="height:100vh" aria-hidden="true" class="wp-block-spacer alignfull has-primary-gradient-background has-background"></div>
	<!-- /wp:spacer -->

	<!-- wp:spacer {"height":"100vh","style":{"position":{"all":"absolute"},"top":{"all":"0px"},"right":{"all":"0px"},"left":{"all":"0px"},"zIndex":{"all":"-1"},"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"align":"full","gradient":"background-transparent-blur"} -->
	<div style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;height:100vh" aria-hidden="true" class="wp-block-spacer alignfull has-background-transparent-blur-gradient-background has-background"></div>
	<!-- /wp:spacer -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|lg","top":"var:preset|spacing|md"}}},"fontSize":"60"} -->
	<h1 class="has-text-align-center has-60-font-size" style="margin-top:var(--wp--preset--spacing--md);margin-bottom:var(--wp--preset--spacing--lg)">Search Results</h1>
	<!-- /wp:heading -->

	<!-- wp:query {"queryId":17,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
	<div class="wp-block-query alignwide"><!-- wp:post-template -->
		<!-- wp:post-featured-image {"isLink":true} /-->

		<!-- wp:post-title {"level":4,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|xs","right":"0","bottom":"var:preset|spacing|xs","left":"0"}}}} /-->

		<!-- wp:post-excerpt {"moreText":"Read more"} /-->
		<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>
<!-- /wp:group -->
