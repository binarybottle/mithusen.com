<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();?>

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
.modal-backdrop.in {
  opacity: 0.95;
}
</style>
<?php /* get_template_part( 'thoughts-page/sidebar-project' );  */?>


<?php 
while ( have_posts() ) : the_post();
?>
<section id="slider">

	<?php /* <div class="back sli-nav tprev" ></div> */ ?>
    <div class="container">
    	<?php /* <div class="row">
				<div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12 col-xs-12">
					<?php
						$mpath=get_bloginfo( 'template_directory' );
						the_post_navigation( array(
							'next_text' => '<img src="'.$mpath.'/img/right.png">',
							'prev_text' => '<img src="'.$mpath.'/img/right.png">' ,
						) );
					?>
				</div>
				<div class="clearfix"></div>
        </div> */ ?>
    	       <div class="row slider_row">
			   <a onclick="window.open('http://mithusen.in/?page_id=216')" title="Back">
<img class="rightew" title="news-diary"src="http://mithusen.in/wp-content/themes/Mithu/img/bp-1.png" />
</a>
					<div id="main_slidera" class="main_slider">
					<?php $i=1; 
					
					$thumb_post = get_post(get_post_thumbnail_id());
				$title = $thumb_post ? $thumb_post->post_title : '';
					?>
					
					<img id="gallery-<?php echo $i; ?>" data-item="<?php echo $i; ?>" data-title="<?php echo $title; ?>" src="<?php echo get_the_post_thumbnail_url(); ?>" />
						<?php ++$i; ?>
						<?php 
							$images = get_field('gallery');
							
							if( $images ): ?>
									<?php
										foreach( $images as $image ): 
											//$title = get_post(get_post_thumbnail_id())->post_title;
									?>
										<img id="gallery-<?php echo $i; ?>" data-title="<?php echo $image['title']; ?>" data-item="<?php echo $i; ?>" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
										
									<?php $i++; endforeach; ?>
							<?php endif; ?>
					</div>
					<div class="slider-nav">
						<div class="sli-nav tprev" title="Previous"></div>
						<div class="sli-nav tnext" title="Next"></div>
						<div class="clearfix"></div>
					</div>
						
				</div> 
				<div class="row">
					<div class="text">
					<div class="a_q">
					<span class="sounda exc"></span>
					</div>
					<div class="a_q1">
				     <span class="number"><span id="currentIndex">1</span>-<?php echo --$i; ?></span>
					 </div>
					 <div class="clearfix"></div>
					<div class="ploading">
   	                    <p class="heading-slider"><strong><?php the_title();?></strong>
                        <a href="javascript:void(0)" id="showdes" ><img title="more" class="loadIt" src="<?php bloginfo('template_url')?>/img/red-logo.gif" /></a>
                        </p>
						<div class="load-content" id="asx"><?php the_content(); ?></div>
                    </div>
					</div>
				    
					
				</div>
</section>
<?php
endwhile;?>
<?php get_template_part( 'thoughts-page/projects' ); ?>

<?php get_footer(); ?>

<?php get_template_part( 'thoughts-page/scripts' ); ?>
<script>
jQuery(".tnext").click(function(){
	var totalItems = jQuery('.owl-item').length;
	var currentIndex=document.getElementById("currentIndex").innerHTML;
	if(currentIndex==totalItems){
		currentIndex=1;
	}
	else{
		//parseInt(stringValueX, 10)
		var currentIndex=parseInt(document.getElementById("currentIndex").innerHTML,10)+1;
	}
	jQuery('#currentIndex').html(currentIndex);
	var title=jQuery("#gallery-"+currentIndex).attr("data-title");
	jQuery(".sound").html(title);
	
	
})


jQuery(".tprev").click(function(){
	var totalItems = jQuery('.owl-item').length;
	var currentIndex=document.getElementById("currentIndex").innerHTML;
	if(currentIndex==1){
		currentIndex=totalItems;
	}
	else{
		var currentIndex=document.getElementById("currentIndex").innerHTML-1;
	}
	jQuery('#currentIndex').html(currentIndex);
	var title=jQuery("#gallery-"+currentIndex).attr("data-title");
	jQuery(".sound").html(title);
	
})

jQuery("#showdes").click(function(){
	
	jQuery('html,body').animate({ scrollTop: 1111119999 }, 'slow');
})
jQuery(document).ready(function(){
	var title=jQuery("#gallery-1").attr("data-title");
	jQuery(".sounda").html(title);
});

</script>
<div id="downlast"></div>