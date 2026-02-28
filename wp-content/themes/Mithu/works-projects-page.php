<?php
/**
 * Template Name: Works Projects
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
#logo,#nav {
	display:none;
}
html, body {
  	font-family: "Comic Sans MS", "Comic Sans", "Comic Neue", sans-serif;
	width:100%; 
	height:100%; 
	padding:0px; 
	margin:0px;
	background: #6F7475; /* Old browsers */
	background: -moz-linear-gradient(0deg,  #6F7475 50%, #283139 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, right bottom, color-stop(50%,#6F7475), color-stop(100%,#283139)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(0deg,  #6F7475 50%,#283139 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(0deg,  #6F7475 50%,#283139 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(0deg,  #6F7475 50%,#283139 100%); /* IE10+ */
	background: linear-gradient(0deg,  #6F7475 50%,#283139 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#6F7475', endColorstr='#283139',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
	background-attachment: fixed
}

#projector {
  position: absolute; 
  top: 0px;
  left: 0px;
  width:100%;
  height:100%;
} 
#lines {
  position: absolute; 
  top: 0px;
  left: 0px;
  width:100vw;
  height:100vh;
} 

.center-div {
	width:580px;
    height:374px;
    position:absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
}

#preloaderDiv
{
	position:absolute;
	top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
}

#logo{
	opacity:0;
    filter: alpha(opacity=0);
}
.animateIt {
  color: white;
  font-size: 24px !important;
  left: 0;
  position: fixed;
  top: 94%;
  left: 2%;
  opacity:1;
  z-index:6;
}
.animateIt:hover{
  font-size: 26px !important;
  cursor:pointer;
}
.studio-icon-div{
  cursor: pointer;
  opacity: 1;
  position: fixed;
  top: 90%;
  left: 5%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
  z-index: 2;
  
}
.roof-icon-div{
  cursor: pointer;
  opacity: 1;
  position: fixed;
  top: 9%;
  left: 5%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
  z-index: 1;
  
}
.studio-icon{
  width: 80px;
}
.roof-icon{
  width: 50px;
}
.spiral-icon-div{
  opacity: 1;
  position: fixed;
  top: 9%;
  left: 96%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
  z-index: 6;
  
}
.left-menu{
  opacity: 1;
  position: fixed;
  top: 50%;
  left: 7%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
  font-size: 18px;
  color: white; 
  z-index: 10;
}
.left-menu p{
  margin: 0 0 0px;
}
.title-div{
  text-align:center;
  position: absolute;
  top: 9%;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
  z-index:6;
}
.title-div a {
  text-decoration: none !important;
  display: inline-block;
}
.title-text-icon{
  text-align:center;
  color: white !important;
  font-size: 45px;
  transition: 2s;
}
.title-text-icon:hover{
  opacity: 0.8;
}
.spiral-icon{
  width:60px;
  cursor:pointer;
}
.left-menu-links{
  color:white;
  transition: 0.8s;
  font-size: 14px;
  text-decoration: none;
}
.left-menu-links:hover{
  color:white;
  font-size:15px;
}
.project-menu{
  opacity: 0;
  transition: 0.5s;
  background-color: rgba(0,0,0,0);
  padding: 5px;
  right: 2%;
  color: white;
  position: fixed;
  top: 15%;
  width: 200px;
  height: calc(100vh - 15%);
  overflow-y: scroll;
  z-index: 4;
}
.project-menu a{
  text-decoration: none;
  color: #ffffffc3;
}
.project-menu a:hover{
  color: white;
}  
/* width */
::-webkit-scrollbar {
  width: 0px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: grey;
  border-radius: 10px;
}
/*Work Page*/
.blank{
	width:2%;
	padding: 0;
}

.work-detail {
  list-style: none;
  padding: 240px 17% 240px 8%;
  position: fixed;
  overflow-y: scroll;
  height: 100vh;
  z-index: 3;
}
.work-detail > li {
  display: inline-block;
  padding: 0;
  width: 24.10%;
  position:relative;
  transition:all 300ms;
  -o-transition:all 300ms;
  -moz-transition:all 300ms;
  -webkit-transition:all 300ms;
}
.row{
  margin: 0px !important;
}
.work-detail a {
  display: block;
  position:relative;
  z-index:2;
}
ul.work-detail img {
  opacity:0.85;
  filter: grayscale(1);
  -o-filter: grayscale(1);
  -moz-filter: grayscale(1);
  -webkit-filter: grayscale(1);
  transform:scale(1);
  -o-transform:scale(1);
  -moz-transform:scale(1);
  -webkit-transform:scale(1);
  transition:all 300ms;
  -o-transition:all 300ms;
  width:100%;
  height:auto;
  -moz-transition:all 300ms;
  -webkit-transition:all 300ms;
}

