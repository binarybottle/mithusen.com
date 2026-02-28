<section id="sidebar">
    <div id="sidebar-wrapper" class="col-xs-12">
			<span class="cross"><a href="#"><span>Un</span></a></span>
			<div class="clearfix"></div>
			<h5>Medium/life</h5>
		 <ul id="menu-projects-menu" class="nav nav-sidebar">
				
				
				
			
			<?php $args=array('post_type'=>'mediums','post_status'=>'publish','posts_per_page'=>-1,'order'=>'asc'); 
			$menu_query = new WP_Query( $args );
			$i=0;
			while($menu_query->have_posts()): $menu_query->the_post();
			$blank = get_field('is_blank');

				if(empty($blank[0]) || $blank[0]!='Yes'){
				

			?>
			 <li data-toggle="modal" data-target="#<?php echo str_replace(',','',str_replace(':','',str_replace(')','',str_replace('(','',str_replace(' ','_',strtolower(get_the_title()))))));?>" class="<?php echo str_replace(',','',str_replace(':','',str_replace(')','',str_replace('(','',str_replace(' ','_',strtolower(get_the_title()))))));?>">
			<a href="#"><?php echo get_the_title(); ?></a>
			</li>
			 
				
			  <?php 
			  } 
			endwhile; wp_reset_postdata();
			 ?>
				
				
			</ul> 	
		</div>
</section>
<section id="thought-menu">
	<img class="thought-menu" title="mediums" src="<?php bloginfo("template_url"); ?>/img/red-logo.gif" />	
</section>
<section id="work" class="thought-page">
    <div class="container">
    	<div class="row">
            <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-0 col-sm-12 col-xs-12">
                
             <p class="med_h"><span >thoughts</span></p>
             
            </div>
        </div>
    </div>
</section>