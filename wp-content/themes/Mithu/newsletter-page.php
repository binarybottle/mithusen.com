<?php
/**
 * Template Name:Newsletter
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php get_template_part( 'thoughts-page/styles' ); ?>
<style>
.thought-page {
	display:none
}
html {
	overflow:auto
}
body {
  background: #c6c6c6;
}
</style>
<?php get_template_part( 'thoughts-page/sidebar' ); ?>

<section id="work">
    <div class="container">
    	<div class="row">
            <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12 col-xs-12">
                <p class="med_h"><?php echo get_the_title(); ?></p>
            </div>
        </div>
    	<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="work-detail">
				<?php $args=array('post_type'=>'newsletter','post_status'=>'publish','posts_per_page'=>-1,'order'=>'desc'); 
				$newsletter_query = new WP_Query( $args );
				while($newsletter_query->have_posts()): $newsletter_query->the_post();
					$blank = get_field('is_blank');
					 ?>
						<li <?php if(isset($blank[0])&&$blank[0]=='Yes'){ ?> class="medium-blank" <?php  } ?> >
							<?php 
								if(isset($blank[0])&&$blank[0]=='Yes'){
							?>
									<a data-gall="works" data-overlay="rgba(255,255,255,0.5)"  title="Project Name" href="#">
										<img src="<?php echo home_url('/')?>/wp-content/uploads/2017/04/work_1-300x205.jpg" class="wp-post-image" alt="" width="234" height="160">
									</a>
							<?php	
								}
								else
								{
							?>
							<a data-gall="works" data-overlay="rgba(255,255,255,0.5)"  title="Project Name" href="<?php the_permalink(); ?>">
								<?php
									if(get_field('video')){
								?>
										<video autoplay loop muted>							 
											<source src="<?php echo get_field('video'); ?>" type="video/mp4">		
										</video>
								<?php
									}
									else
									{
									the_post_thumbnail('large');
								?>
								
								
								<?php } ?>
								<span><?php echo get_the_title(); ?></span>
							</a>
						</li>
					<?php } endwhile; wp_reset_postdata();?>
                </ul>
			</div>
        </div>
    </div>
</section>
<?php get_template_part( 'thoughts-page/projects' ); ?>

<?php get_footer(); ?>

<?php get_template_part( 'thoughts-page/scripts' ); ?>