ul.work-detail a:hover img,ul.work-detail li.active a img {
  opacity:1;
  transform: scale(1.05);
  -o-transform: scale(1.05);
  -moz-transform: scale(1.05);
  -webkit-transform: scale(1.05);
  filter: grayscale(0);
  -o-filter: grayscale(0);
  -moz-filter: grayscale(0);
  -webkit-filter: grayscale(0);
}
.work-detail span {
  color: #F8F4F5;
  font-size:0;
  left: 4px;
  position: absolute;
  text-align: left;
  text-shadow: 0 0 1px #000000;
  bottom: 2px;
  transition:all 300ms;
  -o-transition:all 300ms;
  -moz-transition:all 300ms;
  -webkit-transition:all 300ms;
}
.work-detail > li:hover span,.work-detail > li.active span {
  font-size: 16px;
}
.work-detail.medium-detail > li:hover span {
  font-size: 34px;
}
.work-detail.medium-detail {
  padding: 0 5% 100px;
}
.work-detail.medium-detail > li:nth-child(2),.work-detail.medium-detail > li:nth-child(3),.work-detail.medium-detail > li:nth-child(6),.work-detail.medium-detail > li:nth-child(7) {
  width: 41%;
}
.work-detail.medium-detail > li:first-child,.work-detail.medium-detail > li:nth-child(4),.work-detail.medium-detail > li:nth-child(5),.work-detail.medium-detail > li:nth-child(8) {
  width: 58%;
}
.main-menu {
  opacity: 0.75;
}
.main-menu:hover{
  opacity: 1;
}
.top-menu span{ 
  font-size: 18px;
  margin: 0px 10px;
}
.back-tooltip .back-tooltiptext {
  visibility: hidden;
  width: 250px;
  border-radius: 10px;
  left:120%;
  top:25%;
  color: #fff;
  text-align: left;
  position: absolute;
  z-index: 1;
  
  /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
  opacity: 0;
  transition: opacity 1s;
}

.back-tooltip:hover .back-tooltiptext {
  visibility: visible;
  opacity: 1;
}
.projects-tooltip .projects-tooltiptext {
  visibility: hidden;
  width: fit-content;
  border-radius: 10px;
  left:-120%;
  top:25%;
  color: #fff;
  text-align: left;
  position: absolute;
  z-index: 1;
  
  /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
  opacity: 0;
  transition: opacity 1s;
}

.projects-tooltip:hover .projects-tooltiptext {
  visibility: visible;
  opacity: 1;
}
	
.has-tooltip:hover .tooltip-text {
    visibility: visible;
    opacity: 1;
}

.tooltip-text {
  visibility: hidden;
  width: 300px;
  border-radius: 1px;
  left:115%;
  color: #fff;
  text-align: left;
  position: absolute;
  z-index: 100;
  background-color: #6F7475;
  padding: 0.75rem 1rem;
  /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
  opacity: 0;
  transition: opacity 1s;
  font-size : 14px;
}

@media only screen and (max-width: 768px){
  html, body{
    font-family: 'Comic Neue', sans-serif;
	}
  .title-div{
    width: fit-content;
  }
  .spiral-icon{
  	width:45px;
  }
  .roof-icon-div{
    top: 6%;
    left: 7%;
  }
  .spiral-icon-div{
    top: 6%;
    left: 94%;
  }
  .left-menu{
    display: none;
  }  
  .work-detail {
    padding: 200px 50px 200px 22px;
  }
  .work-detail > li {
  width: 49%;
  }
  #lines{
    display: none;
  }
  .project-menu{
    background: black;
  }
  .work-detail{
    z-index: 4;
  }
  .back-tooltiptext, .projects-tooltiptext{
    display: none;
  }
}

