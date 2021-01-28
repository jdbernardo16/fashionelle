<?php get_header();?>

<?php $frame1 = get_field('frame1'); if( $frame1 ): ?>
<section class="hm_frame1">
	<div class="wrapper">
		<div class="inlineBlock-parent">
			<div class="image-left fadeIn">
				<div class="image" style="background-image: url(<?php echo esc_url( $frame1['left_image'] ); ?>)"></div>
			</div
			><div class="cntnr-right staggerup_hldr">
				<div class="vertical-parent">
					<div class="vertical-align">
						<div class="cntnr-wrapper">
							<div class="hm_frame1-header staggerup">
								<h1><?php echo $frame1['header']; ?></h1>
							</div>
							<div class="hm_frame1-text staggerup">
								<p><?php echo $frame1['description']; ?></p>
							</div>
							<div class="button-hldr staggerup">
								<a href="<?php echo esc_url( $frame2['about_link'] ); ?>">
									<div class="btn">
										<p>About</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<section class="hm_frame2">
	<div class="wrapper">
		<?php $frame2 = get_field('frame2'); if( $frame2 ): ?>
		<div class="hm_frame2-header animate-up">
			<h1><?php echo $frame2['header']; ?></h1>
		</div>
		<?php endif; ?>

		<div class="product-cntnr staggerup_hldr2">
			<?php while ( have_rows( 'frame2' ) ) : the_row(); ?>
			<div class="featured-slick">
				<?php while ( have_rows( 'featured_product' ) ) : the_row(); ?>
				<div class="product-hldr staggerup2">
					<div class="product-img" style="background-image: url(<?php the_sub_field( 'image' ) ?>)"></div>
					<div class="product-desc">
						<p><?php the_sub_field('text') ?></p>
					</div>
					<div class="product-btn">
						<a href="<?php the_sub_field('link') ?>" target="_blank">
							<div class="btn">
								<p>View Product</p>
							</div>
						</a>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php $frame3 = get_field('frame3'); if( $frame3 ): ?>
<section class="hm_frame3">
	<div class="hm_frame3-bg">
		<div class="bg-item fadeIn" style="background-image: url(<?php echo esc_url( $frame3['center_image'] ); ?>)"></div>
	</div>
	<div class="frm-cntnr">
		<div class="wrapper">
			<div class="inlineBlock-parent">
				<div class="left-cntnr">
					<div class="card staggerup_hldr3">
						<div class="card-wrapper">
							<div class="card-header staggerup3">
								<h1><?php echo $frame3['header']; ?></h1>
							</div>
							<div class="card-text staggerup3">
								<p><?php echo $frame3['description']; ?></p>
							</div>
							<div class="card-btn staggerup3">
								<a href="<?php echo esc_url($frame3['contact_link'] ); ?>">
									<div class="btn">
										<p>LET'S CHAT</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div
				><div class="right-cntnr">
					<div class="image-cntnr animate-right">
						<div class="image" style="background-image: url(<?php echo esc_url( $frame3['right_image'] ); ?>)"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>



<section class="hm_frame4">
	<div class="wrapper staggerup_hldr4">
		<div class="hm_frame4-header staggerup4">
			<?php $frame4 = get_field('frame4'); if($frame4): ?>
				<h1><?php echo $frame4['header']; ?></h1>
			<?php endif; ?>
		</div>
		<!-- Repeater Inside Group -->
		<?php while ( have_rows( 'frame4' ) ) : the_row(); ?>
			<div class="comments-hldr staggerup4">
			    <?php while ( have_rows( 'clients_quote' ) ) : the_row(); ?>
					<div class="comments">
				         <?php the_sub_field( 'quote' ); ?>
					</div>
			    <?php endwhile; ?>
			</div>
		<?php endwhile; ?>
		</div>
</section>

<section class="hm_frame5">
	<div class="hm_frame5-bg"></div>
	<div class="wrapper">
		<?php $frame5 = get_field('frame5'); if($frame5): ?>
		<div class="hm_frame5-header fadeIn">
			<h1><?php echo $frame5['header']; ?></h1>
		</div>
		<?php endif;?>
		<div class="image-hldr">
		<?php while (have_rows('frame5')) : the_row();?>
			<div class="ig-slick staggerup_hldr5">
				<?php while( have_rows( 'images') ) : the_row(); ?><a class="staggerup5" href="<?php the_sub_field( 'ig_link' ); ?>" target="_blank">
					<div class="image" style="background-image: url(<?php the_sub_field('ig_image');?>);"></div>
				</a
				><?php endwhile; ?>
				
			</div>
		<?php endwhile; ?>
		</div>
	</div>
</section>


<?php get_footer();?>
