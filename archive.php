<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
	</head>
	<body>
		<?php get_template_part( 'views/navigation' ); ?>
		<div id="hero-sermon-series" class="hero container-fluid pad-top">
			<div class="row text-center">
				<h1>Events</h1>
			</div>
		</div>
		<div id="sermon-archive" class="hero container-fluid">
			<div class="row">
				<div class="col-md-8">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article class="row embee_event">
							<div class="col-md-12 col-sm-12">
								<h2>
									<a href="<?php echo get_permalink(); ?>"><?php echo the_title(); ?></a> <br>
									<small><span class="glyphicon glyphicon-calendar"></span> Sunday January 17, 2016 at 6:00PM</small>
								</h2>
								<p>You Are Unstoppable in 2016! Meet us at ALPHA Revival 2016 for a New Beginning in your Faith, in your Family, in your Legacy. ALPHA Revival will be January 17th-22nd at New Jerusalem
								</p><p><a class="read_more" href="http://newjc.org/events/2016/01/alpha-revival/">Read More</a></p>
							</div>
						</article>
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