</style>
<canvas id="projector">Your browser does not support the Canvas element.</canvas>
<canvas id="lines">Your browser does not support the Canvas element.</canvas>
    <audio id="myAudio">
      <source src="wp-content/themes/Mithu/img/laughingman2.wav" type="audio/wav">
    </audio>
    <!--<span class="animateIt" onclick="playAudio()" style="font-size: 18px;"><span style="color:#fe0000">Un</span>home</span>-->
    <div class="title-div"> 
        <a href="https://mithusen.in/">
          	 <span class="title-text-icon">mithu sen</span>    
        </a><br>
  		<p class="top-menu"><span><a style="color:white;" href="https://mithusen.in/works-projects">works</a></span>
          <!-- <span><a style="color:white;"class="main-menu" href="https://mithusen.in/words">words</a></span> -->
          <span><a style="color:pink;"class="main-menu" href="https://freemithu.mithusen.in/">freemithu</a></span>
          <span><a style="color:white;"class="main-menu" href="https://mithusen.in/about">about</a></span>
          <span><a style="color:white;" class="main-menu" href="https://mithusen.in/connect">connect</a></span>
  		</p>
	</div>
      	<!-- <div class="studio-icon-div">
              <img onclick="openLeftMenu()" class="studio-icon" src="wp-content/uploads/2017/04/Spiral.webp"> 
          </div> -->
		<div class="roof-icon-div back-tooltip">
              <img onclick="history.back()" class="roof-icon" src="wp-content/themes/Mithu/img/icons8-spiral-64.png"><span class="back-tooltiptext" style="font-size:13px;">back</span>
          </div>
		<div class="spiral-icon-div projects-tooltip">
      		<img class="spiral-icon" src="wp-content/uploads/2017/04/Spiral.webp" onclick="openProjectMenu()"><span class="projects-tooltiptext" style="font-size:13px;">projects</span>  
          </div>
		<div class="left-menu">
		  	<?php
    		// Get all definitions of un, radical hospitality, untaboo sexuality here
        	$args = array(  
            	'post_type' => 'undefinition',
            	'post_status' => 'publish',
            	'posts_per_page' => -1, 
				'order' => 'ASC'
        	);

    		$loop = new WP_Query( $args ); 
    		$definitions = [];
    		while ( $loop->have_posts() ) : 
        		$loop->the_post(); 
        		$definitions[] = get_field('undefinition_text');        
    		endwhile;
    		wp_reset_postdata(); 
    		?>
          <p class="has-tooltip" style="color:#FCB44A; cursor:default;">
			  <span style="color:#fe0000;font-size:24px;">Un</span>
			   <span class="tooltip-text" style="top:3%">
				  <?php echo $definitions[0]; ?>
			  </span>
			</p>
          <p class="has-tooltip">
			  <a class="left-menu-links" href="" style="cursor:default;">
				  <span style="color:#FCB44A; font-size: 20px">⇝ </span>radical hospitality
			  </a>
			  <span class="tooltip-text" style="top:10%">
				  <?php echo $definitions[1]; ?>
			  </span>
		  </p>
          <p class="has-tooltip">
			  <a class="left-menu-links" href="" style="cursor:default;">
				  <span style="color:#FCB44A; font-size: 20px">⇝ </span>lingual anarchy</a>
			  <span class="tooltip-text" style="top:15%">
				  <?php echo $definitions[2]; ?>
			  </span>
		  </p>
          <p class="has-tooltip">
			  <a class="left-menu-links" href="" style="cursor:default;">
				  <span style="color:#FCB44A; font-size: 20px">⇝ </span>Unmonolith identity
			  </a>
			   <span class="tooltip-text" style="top:20%">
				  <?php echo $definitions[3]; ?>
			  </span>
		  </p>
          <p class="has-tooltip">
			  <a class="left-menu-links" href="" style="cursor:default;">
				  <span style="color:#FCB44A; font-size: 20px">⇝ </span>Untaboo sexuality
			  </a>
			   <span class="tooltip-text" style="top:25%">
				  <?php echo $definitions[4]; ?>
			  </span>
		  </p>
          <p class="has-tooltip">
			  <a class="left-menu-links" href="" style="cursor:default;">
				  <span style="color:#FCB44A; font-size: 20px">⇝ </span>counter capitalism
			  </a>
			  <span class="tooltip-text" style="top:30%">
				  <?php echo $definitions[5]; ?>
			  </span>
		  </p>
		  <br>
          <p class="has-tooltip" style="color:#41dff7; cursor:default;font-size:24px;">
			  byproducts
			  <span class="tooltip-text" style="top:42%">
				  <?php echo $definitions[6]; ?>
			  </span>
		  </p>
          <p>
			  <a class="left-menu-links" href="https://mithusen.in/projects/drawings/">
				  <span style="color:#01b5f2; font-size: 20px">❧ </span>drawing
			  </a>
		  </p>
          <p>
			  <a class="left-menu-links" href="https://mithusen.in/projects/sculpture/">
				  <span style="color:#01b5f2; font-size: 20px">❧ </span>sculpture
			  </a>
		  </p>
          <p>
			  <a class="left-menu-links" href="https://mithusen.in/projects/performance/">
				  <span style="color:#01b5f2; font-size: 20px">❧ </span>performance
			  </a>
		  </p>
          <p>
			  <a class="left-menu-links" href="https://mithusen.in/projects/video-audio/">
				  <span style="color:#01b5f2; font-size: 20px">❧ </span>new media
			  </a>
		  </p>
          <p>
			  <a class="left-menu-links" href="https://mithusen.in/projects/installation/">
				  <span style="color:#01b5f2; font-size: 20px">❧ </span>installation
			  </a>
		  </p>
		  <p>
			  <a class="left-menu-links" href="https://mithusen.in/projects/contracts/">
				  <span style="color:#01b5f2; font-size: 20px">❧ </span>contract
			  </a>
		  </p>

		  <br>
		  <p id="unlanguage" class="has-tooltip" style="color:white; cursor:default;">
			  <span style="color:#fe0000">Un</span>language
			  <span class="tooltip-text" style="top:88%">
				  <?php echo $definitions[7]; ?>
			  </span>
		  </p>
          <p id="unpoetry" class="has-tooltip" style="color:white; cursor:default;">
			  <span style="color:#fe0000">Un</span>poetry
			  <span class="tooltip-text" style="top:95%">
				  <?php echo $definitions[8]; ?>
			  </span>
		  </p>
		
          <!--
			Remove mother tongue and other tongue from left menu
			<p class="mother-tooltip"><a class="left-menu-links" href="" style="cursor:default;"><span style="color:#FCB44A; font-size: 20px">⇝ </span>mother tongue</a><span 					class="mother-tooltiptext" style="font-size:14px;">Monolingualism or Unilingualism imposes a logic that tells us not to smell poetry, hear shadows or taste light. </span>			</p>
          <p class="other-tooltip"><a class="left-menu-links" href="" style="cursor:default;"><span style="color:#FCB44A; font-size: 20px">⇝ </span>other tongue</a><span 			class="other-tooltiptext" style="font-size:14px;">A non-productive, unowned, ephemeral mode of communication not codified by lingua franca.</span></p>-->
		</div>

			<div class="project-menu">
          <!-- <p style="color:#df0025">projects</p> -->
        	<?php 
				$args = array(
              		'post_type'=> 'projects',
              		'orderby'    => 'ID',
              		'post_status' => 'publish',
              		'order'    => 'DESC',
              		'posts_per_page' => -1 // this will retrive all the post that is published 
              	);
				$result = new WP_Query( $args );
				$pjs = [];
             	if ( $result-> have_posts() ) {
           			while ( $result->have_posts()) {
			  			$result->the_post();
			  			if(get_the_title() == "blank" || get_the_title() == "Blank" || !get_field('pj_year')) {
				  			continue;
			  			} else {
							if(!array_key_exists(get_field('pj_year'), $pjs)) {
								$pjs[get_field('pj_year')] = [];
							}
								$pjs[get_field('pj_year')][] = ['url'=>get_the_permalink(),'title'=>get_the_title(),'year'=>get_field('pj_year')];	
						}
					}
				} 
				wp_reset_postdata();
			krsort($pjs);
			foreach($pjs as $year => $pj): 
				 ?>
			<br><span><?php echo $year; ?></span><br>
			<?php foreach ($pj as $p): ?>
			<a href="<?php echo $p['url']; ?>"><span style="color:#faed27; font-size: 18px">❥</span><span><?php echo $p['title']; ?></span></a><br>
			<?php endforeach; ?>
		<?php endforeach; ?>
		</div>

