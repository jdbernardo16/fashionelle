<?php
/* Template Name: Products */
get_header();?>

<?php $frame1 = get_field('frame1'); if($frame1): ?>
<section class="prdct-banner">
	<div class="banner" style="background-image: url(<?php echo esc_url($frame1['background']); ?>)">
		<div class="gradient">
			<div class="wrapper">
				<div class="vertical-parent">
					<div class="vertical-align">
						<div class="product-header fadeIn">
							<h1><?php echo $frame1['header']; ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>

<section class="prdct_frame1">
	<div id="tabs" class="wrapper">
		<div class="inlineBlock-parent">
			<div class="prdct_menu align-t">
				<div class="side_menu-hldr">
					
					<div class="side_menu">
						<div class="menu-title">
							<p>Product Menu</p>
						</div>
						<?php if( have_rows('product_category') ): ?>
						    <?php while( have_rows('product_category') ): the_row(); ?>
								<div class="side_menu-item" @click="activetab = <?php echo get_row_index(); ?>" v-bind:class="{'active':activetab == <?php echo get_row_index(); ?>}">
									<a><?php the_sub_field('category'); ?></a>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div
			><div class="product_list-cntnr alignt fadeIn">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if( have_rows('product_category') ): ?>
						<?php while( have_rows('product_category') ): the_row(); ?>
							<transition name="slide-fade">
							<div v-if="activetab == <?php echo get_row_index(); ?>" class="inlineBlock-parent">
								<?php if( have_rows('product') ): ?>
									<?php while( have_rows('product') ): the_row(); ?><div class="product_hldr">
											<div class="product">
												<div class="product-image" style="background-image: url(<?php the_sub_field('image'); ?>)"></div>
												<div class="product-name">
													<p><?php the_sub_field('name'); ?></p>
												</div>
												<div class="product-btn">
													<a href="<?php the_sub_field('link'); ?>">
														<div class="btn">
															<p>View</p>
														</div>
													</a>
												</div>
											</div>
										</div
										><?php endwhile; ?>
								<?php endif; ?>
							</div>
							</transition>
						<?php endwhile; ?>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer();?>