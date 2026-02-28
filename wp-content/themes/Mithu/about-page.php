<?php
/**
 * Template Name: About
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
	overflow: hidden;
  	scroll-behavior: smooth;
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
  position: absolute;
  top: 94%;
  left: 2%;
  opacity:1;
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
  z-index: 10;
  
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
  z-index: 4;
  
}
.shop-icon-div{
  opacity: 1;
  position: fixed;
  top: 9%;
  left: 96%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  z-index: 4;
  
}
.news-icon-div{
  opacity: 1;
  position: fixed;
  top: 94%;
  left: 96%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
  z-index: 4; 
}
.left-menu{
  opacity: 1;
  position: fixed;
  top: 50%;
  left: 6%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
  font-size: 24px;
  color: white;
  
}
.left-menu p{
  margin: 0 0 10px;
}
.title-div{
  text-align:center;
  position: relative;
  top: 9%;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
  z-index:10;
  width: 50%;
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
.spiral-icon:hover{
  width:60px;
}
.left-menu-links{
  color:white;
  transition: 0.8s;
  font-size: 20px;
  text-decoration: none;
}
.left-menu-links:hover{
  color:white;
  font-size:21px;
}
.project-menu{
  opacity: 0;
  transition: 0.5s;
  background-color: rgba(0,0,0,0);
  padding: 5px;
  right: 0;
  color: white;
  position: fixed;
  top: 15%;
  width: 200px;
  height: 100vh;
  overflow-y: scroll;
  z-index: 3;
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
.projects-links{
  cursor: pointer;
}
.concepts-div{
  text-align:left;
  top: 0px;
  margin-top:150px;
  padding-top:50px;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, 0%);
  transition: 2s;
  width: 55%;
  color:white;
  font-size: 16px;
  position: absolute;
  overflow-y: scroll;
  overflow-x: hidden;
  height: 100vh;
  z-index: 3;
  scroll-behavior: smooth;
}
.banner-img {
  width: 100%;
  text-align: center;
}
.banner-img img{
  width: 70%;
  height: auto;
}
.concepts-div a{
  color: white;
}
button{
  font-family: "Comic Sans MS", "Comic Sans", cursive;
  padding: 3px;
}
.ticker-div{
  background: pink;
  overflow: hidden;
  height: auto;
  max-height: 20vh;
  padding: 0.5rem;
  font-size: 18px;
}
.ticker{
  color: black;
  animation: tic-h 40s linear 0s infinite normal both;

}
@keyframes tic-h {
	0% {
		-webkit-transform: translate3d(0, 0, 0);
		transform: translate3d(0, 0, 0);
		visibility: visible;
	}
	100% {
		-webkit-transform: translate3d(0, -100%, 0);
		transform: translate3d(0, -100%, 0);
	}
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
.news-tooltip .news-tooltiptext {
  visibility: hidden;
  font-weight: bolder;
  width: 250px;
  border-radius: 10px;
  left:-220%;
  top:-100%;
  color: red;
  text-align: left;
  position: absolute;
  z-index: 1;
  
  /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
  opacity: 0;
  transition: opacity 1s;
}

.news-tooltip:hover .news-tooltiptext {
  visibility: visible;
  opacity: 1;
}
.toggle-tooltip .toggle-tooltiptext {
  visibility: hidden;
  width: 250px;
  border-radius: 10px;
  left:130%;
  top:12%;
  color: #fff;
  text-align: left;
  z-index: 1;
  
  /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
  opacity: 0;
  transition: opacity 1s;
}

.toggle-tooltip:hover .toggle-tooltiptext {
  visibility: visible;
  opacity: 1;
}
@media only screen and (max-width: 768px){
  html, body{
    font-family: 'Comic Neue', sans-serif;
	}
  .title-div{
    width: fit-content;
  }
  .concepts-div{
    width: 75%;
    margin-top:135px;
  	padding-top:15px;
  }
  .concepts-div p{
    font-family: Arial;
  }
  .spiral-icon{
  	width:45px;
  }
  .roof-icon-div{
    top: 6%;
    left: 7%;
  }
  .shop-icon-div{
    top: 6%;
    left: 92%;
  }
  .news-icon-div {
    left: 92%;
  }
  .left-menu{
    display: none;
  }
  #lines{
    display: none;
  }
  .project-menu{
    background: black;
  }
  .back-tooltiptext, .projects-tooltiptext{
    display: none;
  }
}

</style>
 	<canvas id="projector">Your browser does not support the Canvas element.</canvas>
    <audio id="myAudio">
      <source src="wp-content/themes/Mithu/img/laughingman2.wav" type="audio/wav">
    </audio>
    <!--<span class="animateIt" onclick="playAudio()" style="font-size: 18px;"><span style="color:#fe0000">Un</span>home</span>-->
    <div class="title-div"> 
        <a href="https://mithusen.in/">
          	 <span class="title-text-icon">mithu sen</span>    
        </a><br>
  		<p class="top-menu"><span><a style="color:white;"class="main-menu" href="https://mithusen.in/works-projects">works</a></span>
          <!-- <span><a style="color:white;"class="main-menu" href="https://mithusen.in/words">words</a></span> -->
          <span><a style="color:pink;"class="main-menu" href="https://freemithu.mithusen.in">freemithu</a></span>
          <span><a style="color:white;" href="https://mithusen.in/about">about</a></span>
          <span><a style="color:white;" class="main-menu" href="https://mithusen.in/connect">connect</a></span>
  		</p>
	</div>
	<?php wp_reset_postdata(); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="concepts-div"><div class="banner-img">
			<?php the_post_thumbnail('medium'); ?><br><?php the_post_thumbnail_caption();?>       
      </div><br>
      <?php 
    if (!empty($_POST) && isset($_POST['gotcha'])  && wp_verify_nonce( $_POST['gotcha'], 'add_bio')) {
        /* 
         * Remove old wpdb custom table and instead shift to comments for easier moderation
         * global $wpdb;
        $table = wp_custom_bio;
        $data = array(
            'name' => $_POST['name'],
            'bio'    => $_POST['bio']
        );
        $success=$wpdb->insert( $table, $data);
        if($success){
            // use wordwrap() if lines are longer than 70 characters
            $msg = wordwrap($_POST['bio'],70);
            // send email
            mail("sen.mithu@gmail.com","Someone Has Added Something To Your Bio", $_POST['name']." says: ".$msg); 
          	// do stuff here
            $url = 'https://mithusen.in/about'; // this can be set based on whatever

            header( "Location: $url" );
        }*/
		
		global $post;

        $commentdata = array(
        	'comment_post_ID'      => $post->ID,             // To which post the comment will show up.
            'comment_approved'     => 0, 
        	'comment_author'       => $_POST['name'],     // Fixed value - can be dynamic.
        	'comment_content'      => $_POST['bio'], // Fixed value - can be dynamic.
        	'comment_type'         => '',                    // Empty for regular comments, 'pingback' for pingbacks, 'trackback' for trackbacks.
        	'comment_parent'       => 0,                     // 0 if it's not a reply to another comment; if it's a reply, mention the parent comment ID here.
        );

        // Insert new comment and get the comment ID.
        $comment_id = wp_new_comment( $commentdata );
        if($comment_id) {
            $msg = wordwrap($_POST['bio'],70);
            // send email
            wp_mail("mithu.sen@gmail.com", "Someone Has Added Something To Your Bio", $_POST['name']." says: ".$msg); 
            $url = 'https://mithusen.in/about'; // this can be set based on whatever
            header( "Location: $url" );
        }
    } else {
        ?>
        <form method="post" id="bio-form">
			<?php wp_nonce_field( 'add_bio', 'gotcha' ); ?>
            <span>donate a line for my bio: </span>
			<input type="text" name="bio">&nbsp;
			<span>name: </span><input type="text" name="name">&nbsp;&nbsp;
			<button>
      			submit
      		</button>
      	</form>
     <div class="ticker-div">
     <p class="ticker">
       What people say:<br>
      <?php 
      
     /*
      * Remove custom bio database, get from comments instead
      * $row = $wpdb->get_results( "SELECT bio FROM wp_custom_bio");
    foreach ( $row as $row ) { 
      echo "<span class='ticker-item'> ".$row->bio." </span>";
    }
     */
		global $post;
    	$args = array(
        	'post_id' => $post->ID,   // Use post_id, not post_ID
        	'status' => 'approve'
    	);
    	$comments = get_comments( $args );
    	foreach ( $comments as $comment ) { 
        	echo "<span class='ticker-item'> ".$comment->comment_content." </span><br>";
      	}
     ?> 
       </p></div>
	<?php the_content(); ?>
		
		<!-- Adding breaking news post -->
		     <?php $args = array(
              'post_type'=> 'page',
              'orderby'    => 'ID',
              'post_status' => 'publish',
      		  'title' => 'news',
              'order'    => 'DESC',
              'posts_per_page' => -1 // this will retrive all the post that is published 
              );
              $result = new WP_Query( $args );
              if ( $result-> have_posts() ) : ?>
              <?php while ( $result->have_posts() ) : $result->the_post(); ?>
          	  <div onclick="toggleContentNews()" id="news" style="font-size:30px; color:red;cursor:pointer;">
                Breaking News
				<img style="display:inline-block;width:32px; height:auto; vertical-align:bottom;" src="../../wp-content/themes/Mithu/img/icons8-spiral-64.png">
      		  </div>
			  <span class="news" style="display:none"><?php the_content(); ?></span>   
              <?php endwhile; ?>
              <?php endif; wp_reset_postdata(); ?>
		
		<!-- Adding bibliography post -->
		
<?php $args = array(
              'post_type'=> 'page',
              'orderby'    => 'ID',
              'post_status' => 'publish',
      		  'title' => 'bibliography',
              'order'    => 'DESC',
              'posts_per_page' => -1 // this will retrive all the post that is published 
              );
              $result = new WP_Query( $args );
              if ( $result-> have_posts() ) : ?>
              <?php while ( $result->have_posts() ) : $result->the_post(); ?>
          	  	<div onclick="toggleContent()" style="font-size:30px; color:red;cursor:pointer;margin-top:20px;">
                	Bibliography
                	<img style="display:inline-block;width:32px; height:auto; vertical-align:bottom;" src="../../wp-content/themes/Mithu/img/icons8-spiral-64.png">
                </div>
				<span class="biblio" style="display:none"><?php the_content(); ?></span>   
              <?php endwhile; ?>
              <?php endif; wp_reset_postdata(); ?>
      
 

<br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
        <?php 
    }  