<section id="work">
    <div class="container">
<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <ul class="work-detail">
				<?php $args=array('post_type'=>'projects','post_status'=>'publish','posts_per_page'=>-1,'order'=>'asc'); 
				$works_query = new WP_Query( $args );
				$i=0;
				while($works_query->have_posts()): $works_query->the_post();
				$blank = get_field('is_blank');
				?>
					<li class="unhovered"  onmouseenter="abc(this)" onmouseleave="removeLines(this)" <?php if(isset($blank[0])&&$blank[0]=='Yes'){ ?> class="blank" <?php  } ?> class="<?php echo str_replace(':','',str_replace(')','',str_replace('(','',str_replace(' ','_',strtolower(get_the_title())))));?>">
						<?php 
							if(isset($blank[0])&&$blank[0]=='Yes'){
						?>
								<a data-gall="works" data-overlay="rgba(255,255,255,0)" href="#">
									<!-- <img src="http://mithusen.in/wp-content/themes/Mithu/img/work_1-300x205.jpg" class="wp-post-image" alt="" width="234" height="160"> -->
								</a>
						<?php } else { 
							$menu[$i]['menu_title']=get_post_meta(get_the_ID(),'menu_title',false);
							$menu[$i]['class']=str_replace(' ','-',get_the_title());
						
						?>
						<a data-gall="works" data-overlay="rgba(255,255,255,0.5)" href="<?php the_permalink(); ?>">
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
							 the_post_thumbnail( 'large' ); 
							?>
							
							
							<?php } ?>
							<span><?php the_title(); ?></span>
						</a>
					</li>
				<?php } $i++; endwhile; wp_reset_postdata();?>
				</ul>
			</div>
        </div>
      </div>
