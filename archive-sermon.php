<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="navigation">
			<div class="row">
				<h1 id="logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/monument-logo-white.png" /></a></h1>
				<ul id="location-menu" class="nav nav-pills pull-right">
					<li role="presentation"><a href="<?php echo home_url('watch'); ?>">Watch Live</a></li>
					<li role="presentation"><a href="<?php echo home_url('sermons'); ?>">Sermons</a></li>
					<li role="presentation"><a href="<?php echo home_url('give'); ?>">Give</a></li>
					<li role="presentation"><a href="<?php echo home_url('our-story'); ?>">Our Story</a></li>
					<li role="presentation"><a href="#">Menu <i class="fa fa-bars"></i></a></li>
				</ul>
			</div>
		</div>
		<div id="hero-sermon-series" class="hero container-fluid">
			<div class="row text-center">
				<h5>Current Sermon Series</h5>
				<h3>Redemption</h3>
				<p>In preparation for the Easter Season, Dr. Williams imparts a life changing word about the death, burial and resurrection of our Lord and Savior, Jesus Christ.</p>
				<p>Visit us this Sunday to experience this word for yourself</p>
			</div>
		</div>
		<div id="sermon-archive" class="hero container-fluid">
			<div class="row">
				<div class="col-md-8">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="col-md-6">
							<a class="sermon-preview" href="<?php echo get_permalink(); ?>">
								<div class="background" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>);"></div>
								<div class="content">
									<h3><?php the_title(); ?></h3>
									<span class="preacher"><?php echo get_post_meta( get_the_ID(), 'sermon_preacher', true ); ?></span>
								</div>
							</a>
						</div>
					<?php endwhile; else : ?>
						<p><?php _e( 'There are no sermons published at this time.' ); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- <div id="hero-testify" class="hero container-fluid">
			<div class="row text-center">
				<a class="btn btn-default">More Sermons</a>
			</div>
		</div> -->
		<?php get_template_part( 'views/footer' ); ?>
		<?php wp_footer(); ?>
	</body>
</html>