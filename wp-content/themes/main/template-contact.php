<?php
/* Template Name: Contact */
get_header();?>


<section class="cntct_banner">
	<div class="wrapper">
		<div class="vertical-parent">
			<div class="vertical-align">
				<div class="text-hldr">
					<?php $frame1 = get_field('frame1'); if($frame1) : ?>
						<div class="cntct_banner-header fadeIn">
							<h1><?php echo $frame1['header']; ?></h1>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="cntct_frame1 animate-up">
	<div class="card">
		<div class="inlineBlock-parent">
			<div class="form-hldr">
				<div class="form-cntnr">
					<?php $frame1 = get_field('frame1'); if($frame1) : ?>
					<div class="form-header">
						<h1><?php echo $frame1['card_header']; ?></h1>
					</div>
					<?php endif; ?>
					<?php echo do_shortcode( '[wpforms id="17"]' ); ?>
				</div>
			</div
			><div class="info-hldr">
				<?php $mapcoordinates = get_field('map_coordinates'); if($mapcoordinates) : ?>
				<iframe
				  width="100%"
				  height="100%"
				  frameborder="0" style="border:0"
				  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAzPPSOyGrO0S9NyW0oa64rtUZw43a4I5Q
				    &q=<?php echo $mapcoordinates['x_axis']; ?>, <?php echo $mapcoordinates['y_axis']; ?>" allowfullscreen>
				</iframe>
			<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>