</section>
<?php get_footer(); ?>

<script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script>
var meta = document.createElement('meta');
meta.name = "google";
meta.content = "notranslate";
document.getElementsByTagName('head')[0].appendChild(meta); //to remove translate ping
var x = document.getElementById("myAudio"); 

<?php 
	$args=array('post_type'=>'projects','post_status'=>'publish','posts_per_page'=>-1,'order'=>'asc'); 
	$class_query = new WP_Query( $args );
	$all_classifications = ["radical","lingual","unmonolith","untaboo","counter","drawing","sculpture","performance","vidaud","installation","contract","unlanguage", "unpoetry"];
	$projects = [];
	while($class_query->have_posts()) {
		$class_query->the_post();
		//$blank = get_field('is_blank');
		$selected_classifications = get_field('classifications');
		if ($selected_classifications) {
			$project_name = get_the_title();
			$json_object = (object)array();
			//echo $selected_classifications;
			$json_object->name = $project_name;
			foreach($all_classifications as $c) {
				if (in_array($c, $selected_classifications)) {
					$json_object -> $c = "yes";
				} else {
					$json_object -> $c = "no";
				}
			}
			$projects[] = $json_object;
		} 		
	}
	
	wp_reset_postdata();
?>
projects = <?php echo json_encode($projects) ?>;
//console.log(projects);

function playAudio() { 
  	x.play(); 
}  
function openLeftMenu(){
  var elem2 = document.getElementsByClassName("roof-icon-div")[0];
  document.getElementsByClassName("studio-icon")[0].src = "wp-content/themes/Mithu/img/studio1.png";
  frame1();
  	function frame1(){
      elem2.style.opacity = 1;
      document.getElementsByClassName("left-menu")[0].style.opacity = 1;
      elem2.style.top = '9%'; 
      elem2.style.left = '5%';
    }
}
function openProjectMenu(){
  var menu_opa = document.getElementsByClassName("project-menu")[0];
  if (menu_opa.style.opacity == 1){menu_opa.style.opacity = 0; menu_opa.style.zIndex = 3;}
  else {menu_opa.style.opacity = 1; menu_opa.style.zIndex = 5;}
}
function hoverLink(id){
  for(var i = 0; i < 5 ; i++){
  if(i!=id) 
  document.getElementsByClassName("left-menu-links")[i].style.opacity = 0; 
  }
}
function removeHover(id){
  for(var i = 0; i < 5 ; i++){
   if(i!=id)
   document.getElementsByClassName("left-menu-links")[i].style.opacity = 1; 
  }
}
  
