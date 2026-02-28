<?php 
$args=array('post_type'=>'mediums','post_status'=>'publish','posts_per_page'=>-1,'order'=>'asc'); 

$medium_query = new WP_Query( $args );
$i=0;
while($medium_query->have_posts()): $medium_query->the_post();
?>
				 
				 <div class="modal modal-fullscreen fade" id="<?php echo str_replace(',','',str_replace(':','',str_replace(')','',str_replace('(','',str_replace(' ','_',strtolower(get_the_title()))))));?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">		
	<div class="modal-dialog">		
		<div class="modal-content">			
			<div class="modal-header">								
				<button type="button" class="close cancil" data-dismiss="modal"><span>Un</span></button>	
			</div>						
			<div class="modal-body">				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywords_1">			
										
				</div>	
  							
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cva">		
					<div class="col-sm-6">
					<div class="left med_q">	
					<?php 
					$images1 = get_field('single_image');

					?>
					<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" /></a>
							

					</div>	
					</div>	
					<div class="col-sm-6">				
					<div class="right med_m">											
					<p style="color:rgba(180,180,180,1);"> 
					<?php echo get_field("description", get_the_ID(), true); ?> 
					</p>	

					</div>	
					</div>					
				</div>					
			</div>				
		</div>		
	</div>
</div>

				 
				 
				 
				 
				 
					
				  <?php 
				  
				endwhile; wp_reset_postdata();
				 ?>
				
						


