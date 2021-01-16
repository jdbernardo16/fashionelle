<?php
/* Template Name: About */
get_header();?>

<?php $frame1 = get_field('frame1'); if($frame1) : ?>
<section class="abt_frame1">
	<div class="abt_frame1-bg fadeIn" style="background-image: url(<?php echo esc_url($frame1['background']); ?>)">
		<div class="overlay"></div>
	</div>
	<div class="wrapper staggerup_hldr">
		<div class="vertical-parent">
			<div class="vertical-align">
				<div class="text-hldr">
					<div class="abt_frame1-hdr staggerup">
						<h1><?php echo $frame1['header']; ?></h1>
					</div>
					<div class="abt_frame1-text staggerup">
						<p><?php echo $frame1['description']; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<section class="abt_frame2">
	<div class="wrapper">
		<?php $frame2 = get_field('frame2'); if($frame2) : ?>
			<div class="abt_frame2-hdr fadeIn">
				<h1><?php echo $frame2['header']; ?></h1>
			</div>
		<?php endif; ?>
		<?php while ( have_rows( 'frame2' ) ) : the_row(); ?>
		<div class="abt_slider staggerup_hldr1">
			<?php while ( have_rows( 'items' ) ) : the_row(); ?>
				<div class="abt_slider-item staggerup1">
					<div class="item-hldr">
						<img src="<?php the_sub_field('icon'); ?>" alt="">
						<div class="item-desc">
							<p><?php the_sub_field('item_name'); ?></p>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
		</div>
		<?php endwhile; ?>
	</div>
</section>

<?php $frame3 = get_field('frame3'); if($frame3) : ?>
<section class="abt_frame3">
	<div class="wrapper">
		<div class="inlineBlock-parent">
			<div class="shopee-img">
				<div class="image-hldr animate-left" style="background-image: url(<?php echo esc_url($frame3['left_image']);?>);"></div>
			</div
			><div class="abt_frame3-content staggerup_hldr2">
				<div class="abt_frame3-hdr staggerup2">
					<h1><?php echo $frame3['header']; ?></h1>
				</div>
				<div class="abt_frame3-desc staggerup2">
					<p><?php echo $frame3['description']; ?></p>
				</div>
				<div class="btn-hldr staggerup2">
					<a href="<?php echo esc_url($frame3['shopee']); ?>" target="_blank">
						<div class="btn">
							<p>Visit</p>
						</div>
					</a>
				</div>
				
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<?php get_footer();?>