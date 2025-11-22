<?php
/**
 * Title: Publications Section
 * Slug: law-firm-theme/publications
 * Categories: query
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2.5rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
	<h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--60);font-size:2.5rem">Последни публикации</h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":4}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->
		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"border":{"radius":"0px"}}} /-->
		<!-- wp:post-title {"isLink":true,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} /-->
		<!-- wp:post-excerpt {"moreText":"Прочетете повече"} /-->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->

