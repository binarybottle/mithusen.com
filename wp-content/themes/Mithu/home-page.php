<?php
/**
 * Template Name:Home
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
  color: white !important;
  font-size: 24px !important;
  left: 0;
  position: absolute;
  opacity: 0;
  top: 0;
  transition:display 1000ms;
  animation: upDown 35s linear 2s infinite alternate;
  animation-fill-mode: forwards;
}
.animateIt:hover{
  font-size: 26px !important;
  cursor:pointer;
}
.animateIt2 {
  color: white !important;
  font-size: 24px !important;
  left: 2%;
  position: absolute;
  opacity: 0;
  top: 94%;
  transition:opacity 1000ms;
}
.animateIt:hover2{
  font-size: 26px !important;
  cursor:pointer;
}
@keyframes upDown {
	0% {
		opacity:1;
		top:5%;
		left:10%;
	}
	10% {
		opacity:1;
		top:10%;
		left:8%;
	}
	20% {
		opacity:1;
		top:25%;
		left:15%;
	}
	30% {
		opacity:1;
		top:40%;
		left:18%;
	}
	40% {
		opacity:1;
		top:45%;
		left:25%;
	}
	50% {
		opacity:1;
		top:35%;
		left:22%;
	}
	60% {
		opacity:1;
		top:40%;
		left:32%;
	}
	70% {
		opacity:1;
		top:40%;
		left:50%;
	}
	80% {
		opacity:1;
		top:60%;
		left:45%;
	}
	90% {
		opacity:1;
		top:80%;
		left:42%;
	}
	100% {
		opacity:1;
		top:94%;
		left:2%;
	}
}
.studio-icon-div{
  cursor: pointer;
  opacity: 0;
  position: fixed;
  top: 63%;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
  z-index: 2;
  
}
.roof-icon-div{
  cursor: pointer;
  opacity: 0;
  position: fixed;
  top: 92%;
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
  width: 100px;
}
.spiral-icon-div{
  opacity: 0;
  position: fixed;
  top: 50%;
  left: 63%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
  
}
.left-menu{
  opacity: 0;
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
  position: fixed;
  top: 50%;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
  z-index: 10;
}
.title-div a {
  text-decoration: none !important;
  display: inline-block;
}
.title-div p {
  margin: 0px;
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
.concepts-div{
  opacity: 0;
  text-align:left;
  position: fixed;
  top: 50%;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
  user-select: none;
}
.concepts-text{
  color:white;
  font-size: 22px;
}
.tooltip5{
  color:#fe0000; 
  cursor:pointer; 
  font-weight: bolder; 
  font-size: 40px;
  user-select: none;
}
.tooltip5 .tooltiptext5 {
  visibility: hidden;
  width: 250px;
  border-radius: 10px;
  padding-left: 72px;
  color: #fff;
  text-align: left;
  position: absolute;
  z-index: 1;
  /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
  opacity: 0;
  transition: opacity 1s;
}

.tooltip5:hover .tooltiptext5 {
  visibility: visible;
  opacity: 1;
}
.tooltip .tooltiptext {
  visibility: hidden;
  width: 250px;
  border-radius: 10px;
  left:120%;
  color: #fff;
  text-align: left;
  position: absolute;
  z-index: 1;
  
  /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
  opacity: 0;
  transition: opacity 1s;
}

.tooltip:hover .tooltiptext {
  visibility: visible;
  opacity: 1;
}
.tooltip1 .tooltiptext1 {
  visibility: hidden;
  width: 250px;
  border-radius: 10px;
  left:120%;
  color: #fff;
  text-align: left;
  position: absolute;
  z-index: 1;
  
  /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
  opacity: 0;
  transition: opacity 1s;
}

.tooltip1:hover .tooltiptext1 {
  visibility: visible;
  opacity: 1;
}
.tooltip2 .tooltiptext2 {
  visibility: hidden;
  width: 250px;
  border-radius: 10px;
  left:120%;
  color: #fff;
  text-align: left;
  position: absolute;
  z-index: 1;
  
  /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
  opacity: 0;
  transition: opacity 1s;
}

.tooltip2:hover .tooltiptext2 {
  visibility: visible;
  opacity: 1;
}
.tooltip3 .tooltiptext3 {
  visibility: hidden;
  width: 250px;
  border-radius: 10px;
  left:120%;
  color: #fff;
  text-align: left;
  position: absolute;
  z-index: 1;
  
  /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
  opacity: 0;
  transition: opacity 1s;
}

.tooltip3:hover .tooltiptext3 {
  visibility: visible;
  opacity: 1;
}
.tooltip4 .tooltiptext4 {
  visibility: hidden;
  width: 250px;
  border-radius: 10px;
  left:120%;
  color: #fff;
  text-align: left;
  position: absolute;
  z-index: 1;
  
  /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
  opacity: 0;
  transition: opacity 1s;
}

.tooltip4:hover .tooltiptext4 {
  visibility: visible;
  opacity: 1;
}
.enter-tooltip .enter-tooltiptext {
  visibility: hidden;
  width: 250px;
  border-radius: 10px;
  left:50%;
  top: 100%;
  color: #fff;
  text-align: left;
  position: absolute;
  z-index: 1;
  
  /* Fade in tooltip - takes 1 second to go from 0% to 100% opac: */
  opacity: 0;
  transition: opacity 1s;
}