var canvas = document.getElementById("lines");
var ctx = canvas.getContext("2d");  
function abc(x){
  var getSpan = x.getElementsByTagName("span")[0];
  var found = projects.find(e => {
	  //console.log(e.name)
	  //console.log(getSpan.innerText)
	  return e.name == getSpan.innerText;
  });

  this.totalWidth = this.canvasWidth = document.getElementById("lines").width = document.getElementById("lines").offsetWidth;
  this.totalHeight = this.canvasHeight = document.getElementById("lines").height = document.getElementById("lines").offsetHeight;
  var concept_1 = document.getElementsByClassName("left-menu-links")[0].getBoundingClientRect();
  var concept_2 = document.getElementsByClassName("left-menu-links")[1].getBoundingClientRect();
  var concept_3 = document.getElementsByClassName("left-menu-links")[2].getBoundingClientRect();
  var concept_4 = document.getElementsByClassName("left-menu-links")[3].getBoundingClientRect();
  var concept_5 = document.getElementsByClassName("left-menu-links")[4].getBoundingClientRect();
  var medium_1 = document.getElementsByClassName("left-menu-links")[5].getBoundingClientRect();
  var medium_2 = document.getElementsByClassName("left-menu-links")[6].getBoundingClientRect();
  var medium_3 = document.getElementsByClassName("left-menu-links")[7].getBoundingClientRect();
  var medium_4 = document.getElementsByClassName("left-menu-links")[8].getBoundingClientRect();
  var medium_5 = document.getElementsByClassName("left-menu-links")[9].getBoundingClientRect();
  var medium_6 = document.getElementsByClassName("left-menu-links")[10].getBoundingClientRect();

  //var mother = document.getElementsByClassName("left-menu-links")[10].getBoundingClientRect();
  //var other = document.getElementsByClassName("left-menu-links")[11].getBoundingClientRect();
  var unlanguage = document.getElementById("unlanguage").getBoundingClientRect();
  var unpoetry = document.getElementById("unpoetry").getBoundingClientRect();

  var rect = x.getBoundingClientRect();
  ctx.beginPath();
  ctx.strokeStyle = "#f6f860";
  ctx.setLineDash([5, 3]);
  if(found.radical == "yes"){
  ctx.moveTo(rect.left, rect.top+5);
  ctx.lineTo((concept_1.left+concept_1.right)/2, concept_1.top+15);
  ctx.stroke(); 
  }
  if(found.lingual == "yes"){
  ctx.moveTo(rect.left, rect.top+5);
  ctx.lineTo((concept_2.left+concept_2.right)/2, concept_2.top+15);
  ctx.stroke(); 
  }
  if(found.unmonolith == "yes"){
  ctx.moveTo(rect.left, rect.top+5);
  ctx.lineTo((concept_3.left+concept_3.right)/2, concept_3.top+15);
  ctx.stroke(); 
  }
  if(found.untaboo == "yes"){
  ctx.moveTo(rect.left, rect.top+5);
  ctx.lineTo((concept_4.left+concept_4.right)/2, concept_4.top+15);
  ctx.stroke(); 
  }
  if(found.counter == "yes"){
  ctx.moveTo(rect.left, rect.top+5);
  ctx.lineTo((concept_5.left+concept_5.right)/2, concept_5.top+15);
  ctx.stroke(); 
  }
   
    
  ctx.beginPath();
  ctx.setLineDash([5, 0]);
  ctx.strokeStyle = "#41dff7";
  
  if(found.drawing == "yes"){
  ctx.moveTo(rect.left, rect.top+5);
  ctx.lineTo((medium_1.left+medium_1.right)/2, medium_1.top+15);
  ctx.stroke(); 
  }
  if(found.sculpture == "yes"){
  ctx.moveTo(rect.left, rect.top+5);
  ctx.lineTo((medium_2.left+medium_2.right)/2, medium_2.top+15);
  ctx.stroke(); 
  }
  if(found.performance == "yes"){
  ctx.moveTo(rect.left, rect.top+5);
  ctx.lineTo((medium_3.left+medium_3.right)/2, medium_3.top+15);
  ctx.stroke(); 
  }
  if(found.vidaud == "yes"){
  ctx.moveTo(rect.left, rect.top+5);
  ctx.lineTo((medium_4.left+medium_4.right)/2, medium_4.top+15);
  ctx.stroke(); 
  }
  if(found.installation == "yes"){
  ctx.moveTo(rect.left, rect.top+5);
  ctx.lineTo((medium_5.left+medium_5.right)/2, medium_5.top+15);
  ctx.stroke(); 
  }
  if(found.contract == "yes"){
  ctx.moveTo(rect.left, rect.top+5);
  ctx.lineTo((medium_6.left+medium_6.right)/2, medium_6.top+15);
  ctx.stroke(); 
  }
  if(found.unlanguage == "yes"){
  ctx.moveTo(rect.left, rect.top+5);
  ctx.lineTo((unlanguage.left+unlanguage.right)/2, unlanguage.top+15);
  ctx.stroke(); 
  }
  if(found.unpoetry == "yes"){
  ctx.moveTo(rect.left, rect.top+5);
  ctx.lineTo((unpoetry.left+unpoetry.right)/2, unpoetry.top+15);
  ctx.stroke(); 
  }
  x.classList.add("hovered");
  x.classList.remove("unhovered");
  const boxes = document.querySelectorAll('.unhovered');

  boxes.forEach(box => {
    box.style.opacity = 0.2;
  });
  document.getElementsByClassName("hovered")[0].style.opacity = 1;
}
function removeLines(x){
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  x.classList.add("unhovered");
  x.classList.remove("hovered");
  const boxes = document.querySelectorAll('.unhovered');

  boxes.forEach(box => {
    box.style.opacity = 1;
  });
}
  
  
////////////////////////// PARTICLE ENGINE ////////////////////////////////////////

