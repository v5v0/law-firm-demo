<?php
/**
 * Title: Consultation Form
 * Slug: law-firm-theme/consultation-form
 * Categories: contact
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":"4rem"}}} -->
	<div class="wp-block-columns">
		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2.5rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
			<h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--40);font-size:2.5rem">Заявете консултация</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>Опишете Вашия казус, за да получите първа оценка на ситуацията. След запознаване на детайлите, ние ще се свържем с Вас при първа възможност. Обикновено в рамките на 24 часа. При спешни казуси, моля свържете се с нас на посочения телефон.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%","backgroundColor":"light-gray","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-column has-light-gray-background-color has-background" style="flex-basis:60%;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:group {"layout":{"type":"default"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph -->
				<p>Име</p>
				<!-- /wp:paragraph -->
				<!-- wp:html -->
				<input type="text" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc;">
				<!-- /wp:html -->

				<!-- wp:columns -->
				<div class="wp-block-columns">
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:paragraph -->
						<p>Телефон</p>
						<!-- /wp:paragraph -->
						<!-- wp:html -->
						<input type="tel" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc;">
						<!-- /wp:html -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:paragraph -->
						<p>Email</p>
						<!-- /wp:paragraph -->
						<!-- wp:html -->
						<input type="email" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc;">
						<!-- /wp:html -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

				<!-- wp:paragraph -->
				<p>Описание на казуса</p>
				<!-- /wp:paragraph -->
				<!-- wp:html -->
				<textarea rows="4" style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc;"></textarea>
				<!-- /wp:html -->

				<!-- wp:paragraph {"fontSize":"small"} -->
				<p class="has-small-font-size"><input type="checkbox"> Приемам политиката за поверителност и защита на личните данни.</p>
				<!-- /wp:paragraph -->

				<!-- wp:button {"backgroundColor":"secondary","textColor":"white"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-white-color has-secondary-background-color has-text-color has-background">Изпрати</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->

