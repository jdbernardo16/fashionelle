

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
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '316928192269722',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v9.0'
    });
  };
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<?php wp_footer();?>
</body>
</html>