var ParticleEngine = (function() {
	'use strict';

	function ParticleEngine(canvas_id) {
		// enforces new
		if (!(this instanceof ParticleEngine)) {
			return new ParticleEngine(args);
		}
		
		var _ParticleEngine = this;

		this.canvas_id = canvas_id;
		this.stage = new createjs.Stage(canvas_id);
		this.totalWidth = this.canvasWidth = document.getElementById(canvas_id).width = document.getElementById(canvas_id).offsetWidth;
		this.totalHeight = this.canvasHeight = document.getElementById(canvas_id).height = document.getElementById(canvas_id).offsetHeight;
		this.compositeStyle = "lighter";

		this.particleSettings = [{id:"small", num:300, fromX:0, toX:this.totalWidth, ballwidth:3, alphamax:0.4, areaHeight:.5, color:"#F0F0F0", fill:false}, 
								{id:"medium", num:100, fromX:0, toX:this.totalWidth,  ballwidth:8, alphamax:0.3, areaHeight:1, color:"#C0C0C0", fill:true}, 
								{id:"large", num:10, fromX:0, toX:this.totalWidth, ballwidth:30,  alphamax:0.2, areaHeight:1, color:"#A0A0A0", fill:true}];
		this.particleArray = [];
		this.lights = [{ellipseWidth:400, ellipseHeight:100, alpha:0.6, offsetX:0, offsetY:0, color:"#D0D0D0"}, 
						{ellipseWidth:350, ellipseHeight:250, alpha:0.3, offsetX:-50, offsetY:0, color:"#B8B8B8"}, 
						{ellipseWidth:100, ellipseHeight:80, alpha:0.2, offsetX:80, offsetY:-50, color:"#F8F8F8"}];

		this.stage.compositeOperation = _ParticleEngine.compositeStyle;
		
		var blurFilter;
		function drawParticles(){

			for (var i = 0, len = _ParticleEngine.particleSettings.length; i < len; i++) {
				var ball = _ParticleEngine.particleSettings[i];

				var circle;
				for (var s = 0; s < ball.num; s++ )
				{
					circle = new createjs.Shape();
					if(ball.fill){
						circle.graphics.beginFill(ball.color).drawCircle(0, 0, ball.ballwidth);
						blurFilter = new createjs.BlurFilter(ball.ballwidth/2, ball.ballwidth/2, 1);
						circle.filters = [blurFilter];
						var bounds = blurFilter.getBounds();
						circle.cache(-50+bounds.x, -50+bounds.y, 100+bounds.width, 100+bounds.height);
					}else{
						circle.graphics.beginStroke(ball.color).setStrokeStyle(1).drawCircle(0, 0, ball.ballwidth);
					}
					
					circle.alpha = range(0, 0.1);
					circle.alphaMax = ball.alphamax;
					circle.distance = ball.ballwidth * 2;
					circle.ballwidth = ball.ballwidth;
					circle.flag = ball.id;
					_ParticleEngine.applySettings(circle, ball.fromX, ball.toX, ball.areaHeight);
					circle.speed = range(2, 10);
					circle.y = circle.initY;
					circle.x = circle.initX;
					circle.scaleX = circle.scaleY = range(0.3, 1);

					_ParticleEngine.stage.addChild(circle);
					

					animateBall(circle);

					_ParticleEngine.particleArray.push(circle);
				}
			}	
		}

		this.applySettings = function(circle, positionX, totalWidth, areaHeight)
		{
			circle.speed = range(1, 3);
			circle.initY = weightedRange(0, _ParticleEngine.totalHeight , 1, [_ParticleEngine.totalHeight * (2-areaHeight/2)/4, _ParticleEngine.totalHeight*(2+areaHeight/2)/4], 0.8 );
			circle.initX = weightedRange(positionX, totalWidth, 1, [positionX+ ((totalWidth-positionX))/4, positionX+ ((totalWidth-positionX)) * 3/4], 0.6);
		}

		function animateBall(ball)
		{
			var scale = range(0.3, 1);
			var xpos = range(ball.initX - ball.distance, ball.initX + ball.distance);
			var ypos = range(ball.initY - ball.distance, ball.initY + ball.distance);
			var speed = ball.speed;
			TweenMax.to(ball, speed, {scaleX:scale, scaleY:scale, x:xpos, y:ypos, onComplete:animateBall, onCompleteParams:[ball], ease:Cubic.easeInOut});	
			TweenMax.to(ball, speed/2, {alpha:range(0.1, ball.alphaMax), onComplete:fadeout, onCompleteParams:[ball, speed]});	
		}	

		function fadeout(ball, speed)
		{
			ball.speed = range(2, 10);
			TweenMax.to(ball, speed/2, {alpha:0 });
		}
		drawParticles();
	}

	ParticleEngine.prototype.render = function()
	{
		this.stage.update();
	}

	ParticleEngine.prototype.resize = function()
	{
		this.totalWidth = this.canvasWidth = document.getElementById(this.canvas_id).width = document.getElementById(this.canvas_id).offsetWidth;
		this.totalHeight = this.canvasHeight = document.getElementById(this.canvas_id).height = document.getElementById(this.canvas_id).offsetHeight;
		this.render();

		for (var i= 0, length = this.particleArray.length; i < length; i++)
		{
			this.applySettings(this.particleArray[i], 0, this.totalWidth, this.particleArray[i].areaHeight);
		}

		for (var j = 0, len = this.lights.length; j < len; j++) {
			this.lights[j].elem.initY = this.totalHeight/2 + this.lights[j].offsetY;
			this.lights[j].elem.initX =this.totalWidth/2 + this.lights[j].offsetX;
			TweenMax.to(this.lights[j].elem, .5, {x:this.lights[j].elem.initX, y:this.lights[j].elem.initY});			
		}
	}

	return ParticleEngine;

}());


