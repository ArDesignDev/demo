<footer class="main-footer">

	<div class="wrapper">

		<div class="main-footer__info">
			<div class="row">
				<?php if (is_active_sidebar('footer1')) : ?>

							<div class="row__medium-3 row__small-6">
							  <div class="main-footer__footer-widget-area">
								<?php dynamic_sidebar('footer1'); ?>
							  </div>
							</div>

						<?php endif; ?>

						<?php if (is_active_sidebar('footer2')) : ?>

							<div class="row__medium-3 row__small-6">
							  <div class="main-footer__footer-widget-area">
								<?php dynamic_sidebar('footer2'); ?>

							  </div>
							</div>

						<?php endif; ?>

						<?php if (is_active_sidebar('footer3')) : ?>

							<div class="row__medium-3 row__small-6">
							  <div class="main-footer__footer-widget-area">
								<?php dynamic_sidebar('footer3'); ?>

							  </div>
							</div>

						<?php endif; ?>

						<?php if (is_active_sidebar('footer4')) : ?>

							<div class="row__medium-3 row__small-6">
							  <div class="main-footer__footer-widget-area">
								<?php dynamic_sidebar('footer4'); ?>
							  </div>
							</div>

						<?php endif; ?>
			</div><!-- /row-->
	  </div><!-- /info-->

	</div><!--/wrapper-->

	<div class="main-footer__line">
	</div>
	<div class="main-footer__copyrights">
		<div class="wrapper">
			<div class="row">
					<div class="row__xsmall-6">
								<p><a href="#" class="main-footer__copyrights__link">Infinity web</a></p>
					</div>
					<div class="row__xsmall-6 main-footer__copyrights__right">
							<p>Copyrights 2017</p>
					</div>
			</div>
		</div><!-- /wrapper-->
	</div><!-- /copyrights-->

</footer>


<?php wp_footer(); ?>
</body>
</html>
