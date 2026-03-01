<?php
/**
 * Template Name: PDF Page
 *
 * Displays a page with the same styling as single-projects.php
 * but renders the page content (e.g. a PDF embed) instead of a gallery.
 */
get_header();?>
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
  	font-family: "Comic Sans MS", "Comic Sans", "Comic Neue", cursive;
	width:100%; 
	height:100%; 
	padding:0px; 
	margin:0px;
	overflow: auto;
	background: #6F7475;
	background: linear-gradient(0deg, #6F7475 50%, #283139 100%);
	background-attachment: fixed;
}
.navbar{
  visibility: hidden;
}
.title-div{
  text-align:center;
  position: fixed;
  top: 9%;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
  z-index: 10;
}
.title-div a {
  text-decoration: none !important;
  display:inline-block;
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
#projector {
  position: absolute; 
  top: 0px;
  left: 0px;
  width:100%;
  height:100%;
}
.spiral-icon{
  width:60px;
  cursor:pointer;
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
.roof-icon{
  width: 50px;
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
  opacity: 0;
  transition: opacity 1s;
}
.back-tooltip:hover .back-tooltiptext {
  visibility: visible;
  opacity: 1;
}
.top-menu span{ 
  font-size: 18px;
  margin: 0px 10px;
}
.main-menu {
  opacity: 0.75;
}
.main-menu:hover{
  opacity: 1;
}
.pdf-wrap {
  position: relative;
  z-index: 5;
  margin: 120px auto 60px;
  width: 90%;
  max-width: 1200px;
  color: white;
}
.pdf-wrap iframe {
  width: 100%;
  height: 90vh;
  border: none;
  display: block;
}
.pdf-wrap .page-title {
  font-size: 28px;
  color: white;
  margin-bottom: 16px;
  text-align: center;
}
@media only screen and (max-width: 768px){
  html, body{
    font-family: 'Comic Neue', sans-serif;
  }
  .title-div{
    width: fit-content;
  }
  .roof-icon-div{
    top: 6%;
    left: 7%;
  }
  .pdf-wrap {
    margin-top: 100px;
    width: 96%;
  }
}
</style>

<?php while ( have_posts() ) : the_post(); ?>
<canvas id="projector">Your browser does not support the Canvas element.</canvas>

<div class="title-div"> 
    <a href="https://mithusen.in/">
      <span class="title-text-icon">mithu sen</span>    
    </a><br>
    <p class="top-menu">
      <span><a style="color:white;" class="main-menu" href="https://mithusen.in/works-projects">works</a></span>
      <span><a style="color:white;" class="main-menu" href="https://mithusen.in/book/">book</a></span>
      <span><a style="color:pink;" class="main-menu" href="https://freemithu.mithusen.in/">freemithu</a></span>
      <span><a style="color:white;" class="main-menu" href="https://mithusen.in/about">about</a></span>
      <span><a style="color:white;" class="main-menu" href="https://mithusen.in/connect">connect</a></span>
    </p>
</div>

<div class="roof-icon-div back-tooltip">
  <img onclick="history.back()" class="roof-icon" src="<?php bloginfo('template_url'); ?>/img/icons8-spiral-64.png">
  <span class="back-tooltiptext" style="font-size:13px;">back</span>
</div>

<div class="pdf-wrap">
  <p class="page-title"><?php the_title(); ?></p>
  <?php the_content(); ?>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>

<script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script>
////////////////////////// PARTICLE ENGINE ////////////////////////////////////////
var ParticleEngine = (function() {
	'use strict';
	function ParticleEngine(canvas_id) {
		if (!(this instanceof ParticleEngine)) { return new ParticleEngine(args); }
		var _ParticleEngine = this;
		this.canvas_id = canvas_id;
		this.stage = new createjs.Stage(canvas_id);
		this.totalWidth = this.canvasWidth = document.getElementById(canvas_id).width = document.getElementById(canvas_id).offsetWidth;
		this.totalHeight = this.canvasHeight = document.getElementById(canvas_id).height = document.getElementById(canvas_id).offsetHeight;
		this.compositeStyle = "lighter";
		this.particleSettings = [
			{id:"small", num:300, fromX:0, toX:this.totalWidth, ballwidth:3, alphamax:0.4, areaHeight:.5, color:"#F0F0F0", fill:false}, 
			{id:"medium", num:100, fromX:0, toX:this.totalWidth, ballwidth:8, alphamax:0.3, areaHeight:1, color:"#C0C0C0", fill:true}, 
			{id:"large", num:10, fromX:0, toX:this.totalWidth, ballwidth:30, alphamax:0.2, areaHeight:1, color:"#A0A0A0", fill:true}
		];
		this.particleArray = [];
		this.lights = [
			{ellipseWidth:400, ellipseHeight:100, alpha:0.6, offsetX:0, offsetY:0, color:"#D0D0D0"}, 
			{ellipseWidth:350, ellipseHeight:250, alpha:0.3, offsetX:-50, offsetY:0, color:"#B8B8B8"}, 
			{ellipseWidth:100, ellipseHeight:80, alpha:0.2, offsetX:80, offsetY:-50, color:"#F8F8F8"}
		];
		this.stage.compositeOperation = _ParticleEngine.compositeStyle;
		var blurFilter;
		function drawParticles(){
			for (var i = 0, len = _ParticleEngine.particleSettings.length; i < len; i++) {
				var ball = _ParticleEngine.particleSettings[i];
				var circle;
				for (var s = 0; s < ball.num; s++) {
					circle = new createjs.Shape();
					if(ball.fill){
						circle.graphics.beginFill(ball.color).drawCircle(0, 0, ball.ballwidth);
						blurFilter = new createjs.BlurFilter(ball.ballwidth/2, ball.ballwidth/2, 1);
						circle.filters = [blurFilter];
						var bounds = blurFilter.getBounds();
						circle.cache(-50+bounds.x, -50+bounds.y, 100+bounds.width, 100+bounds.height);
					} else {
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
		this.applySettings = function(circle, positionX, totalWidth, areaHeight) {
			circle.speed = range(1, 3);
			circle.initY = weightedRange(0, _ParticleEngine.totalHeight, 1, [_ParticleEngine.totalHeight*(2-areaHeight/2)/4, _ParticleEngine.totalHeight*(2+areaHeight/2)/4], 0.8);
			circle.initX = weightedRange(positionX, totalWidth, 1, [positionX+((totalWidth-positionX))/4, positionX+((totalWidth-positionX))*3/4], 0.6);
		}
		function animateBall(ball) {
			var scale = range(0.3, 1);
			var xpos = range(ball.initX - ball.distance, ball.initX + ball.distance);
			var ypos = range(ball.initY - ball.distance, ball.initY + ball.distance);
			TweenMax.to(ball, ball.speed, {scaleX:scale, scaleY:scale, x:xpos, y:ypos, onComplete:animateBall, onCompleteParams:[ball], ease:Cubic.easeInOut});	
			TweenMax.to(ball, ball.speed/2, {alpha:range(0.1, ball.alphaMax), onComplete:fadeout, onCompleteParams:[ball, ball.speed]});	
		}
		function fadeout(ball, speed) {
			ball.speed = range(2, 10);
			TweenMax.to(ball, speed/2, {alpha:0});
		}
		drawParticles();
	}
	ParticleEngine.prototype.render = function() { this.stage.update(); }
	ParticleEngine.prototype.resize = function() {
		this.totalWidth = this.canvasWidth = document.getElementById(this.canvas_id).width = document.getElementById(this.canvas_id).offsetWidth;
		this.totalHeight = this.canvasHeight = document.getElementById(this.canvas_id).height = document.getElementById(this.canvas_id).offsetHeight;
		this.render();
		for (var i = 0, length = this.particleArray.length; i < length; i++) {
			this.applySettings(this.particleArray[i], 0, this.totalWidth, this.particleArray[i].areaHeight);
		}
		for (var j = 0, len = this.lights.length; j < len; j++) {
			this.lights[j].elem.initY = this.totalHeight/2 + this.lights[j].offsetY;
			this.lights[j].elem.initX = this.totalWidth/2 + this.lights[j].offsetX;
			TweenMax.to(this.lights[j].elem, .5, {x:this.lights[j].elem.initX, y:this.lights[j].elem.initY});
		}
	}
	return ParticleEngine;
}());

function range(min, max) { return min + (max - min) * Math.random(); }
function round(num, precision) { return Math.round(Math.pow(10,precision)*num)/Math.pow(10,precision); }
function weightedRange(to, from, decimalPlaces, weightedRange, weightStrength) {
	if (!from) from = 0;
	if (!decimalPlaces) decimalPlaces = 0;
	if (!weightedRange) weightedRange = 0;
	if (!weightStrength) weightStrength = 0;
	if (to == from) return to;
	if (weightedRange && Math.random() <= weightStrength) {
		return round(Math.random()*(weightedRange[1]-weightedRange[0])+weightedRange[0], decimalPlaces);
	}
	return round(Math.random()*(to-from)+from, decimalPlaces);
}

var particles;
(function(){
	particles = new ParticleEngine('projector');
	createjs.Ticker.addEventListener("tick", function(){ particles.render(); });
	window.addEventListener('resize', function(){ particles.resize(); }, false);
}());
</script>
