<?php 
$args=array('post_type'=>'projects','post_status'=>'publish','posts_per_page'=>-1,'order'=>'asc'); 

$projects_query = new WP_Query( $args );
$i=0;
while($projects_query->have_posts()): $projects_query->the_post();
?>
				 
				 <div class="modal modal-fullscreen fade" id="<?php echo str_replace(',','',str_replace(':','',str_replace(')','',str_replace('(','',str_replace(' ','_',strtolower(get_the_title()))))));?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">		
	<div class="modal-dialog">		
		<div class="modal-content">			
			<div class="modal-header">								
				<button type="button" class="close cancil" data-dismiss="modal"><span>Un</span></button>	
			</div>						
			<div class="modal-body">				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywords">			
					<a class="second"> 
						<?php 
						$images1 = get_field('unmonolith_identity_img');
						$images2 = get_field('untaboo_sexuality');
						$images3 = get_field('lingual_anqwarchy ');
						$images4 = get_field('counter_capitalism');
						$images5 = get_field('radical_hospitality2');

						?>
						<img src="<?php echo $images4['sizes']['large']; ?>" />
						<?php /* <span>counter capitalism </span> */?>
						<span><?php echo get_field( "counter_captitalisn" );?></span>
					</a>							
					<a class="first"> 
						<img src="<?php echo $images3['sizes']['large']; ?>" />
						<?php /* <span>lingual anarchy </span>  */ ?>
						<span><?php echo get_field( "lingual_anarch_1" );?></span>
					</a>										
					<a class="third"> 
						<img src="<?php echo $images2['sizes']['large']; ?>" /> 
						<?php /* <span>untaboo sexuality </span> */ ?>
						<span><?php echo get_field( "untaboo_sexuality-1" );?></span>
					</a>	
					<a class="fifth"> 
					<img src="<?php echo $images1['sizes']['large']; ?>" />
				<?php 	/* <span>unmonolith identity </span> */?>
					 <span><?php echo get_field( "unmonolith_title" );?></span>
					</a>					
					<a class="fourth"> 
						<img src="<?php echo $images5['sizes']['large']; ?>"/> 
						<?php /* <span>radical hospitality </span>  */?>
						<span><?php echo get_field( "radical_hospitality" );?></span>
					</a> 					
				</div>	
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywordsmap">					
					<img class="projects" src="<?php bloginfo("template_url"); ?>/img/projects/pt.png" />		
				</div>								
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content">		
					<div class="left">						
						<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" /></a>
					</div>										
					<div class="right">							
					<a href="<?php the_permalink(); ?>"> <?php echo get_the_title(); ?> </a> <br>				
					<p style="color:rgba(180,180,180,1);"> 
				 <?php echo get_field("project_keyword_description", get_the_ID(), true); ?>
						</p>	
						<a href="http://mithusen.in/?page_id=118"> 
							<img class="spiral" title="read more" src="<?php bloginfo("template_url"); ?>/img/spirals/Embodies-language-spiral.gif" /> 			
						</a>										
					</div>							
				</div>					
			</div>				
		</div>		
	</div>
</div>

				 
				 
				 
				 
				 
					
				  <?php 
				  
				endwhile; wp_reset_postdata();
				 ?>
				
						


