<?php
/**
 * Title: Hero Section
 * Slug: law-firm-theme/hero
 * Categories: banner, header
 */
?>
<!-- wp:cover {"url":"https://s.w.org/images/core/5.3/MtBlanc1.jpg","dimRatio":60,"overlayColor":"primary","minHeight":600,"minHeightUnit":"px","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);min-height:600px">
	<span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span>
	<img class="wp-block-cover__image-background" src="https://s.w.org/images/core/5.3/MtBlanc1.jpg" alt="Legal Background" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:columns {"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">
				<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3.5rem"}},"textColor":"white"} -->
				<h1 class="wp-block-heading has-white-color has-text-color" style="font-size:3.5rem">Адвокатска кантора<br>"Вътев и партньори"</h1>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"}},"textColor":"white"} -->
				<p class="has-white-color has-text-color" style="font-size:1.5rem">Вашият доверен правен партньор</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"backgroundColor":"secondary","textColor":"white","style":{"spacing":{"padding":{"top":"15px","right":"30px","bottom":"15px","left":"30px"}}}} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-secondary-background-color has-text-color has-background" style="padding-top:15px;padding-right:30px;padding-bottom:15px;padding-left:30px">Свържете се с нас</a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">
				<!-- wp:image {"id":1,"sizeSlug":"full","linkDestination":"none"} -->
				<figure class="wp-block-image size-full"><img src="https://s.w.org/images/core/5.3/Iceberg.jpg" alt=""/></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
</div>
<!-- /wp:cover -->

