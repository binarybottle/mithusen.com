<?php
/**
 * The template for displaying all single posts and attachments
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
<?php get_template_part( 'thoughts-page/menu' ); ?>


<?php
while ( have_posts() ) : the_post();
?>
<section id="slider">
	<?php /* <div class="back sli-nav tprev" onclick="window.open('/demo/mithucms/medium/')" title="Back"></div> */?>
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
		 <a href="https://mithusen.in/medium/" title="Back">
<img class="rightew" title="mediums" src="http://mithusen.in/wp-content/themes/Mithu/img/bp-1.png" /></a>
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
<img id="gallery-<?php echo $i; ?>" data-title="<?php echo $image['title']; ?>" data-item="<?php echo $i; ?>" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt'];  ?>">
									
								<?php $i++; endforeach; ?>
						<?php endif; ?>
		</div>
			<div class="slider-nav">
				<div class="sli-nav tprev" title="Previous"></div>
				<div class="sli-nav tnext" title="Next"></div>
                <span class="number medium" id="currentIndex2">1-<?php echo --$i; ?></span>
				<div class="clearfix"></div>
			</div>
		</div> 
		<div class="row">
			<div class="text">
					<span class="tittle-year"></span>
					<?php /* <p class="size-medium">Size/medium: <?php echo get_field('size/medium'); ?>  </p> */?>
				 <p class="series" style="display:none;">Series: <?php echo get_field('series'); ?> <img title="More" class="loadIt" src="<?php bloginfo('template_url')?>/img/red-logo.gif" /></p> 
			</div>
		</div>
            <div class="load-content"><?php the_content(); ?></div>
        </div>
        <div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 qzas" >
			
		<ul class="work-detail medium_inner pk">
					<?php if( $images ): ?>
							<?php foreach( $images as $image ): ?>
								<li>
									<a  data-overlay="rgba(255,255,255,0.5)" class="venobox" title="<?php echo $image['title']; ?>" data-gall="myGallery" href="<?php echo $image['sizes']['large']; ?>" >
									<img id="gallery-<?php echo $i; ?>" data-title="<?php echo $image['title']; ?>" data-item="<?php echo $i; ?>" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt'];  ?>">
									</a>
								</li>
							<?php endforeach; ?>
					<?php endif; ?>
					
				</ul>
			</div>
		</div>
        </div>
		
		
		
		
		
		
		
</section>
<?php
endwhile;?>
<?php get_template_part( 'thoughts-page/mediummodal' ); ?>
<?php get_template_part( 'thoughts-page/projects' ); ?>

<?php get_footer(); ?>

<?php get_template_part( 'thoughts-page/scripts' ); ?>
<script>
jQuery(".tnext").click(function(){
	var totalItems = jQuery('.owl-item').length;
	
	
	
	
	var current=document.getElementById("currentIndex2").innerHTML;
	var res=current.split("-");
	currentIndex=res[0];
	
	
	console.log(totalItems+"-"+currentIndex);
	if(currentIndex==totalItems){
		currentIndex=1;
	}
	else{
		//parseInt(stringValueX, 10)
		var currentIndex=parseInt(document.getElementById("currentIndex2").innerHTML,10)+1;
	}
	jQuery('#currentIndex2').html(currentIndex+"-"+totalItems);
	var title=jQuery("#gallery-"+currentIndex).attr("data-title");
	jQuery(".tittle-year").html(title);
	
	
})


jQuery(".tprev").click(function(){
	var totalItems = jQuery('.owl-item').length;
	//var currentIndex=document.getElementById("currentIndex2").innerHTML;
	
	var current=document.getElementById("currentIndex2").innerHTML;
	var res=current.split("-");
	currentIndex=res[0];
	
	if(currentIndex==1){
		currentIndex=totalItems;
	}
	else{
		var currentIndex=parseInt(document.getElementById("currentIndex2").innerHTML,10)-1;
	}
	jQuery('#currentIndex2').html(currentIndex+"-"+totalItems);
	var title=jQuery("#gallery-"+currentIndex).attr("data-title");
	jQuery(".tittle-year").html(title);
	
})




jQuery("#showdes").click(function(){
	
	jQuery('html,body').animate({ scrollTop: 1111119999 }, 'slow');
})
jQuery(document).ready(function(){
	var title=jQuery("#gallery-1").attr("data-title");
	jQuery(".asound").html(title);
});

</script>
