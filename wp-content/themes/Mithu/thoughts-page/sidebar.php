<section id="sidebar">
    <div id="sidebar-wrapper" class="col-xs-12">
			<span class="cross"><a href="#"><span>Un</span></a></span>
			<div class="clearfix"></div>
			<h5>Projects</h5>
			
			<ul id="menu-projects-menu" class="nav nav-sidebar">
			
			<?php $args=array('post_type'=>'projects','post_status'=>'publish','posts_per_page'=>-1,'order'=>'asc'); 
			$sidebar_query = new WP_Query( $args );
			$i=0;
			while($sidebar_query->have_posts()): $sidebar_query->the_post();
			$blank = get_field('is_blank');

				if(empty($blank[0]) || $blank[0]!='Yes'){

			?>
			 <li data-toggle="modal" data-target="#<?php echo str_replace(' ','-',get_the_title()); ?>" class="<?php echo str_replace(':','',str_replace(')','',str_replace('(','',str_replace(' ','_',strtolower(get_the_title())))));?>">
			<a href="#"><?php echo get_field("menu_title", get_the_ID(), true); ?></a>
			</li>
			 
				
			  <?php 
			  } 
			endwhile; wp_reset_postdata();
			 ?>
				<?php /* <li data-toggle="modal" data-target="#leftuntold" class="left_untold_2016">
					<a href="#">Left Untold</a>
				</li>
				<li data-toggle="modal" data-target="#aphasia" class="aphasia_2016">
					<a href="#">Aphasia</a>
				</li>
				<li data-toggle="modal" data-target="#return" class="return_giftsfor_sale_2016">
					<a href="#">Return Gifts:For Sale</a>
				</li>
				<li data-toggle="modal" data-target="#kenopsia" class="kenopsia_2016">
					<a href="#">Kenopsia</a>
				</li>
				<li data-toggle="modal" data-target="#mou" class="mou_2011-2016">
					<a href="#">MOU</a>
				</li>
				<li data-toggle="modal" data-target="#misguide" class="missguide_2016">
					<a href="#">Mis(s)Guide</a>
				</li> */?>
			</ul>			
		</div>
</section>
<section id="thought-menu">
	<img class="thought-menu dta" src="<?php bloginfo("template_url"); ?>/img/red-logo.gif" />	
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