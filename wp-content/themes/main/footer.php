

</div>

<div id="footer">
	<div class="wrapper">
		<div class="inlineBlock-parent">
			<div class="menu-hldr">
				<div class="inlineBlock-parent">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-menu',
							)
						);
					?>
				</div>
			</div
			><div class="footer-social">
				<div class="inlineBlock-parent">
					<div class="social">
						<a href="">
							<img src="<?php echo get_template_directory_uri(); ?>/image/fb.svg" alt="">
						</a>
					</div
					><div class="social">
						<a href="">
							<img src="<?php echo get_template_directory_uri(); ?>/image/ig.svg" alt="">
						</a>
					</div>
				</div>
			</div
			><div class="footer-copyright">
				<p>COPYRIGHT @ 2020 | FASHIONELLE</p>
			</div>
		</div>
	</div>
</div>
<!-- Vue -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<!-- TweenMax -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/ModifiersPlugin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/ScrollToPlugin.min.js"></script>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<!-- ScrollMagic -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<?php wp_footer();?>
</body>
</html>