?>

		<?php
    endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</div>
      	<div class="studio-icon-div">
              <!-- <img onclick="openLeftMenu()" class="studio-icon" src="wp-content/themes/Mithu/img/studio1.png"> -->
          </div>
		<div class="roof-icon-div back-tooltip">
              <img onclick="history.back()" class="roof-icon" src="wp-content/themes/Mithu/img/icons8-spiral-64.png"><span class="back-tooltiptext" style="font-size:13px;">back</span>  
          </div>
		<!-- <div class="spiral-icon-div">
              <img class="spiral-icon" src="wp-content/uploads/2017/04/Spiral.webp" onclick="openProjectMenu()">
          </div> -->
		<div id="download" class="shop-icon-div projects-tooltip">
              <img  class="spiral-icon" onclick="playAudio()" src="wp-content/themes/Mithu/img/red_arrow.png"><span class="projects-tooltiptext" style="font-size:13px;">download CV</span>
        </div>
		<div class="news-icon-div news-tooltip">
              <a href="#news"><img class="spiral-icon" src="wp-content/themes/Mithu/img/new.png"></a><span class="news-tooltiptext" style="font-size:30px;">breaking news!</span>
        </div>
			<a id="cv_file" href="<?php echo get_field('cv'); ?>" style="display:none" download></a>

<?php get_footer(); ?>

<script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script>
var meta = document.createElement('meta');
meta.name = "google";
meta.content = "notranslate";
document.getElementsByTagName('head')[0].appendChild(meta); //to remove translate ping
var x = document.getElementById("myAudio"); 
function playAudio() { 
  	x.play(); 
}
download.addEventListener('click', function() {
      let start = Date.now();
	  const init_top = download.offsetTop;
	  console.log(init_top)
      let timer = setInterval(function() {
        let timePassed = Date.now() - start;
		
        download.style.top = init_top + timePassed/10 + 'px';

        if (timePassed > 5000) {
			clearInterval(timer);
			download.style.top = init_top;
			cv_file.click();
		}

      }, 250);
});
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
  if (menu_opa.style.opacity == 1){menu_opa.style.opacity = 0;}
  else {menu_opa.style.opacity = 1;}
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
function toggleContent(){
  var content = document.getElementsByClassName("biblio")[0];
  if (content.style.display == "block"){content.style.display = "none";}
  else {content.style.display = "block";}
}
function toggleContentNews(){
  var content = document.getElementsByClassName("news")[0];
  if (content.style.display == "block"){content.style.display = "none";}
  else {content.style.display = "block";}
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