////////////////////////UTILS//////////////////////////////////////
//////////////////////////////////////////////////////////////////

function range(min, max)
{
	return min + (max - min) * Math.random();
}
		
function round(num, precision)
{
   var decimal = Math.pow(10, precision);
   return Math.round(decimal* num) / decimal;
}

function weightedRange(to, from, decimalPlaces, weightedRange, weightStrength)
{
	if (typeof from === "undefined" || from === null) { 
	    from = 0; 
	}
	if (typeof decimalPlaces === "undefined" || decimalPlaces === null) { 
	    decimalPlaces = 0; 
	}
	if (typeof weightedRange === "undefined" || weightedRange === null) { 
	    weightedRange = 0; 
	}
	if (typeof weightStrength === "undefined" || weightStrength === null) { 
	    weightStrength = 0; 
	}

   var ret
   if(to == from){return(to);}
 
   if(weightedRange && Math.random()<=weightStrength){
	  ret = round( Math.random()*(weightedRange[1]-weightedRange[0]) + weightedRange[0], decimalPlaces )
   }else{
	  ret = round( Math.random()*(to-from)+from, decimalPlaces )
   }
   return(ret);
}

///////////////// RUN CODE //////////////////////////
//////////////////////////////////////////////////////

var particles
(function(){
	particles = new ParticleEngine('projector');
	createjs.Ticker.addEventListener("tick", updateCanvas);
	window.addEventListener('resize', resizeCanvas, false);

	function updateCanvas(){
		particles.render();
	}

	function resizeCanvas(){
		particles.resize();
	}
}());
</script>
