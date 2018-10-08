<?php
/*
 * Template Name: Services Page
 */

get_header();

?>
<main id="bt-main" class="bt-main bt-haslayout">
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<article class="bt-album">
				<figure class="bt-featuredimg" style="max-height:50vh;">
					<?php if(!empty(tasveer_get_field('hero_image'))){ ?>
						<img src="<?php echo esc_url(tasveer_get_field('hero_image')); ?>" alt="<?php the_title(); ?>">
					<?php } ?>
					<!--
					<figcaption>
						<div class="bt-titleandinfo">
							<div class="bt-albumtitle">
								<h3><a href="javascript:void(0);"><?php the_title(); ?></a></h3>
								<ul class="bt-categories">
									<li><a href="javascript:void(0);">Commercial</a></li>
									<li><a href="javascript:void(0);">Fashion</a></li>
									<li><a href="javascript:void(0);">Products</a></li>
									<li><a href="javascript:void(0);">Portraits</a></li>
									<li><a href="javascript:void(0);">Events</a></li>
								</ul>
							</div>
						</div>
					</figcaption>
					-->
				</figure>
			</article>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<!-- <div class="col-xs-1 col-sm-21 col-md-1 col-lg-1 nopadding">
			</div> -->
			<div class="col-xs-6 col-sm-5ths col-md-5ths col-lg-5ths">
				<article class="bt-album">
				<figure class="bt-featuredimg">
					<?php if(!empty(tasveer_get_field('service_1_image'))){ ?>
						<img src="<?php echo esc_url(tasveer_get_field('service_1_image')); ?>" alt="<?php echo tasveer_get_field(service_1); ?>">
					<?php } ?>
					<figcaption>
						<div class="bt-titleandinfo">
							<div class="bt-albumtitle">
								<h3><a onclick="servicesFunction('service_1')" href="javascript:void(0);"><?php echo tasveer_get_field(service_1); ?></a></h3>
							</div>
						</div>
					</figcaption>
				</figure>
				</article>
			</div>
			<div class="col-xs-6 col-sm-5ths col-md-5ths col-lg-5ths">
				<article class="bt-album">
				<figure class="bt-featuredimg">
					<?php if(!empty(tasveer_get_field('service_2_image'))){ ?>
						<img src="<?php echo esc_url(tasveer_get_field('service_2_image')); ?>" alt="<?php echo tasveer_get_field(service_2); ?>">
					<?php } ?>
					<figcaption>
						<div class="bt-titleandinfo">
							<div class="bt-albumtitle">
								<h3><a onclick="servicesFunction('service_2')" href="javascript:void(0);"><?php echo tasveer_get_field(service_2); ?></a></h3>
							</div>
						</div>
					</figcaption>
				</figure>
				</article>
			</div>
			<div class="col-xs-6 col-sm-5ths col-md-5ths col-lg-5ths">
				<article class="bt-album">
				<figure class="bt-featuredimg">
					<?php if(!empty(tasveer_get_field('service_3_image'))){ ?>
						<img src="<?php echo esc_url(tasveer_get_field('service_3_image')); ?>" alt="<?php echo tasveer_get_field(service_3); ?>">
					<?php } ?>
					<figcaption>
						<div class="bt-titleandinfo">
							<div class="bt-albumtitle">
								<h3><a onclick="servicesFunction('service_3')" href="javascript:void(0);"><?php echo tasveer_get_field(service_3); ?></a></h3>
							</div>
						</div>
					</figcaption>
				</figure>
				</article>
			</div>
			<div class="col-xs-6 col-sm-5ths col-md-5ths col-lg-5ths">
				<article class="bt-album">
				<figure class="bt-featuredimg">
					<?php if(!empty(tasveer_get_field('service_4_image'))){ ?>
						<img src="<?php echo esc_url(tasveer_get_field('service_4_image')); ?>" alt="<?php echo tasveer_get_field(service_4); ?>">
					<?php } ?>
					<figcaption>
						<div class="bt-titleandinfo">
							<div class="bt-albumtitle">
								<h3><a onclick="servicesFunction('service_4')" href="javascript:void(0);"><?php echo tasveer_get_field(service_4); ?></a></h3>
							</div>
						</div>
					</figcaption>
				</figure>
				</article>
			</div>
			<div class="col-xs-6 col-sm-5ths col-md-5ths col-lg-5ths">
				<article class="bt-album">
				<figure class="bt-featuredimg">
					<?php if(!empty(tasveer_get_field('service_5_image'))){ ?>
						<img src="<?php echo esc_url(tasveer_get_field('service_5_image')); ?>" alt="<?php echo tasveer_get_field(service_5); ?>">
					<?php } ?>
					<figcaption>
						<div class="bt-titleandinfo">
							<div class="bt-albumtitle">
								<h3><a onclick="servicesFunction('service_5')" href="javascript:void(0);"><?php echo tasveer_get_field(service_5); ?></a></h3>
							</div>
						</div>
					</figcaption>
				</figure>
				</article>
			</div>
			<!-- <div class="col-xs-1 col-sm-21 col-md-1 col-lg-1 nopadding">
			</div> -->
		</div>
		<div id="service_1" class="servicesBody col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3><?php echo tasveer_get_field(service_1); ?></h3>
			<p><?php echo tasveer_get_field(service_1_body); ?></a></p>
			<!-- <figure class="bt-featuredimg">
				<?php if(!empty(tasveer_get_field('service_1_image'))){ ?>
					<img src="<?php echo esc_url(tasveer_get_field('service_1_image')); ?>" alt="<?php echo tasveer_get_field(service_1); ?>">
				<?php } ?>
			</figure> -->
		</div>
		<div id="service_2" class="servicesBody col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3><?php echo tasveer_get_field(service_2); ?></h3>
			<p><?php echo tasveer_get_field(service_2_body); ?></a></p>
			<!-- <figure class="bt-featuredimg">
				<?php if(!empty(tasveer_get_field('service_2_image'))){ ?>
					<img src="<?php echo esc_url(tasveer_get_field('service_2_image')); ?>" alt="<?php echo tasveer_get_field(service_2); ?>">
				<?php } ?>
			</figure> -->
		</div>
		<div id="service_3" class="servicesBody col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3><?php echo tasveer_get_field(service_3); ?></h3>
			<p><?php echo tasveer_get_field(service_3_body); ?></a></p>
			<!-- <figure class="bt-featuredimg">
				<?php if(!empty(tasveer_get_field('service_3_image'))){ ?>
					<img src="<?php echo esc_url(tasveer_get_field('service_3_image')); ?>" alt="<?php echo tasveer_get_field(service_3); ?>">
				<?php } ?>
			</figure> -->
		</div>
		<div id="service_4" class="servicesBody col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3><?php echo tasveer_get_field(service_4); ?></h3>
			<p><?php echo tasveer_get_field(service_4_body); ?></a></p>
			<!-- <figure class="bt-featuredimg">
				<?php if(!empty(tasveer_get_field('service_4_image'))){ ?>
					<img src="<?php echo esc_url(tasveer_get_field('service_4_image')); ?>" alt="<?php echo tasveer_get_field(service_4); ?>">
				<?php } ?>
			</figure> -->
		</div>
		<div id="service_5" class="servicesBody col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<h3><?php echo tasveer_get_field(service_5); ?></h3>
			<p><?php echo tasveer_get_field(service_5_body); ?></a></p>
			<!-- <figure class="bt-featuredimg">
				<?php if(!empty(tasveer_get_field('service_5_image'))){ ?>
					<img src="<?php echo esc_url(tasveer_get_field('service_5_image')); ?>" alt="<?php echo tasveer_get_field(service_5); ?>">
				<?php } ?>
			</figure> -->
		</div>
	</div>
</div>

<?php

//the_field('featured_article');

get_footer();

?>