.enter-tooltip:hover .enter-tooltiptext {
  visibility: visible;
  opacity: 1;
}
.top-menu{
  opacity: 0;
  transition: 0.8s;
}
.top-menu-links{ 
  font-size: 18px;
  margin: 0px 10px;
  transition: 0.8s;
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
  .tooltip5{
    font-size: 30px;
  }
  .tooltip5 .tooltiptext5 {
    left:50%;
    top: 650%;
  }
  .tooltip .tooltiptext {
    left:10%;
    top: 100%;
  }
  .tooltip1 .tooltiptext1 {
    left:10%;
    top: 100%;
  }
  .tooltip2 .tooltiptext2 {
    left:10%;
    top: 100%;
  }
  .tooltip3 .tooltiptext3 {
    left:10%;
    top: 100%;
  }
  .tooltip4 .tooltiptext4 {
    left:10%;
    top: 100%;
  }
  .concepts-text{
    font-size: 18px;
}
}
  
</style>
 <canvas id="projector">Your browser does not support the Canvas element.</canvas>
    <audio id="myAudio">
      <source src="wp-content/themes/Mithu/img/laughingman2.wav" type="audio/wav">
    </audio>
    <span class="animateIt" onclick="playAudio()" style="font-size: 18px;"><span style="color:#fe0000">Un</span>home</span>
    <div class="title-div"> 
        <a href="#" onclick="moveStudio()" class="enter-tooltip">
          	 <span class="title-text-icon">mithu sen<br/><img class="spiral-icon" src="wp-content/uploads/2017/04/Spiral.webp" /></span><span class="enter-tooltiptext" style="font-size:15px;">enter</span>    
        </a>
      	<br>
  		<p class="top-menu"><span><a style="color:white;" class="top-menu-links" href="https://mithusen.in/works-projects" onmouseover="hoverLink(0)" onmouseout="removeHover(0)">works</a></span>
          <!-- <span><a style="color:white;" class="top-menu-links" href="https://mithusen.in/words" onmouseover="hoverLink(1)" onmouseout="removeHover(1)">words</a></span> -->
          <span><a style="color:pink;"  class="top-menu-links" href="https://freemithu.mithusen.in/" onmouseover="hoverLink(1)" onmouseout="removeHover(1)">freemithu</a></span>
          <span><a style="color:white;" class="top-menu-links"  href="https://mithusen.in/about" onmouseover="hoverLink(2)" onmouseout="removeHover(2)">about</a></span>
          <span><a style="color:white;"  class="top-menu-links" href="https://mithusen.in/connect" onmouseover="hoverLink(3)" onmouseout="removeHover(3)">connect</a></span>
  		</p>
	</div>
	<div class="concepts-div"> 
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
      <p class="concepts-text tooltip">
		  <span style="color:#FCB44A; font-size: 20px">⇝ </span>radical hospitality
		  <span class="tooltiptext" style="font-size:16px;">
		  	<?php echo $definitions[1]; ?>
		  </span>
	  </p> 
      <p class="concepts-text tooltip1">
		  <span style="color:#FCB44A; font-size: 20px">⇝ </span>lingual anarchy
		  <span class="tooltiptext1" style="font-size:16px;">  
		  	<?php echo $definitions[2]; ?>
		  </span>
	  </p> 
      <p class="concepts-text tooltip2">
		  <span style="color:#FCB44A; font-size: 20px">⇝ </span>Unmonolith identity
		  <span class="tooltiptext2" style="font-size:16px;">
			<?php echo $definitions[3]; ?>
		  </span>
	  </p> 
      <p class="concepts-text tooltip3">
		  <span style="color:#FCB44A; font-size: 20px">⇝ </span>Untaboo sexuality
		  <span class="tooltiptext3" style="font-size:16px;">
		  	<?php echo $definitions[4]; ?>
		  </span>
	  </p>
      <p class="concepts-text tooltip4">
		  <span style="color:#FCB44A; font-size: 20px">⇝ </span>counter capitalism
		  <span class="tooltiptext4" style="font-size:16px;">
			  <?php echo $definitions[5]; ?>
		  </span>
	  </p> 
	</div>
      	<div class="studio-icon-div">
              <!-- <img onclick="openLeftMenu()" class="studio-icon" src="wp-content/themes/Mithu/img/email.png"> -->
          	<p class="tooltip5" onclick="showMenuAndConcepts()">
				Un
				<span class="tooltiptext5" style="font-size:16px;">
				 <?php echo $definitions[0]; ?>
				</span>
			</p>       		
          </div>
		<div class="roof-icon-div">
              <img class="roof-icon" src="wp-content/themes/Mithu/img/studio2.png"> 
          </div>
		<div class="spiral-icon-div">
              <img class="spiral-icon" src="wp-content/uploads/2017/04/Spiral.webp"> 
          </div>
		<div class="left-menu">
          <p><a class="left-menu-links" href="https://mithusen.in/works" onmouseover="hoverLink(0)" onmouseout="removeHover(0)">works</a></p>
          <p><a class="left-menu-links" href="https://mithusen.in/words" onmouseover="hoverLink(1)" onmouseout="removeHover(1)">words</a></p>
          <p><a class="left-menu-links" style="color:pink;" href="https://freemithu.mithusen.in/" target="__blank" onmouseover="hoverLink(2)" onmouseout="removeHover(2)">freemithu</a></p>
          <p><a class="left-menu-links" href="https://mithusen.in/about" onmouseover="hoverLink(3)" onmouseout="removeHover(3)">about</a></p>
          <p><a class="left-menu-links" href="https://mithusen.in/connect" onmouseover="hoverLink(4)" onmouseout="removeHover(4)">connect</a></p>
		</div>

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
function moveStudio(){
  	var elem = document.getElementsByClassName("studio-icon-div")[0];
  	frame();
  	function frame(){
      elem.style.opacity = 1;
      if (screen.width <= 768){
        elem.style.top = '6%'; 
      	elem.style.left = '7%';
      	setTimeout(moveSpiral, 0);
      }
      else{
        elem.style.top = '9%'; 
      	elem.style.left = '5%';
      	setTimeout(moveSpiral, 0);
      }
    }
}
function moveSpiral(){
  var elem = document.getElementsByClassName("spiral-icon-div")[0];
  document.getElementsByClassName("spiral-icon")[0].style.display = 'none';
  	frame1();
  	function frame1(){
      elem.style.opacity = 1;
      if (screen.width <= 768){
        elem.style.top = '6%'; 
      	elem.style.left = '94%';
      	setTimeout(moveHeading, 0);
      }
      else{
        elem.style.top = '9%'; 
      	elem.style.left = '96%';
      	setTimeout(moveHeading, 0);
      }
    }
}
function moveHeading(){
  var elem = document.getElementsByClassName("title-div")[0];
  var unhome = document.getElementsByClassName("animateIt")[0];
  //var css = '.title-div:hover .top-menu{ opacity:1; }';
  //var style = document.createElement('style');
  //    style.appendChild(document.createTextNode(css));

 // document.getElementsByTagName('head')[0].appendChild(style);
  document.getElementsByClassName("enter-tooltiptext")[0].innerHTML = "";
  frame2();
  	function frame2(){
      elem.style.top = '9%';
      setTimeout(moveUnhome, 1000);
    }
}
function moveUnhome(){
  var unhome = document.getElementsByClassName("animateIt")[0];
  showMenuAndConcepts();
  //document.getElementsByClassName( "title-div" )[0].setAttribute( "onClick", "javascript: location.reload();" );
  	/*frame3();
  	function frame3(){
      if (screen.width <= 768){unhome.style.opacity = 1;}
      else{
      unhome2.style.opacity = 1;
    }}*/
}
function showMenuAndConcepts(){
  document.getElementsByClassName("concepts-div")[0].style.opacity = 1;
  document.getElementsByClassName("top-menu")[0].style.opacity = 1;
  document.getElementsByClassName("animateIt")[0].style.animation = 'none';
  document.getElementsByClassName("animateIt")[0].style.opacity = 0;
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
function hoverLink(id){
  for(var i = 0; i < 5 ; i++){
  if(i!=id) 
  document.getElementsByClassName("top-menu-links")[i].style.opacity = 0.75; 
  }
}
function removeHover(id){
  for(var i = 0; i < 5 ; i++){
   if(i!=id)
   document.getElementsByClassName("top-menu-links")[i].style.opacity = 1; 
  }
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