<?php /* <div class="modal modal-fullscreen fade" id="embodied" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">		
	<div class="modal-dialog">		
		<div class="modal-content">			
			<div class="modal-header">								
				<button type="button" class="close cancil" data-dismiss="modal"><span>Un</span></button>	
			</div>						
			<div class="modal-body">				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywords">			
					<a class="second"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Counter.png" />
						<span>counter capitalism </span>
					</a>							
					<a class="first"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Lingualpanel).png" />
						<span>lingual anarchy </span> 
					</a>										
					<a class="third"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Untaboopan.png" /> 
						<span>untaboo sexuality </span>
					</a>							
					<a class="fourth"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/radical-hospitality.png" /> 
						<span>radical hospitality </span> 
					</a> 					
				</div>								
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywordsmap">					
					<img class="projects" src="<?php bloginfo("template_url"); ?>/img/projects/embodied.png" />		
				</div>								
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content">		
					<div class="left">						
						<a href="<?php the_permalink(65); ?>"><img src="<?php bloginfo("template_url"); ?>/img/embodied.png" /></a>
					</div>										
					<div class="right">							
						<a> Embodied Language </a> <br>				
						<p style="color:rgba(180,180,180,1);"> A new path to understanding the differences in cultures and celebrating the formation of a new language.....</p>	
						<a href="<?php the_permalink(65); ?>"> 
							<img class="spiral" title="read more" src="<?php bloginfo("template_url"); ?>/img/spirals/Embodies-language-spiral.gif" /> 			
						</a>										
					</div>							
				</div>					
			</div>				
		</div>		
	</div>
</div>







<div class="modal modal-fullscreen fade" id="leftuntold" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">		
	<div class="modal-dialog">		
		<div class="modal-content">			
			<div class="modal-header">								
				<button type="button" class="close cancil" data-dismiss="modal"><span>Un</span></button>	
			</div>				
			<div class="modal-body">				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywords">		
					<a class="fourth"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/radical-hospitality.png" /> 
						<span>radical hospitality </span>
					</a>					
					<a class="second"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/counter-capitalism.png" /> 
						<span>counter capitalism </span> 
					</a>										
					<a class="fifth"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Unmonolith.png" /> 
						<span>unmonolith identity </span>
					</a>					
				</div>								
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywordsmap">				
					<img class="projects" src="<?php bloginfo("template_url"); ?>/img/projects/left.png" />	
				</div>							
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content">			
					<div class="left">						
						<a href="<?php the_permalink(69); ?>"><img src="<?php bloginfo("template_url"); ?>/img/leftuntolddes.png" /></a>
					</div>	
					<div class="right">				
						<a> (Left Untold) </a> <br>												
						<p style="color:rgba(180,180,180,1);"> A deconstructed usual domestic space of borrowed domestic artifacts, temporarily migrated from hundreds of homes in Colombo...</p>												
						<a href="<?php the_permalink(69); ?>"> 			
							<img class="spiral" title="read more" src="<?php bloginfo("template_url"); ?>/img/spirals/Left-untold-spiral.gif" /> 	
						</a>									
					</div>								
				</div>						
			</div>				
		</div>		
	</div>
</div>
<div class="modal modal-fullscreen fade" id="aphasia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">		
	<div class="modal-dialog">		
		<div class="modal-content">			
			<div class="modal-header">								
				<button type="button" class="close cancil" data-dismiss="modal"><span>Un</span></button>		
			</div>					
			<div class="modal-body">	
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywords">				
					<a class="second"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/counter-capitalism.png" /> 
						<span>counter capitalism </span>
					</a>							
					<a class="first"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Lingualpanel).png" /> 
						<span>lingual anarchy </span> 
					</a>										
					<a class="fifth"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Unmonolith.png" /> 
						<span>unmonolith identity </span>
					</a>							
					<a class="fourth"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/radical-hospitality.png" /> 
						<span>radical hospitality </span>
					</a> 
                    <a class="third"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Untaboopan.png" /> 
						<span>untaboo sexuality </span>
					</a>					
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywordsmap">		
					<img class="projects" src="<?php bloginfo("template_url"); ?>/img/projects/pt.png" />		
				</div>								
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content">		
					<div class="left">						
						<a href="<?php the_permalink(103); ?>"><img src="<?php bloginfo("template_url"); ?>/img/aphasiades.png" /></a>	
					</div>					
					<div class="right">			
						<a> Aphasia </a> <br>											
						<p style="color:rgba(180,180,180,1);"> Aphasia was to challenge the given conduct of things that conveniently pass as normal.The debate starts from the blind acceptance...</p>												
						<a href="<?php the_permalink(103); ?>"> 	
							<img class="spiral" title="read more" src="<?php bloginfo("template_url"); ?>/img/spirals/spiral-pink.gif" /> 	
						</a>										
					</div>								
				</div>						
			</div>				
		</div>		
	</div>
</div>
<div class="modal modal-fullscreen fade" id="return" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">		
	<div class="modal-dialog">		
		<div class="modal-content">			
			<div class="modal-header">							
				<button type="button" class="close cancil" data-dismiss="modal"><span>Un</span></button>					
			</div>					
			<div class="modal-body">	
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywords">		
					<a class="fourth"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/redial.png" /> 
						<span>radical hospitality </span>
					</a>				
					<a class="second"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Counter.png" /> 
						<span>counter capitalism </span>
					</a>				
				</div>								
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywordsmap">	
					<img class="projects" src="<?php bloginfo("template_url"); ?>/img/projects/return.png" />
				</div>						
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content">								
					<div class="left">						
						<a href="<?php the_permalink(104); ?>"><img src="<?php bloginfo("template_url"); ?>/img/leftuntolddes.png" /></a>
					</div>										
					<div class="right">					
						<a> Return Gifts: For Sale </a> <br>				
						<p style="color:rgba(180,180,180,1);"> A return gift is given to keep the very relationship between givers alive; a constant reminder of shared emotion and relationship….</p>						
						<a href="<?php the_permalink(104); ?>"> 		
							<img class="spiral" title="read more" src="<?php bloginfo("template_url"); ?>/img/spirals/Return-Gifts-spiral.gif" /> 
						</a>									
					</div>								
				</div>					
			</div>				
		</div>		
	</div>
</div>
<div class="modal modal-fullscreen fade" id="kenopsia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">		
	<div class="modal-dialog">		
		<div class="modal-content">			
			<div class="modal-header">								
				<button type="button" class="close cancil" data-dismiss="modal"><span>Un</span></button>	
			</div>						
			<div class="modal-body">				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywords">			
					<a class="fourth"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/radical-hospitality.png" /> 
						<span>radical hospitality </span>
					</a>							
					<a class="second"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Counter.png" /> 
						<span>counter capitalism </span>
					</a>										
					<a class="first"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Lingualpanel).png" /> 
						<span>lingual anarchy </span>
					</a>					
				</div>								
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywordsmap">					
					<img class="projects" src="<?php bloginfo("template_url"); ?>/img/projects/kenop.png" />		
				</div>								
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content">			
					<div class="left">					
						<a href="<?php the_permalink(105); ?>"><img src="<?php bloginfo("template_url"); ?>/img/projects/Kenopsia 2016.jpg"/></a>									
					</div>										
					<div class="right">												
						<a> Kenopsia </a> <br>					
						<p style="color:rgba(180,180,180,1);"> It meant to evoke many kinds of voids in space and different senses of uncanny that come with them. An installation using sound and drawing….</p>												
						<a href="<?php the_permalink(105); ?>"> 			
							<img class="spiral" title="read more" src="<?php bloginfo("template_url"); ?>/img/spirals/Kenopsia-spiral.gif" /> 		
						</a>										
					</div>								
				</div>						
			</div>				
		</div>		
	</div>
</div>
<div class="modal modal-fullscreen fade" id="mou" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">		
	<div class="modal-dialog">		
		<div class="modal-content">			
			<div class="modal-header">								
				<button type="button" class="close cancil" data-dismiss="modal"><span>Un</span></button>		
			</div>						
			<div class="modal-body">				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywords">			
					<a class="second"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Counter.png" /> 
						<span>counter capitalism </span>
					</a>						
					<a class="fifth"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Unmonolith.png" /> 
						<span>unmonolith identity </span>
					</a>										
					<a class="third"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Untaboopan.png" /> 
						<span>untaboo sexuality </span>
					</a>							
					<a class="fourth"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/radical-hospitality.png" /> 
						<span>radical hospitality </span> 
					</a> 					
				</div>								
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywordsmap">	
					<img class="projects" src="<?php bloginfo("template_url"); ?>/img/projects/mou1.png" />		
				</div>			
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content">			
					<div class="left" style="visibilty:hidden;">						
						<a href="<?php the_permalink(108); ?>"><img src="<?php bloginfo("template_url"); ?>/img/projects/MOU 2016.jpg" /></a>	
					</div>						
					<div class="right">	
						<a> MOU </a> <br>		
						<p style="color:rgba(180,180,180,1);"> MOU is about the politics around the idea of making history and archives, what is chosen to be part of the political, collective, popular history and what is suppressed….</p>												
						<a href="<?php the_permalink(108); ?>"> 
							<img class="spiral" title="read more" src="<?php bloginfo("template_url"); ?>/img/spirals/MOU-Spiral.gif" /> 	
						</a>								
					</div>					
				</div>						
			</div>				
		</div>		
	</div>
</div>
<div class="modal modal-fullscreen fade" id="misguide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">		
	<div class="modal-dialog">		
		<div class="modal-content">			
			<div class="modal-header">						
				<button type="button" class="close cancil" data-dismiss="modal"><span>Un</span></button>	
			</div>				
			<div class="modal-body">		
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywords">						
					<a class="fifth"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Unmonolith.png" /> 
						<span>unmonolith identity </span>
					</a>						
					<a class="first"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Lingualpanel).png" />
						<span>lingual anarchy </span> 
					</a>										
					<a class="third"> 
						<img src="<?php bloginfo("template_url"); ?>/img/projects/Untaboopan.png" />
						<span>untaboo sexuality </span>
					</a>						
					<a class="fourth">
						<img src="<?php bloginfo("template_url"); ?>/img/projects/radical-hospitality.png" /> 
						<span>radical hospitality </span>
					</a> 					
				</div>							
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 keywordsmap">		
					<img class="projects" src="<?php bloginfo("template_url"); ?>/img/projects/miss.png" />		
				</div>								
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 main-content">	
					<div class="left">					
						<a href="<?php the_permalink(137); ?>"><img src="<?php bloginfo("template_url"); ?>/img/projects/Mis(s)Guide 2016.jpg" /></a>
					</div>				
					<div class="right">				
						<a> Mis(s)Guide </a> <br>				
						<p style="color:rgba(180,180,180,1);"> An alternative and participatory tour of the museum engaging the audience with a new narrative of meaning making and engagement by spouting nonsense-speak….</p>
						<a href="<?php the_permalink(137); ?>"> 	
							<img class="spiral" title="read more" src="<?php bloginfo("template_url"); ?>/img/spirals/Mis(s)guide-spiral.gif" /> 		
						</a>										
					</div>								
				</div>						
			</div>				
		</div>		
	</div>
</div> */?>