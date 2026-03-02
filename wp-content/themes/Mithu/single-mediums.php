<?php
/**
 * Template for displaying single mediums posts.
 * Matches single-projects.php style: dark gradient, owl-carousel slider.
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
	background: -moz-linear-gradient(0deg,  #6F7475 50%, #283139 100%);
	background: -webkit-linear-gradient(0deg,  #6F7475 50%,#283139 100%);
	background: linear-gradient(0deg,  #6F7475 50%,#283139 100%);
	background-attachment: fixed;
}
.load-content p, .load-content span, .load-content a{
  font-family: Arial;
  font-size: 16px;
  color: white !important;
}
.load-content h3 {
  margin-bottom: 25px;
}
.load-content a{  
  text-decoration: underline;
}
.load-content a:hover{
  color: #01b5f2 !important;
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
.modal-backdrop.in {
  opacity: 0.95;
}
.spiral-icon{
  width:60px;
  cursor:pointer;
}
.spiral-icon-div{
  opacity: 1;
  position: fixed;
  top: 9%;
  left: 96%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
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
  height: calc(100vh - 15%);
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
::-webkit-scrollbar { width: 0px; }
::-webkit-scrollbar-track { box-shadow: inset 0 0 5px grey; border-radius: 10px; }
::-webkit-scrollbar-thumb { background: grey; border-radius: 10px; }
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
.studio-icon{ width: 80px; }
.roof-icon{ width: 50px; }
.left-menu{
  z-index: 4;
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
.left-menu p{ margin: 0 0 10px; }
.left-menu-links{
  color:white;
  transition: 0.8s;
  font-size: 20px;
  text-decoration: none;
}
.left-menu-links:hover{ color:white; font-size:21px; }
.top-menu span{ font-size: 18px; margin: 0px 10px; }
.row:after { clear: none !important; }
.row:before { display: block !important; }
.load-content{ transition: 0.5s; display:block; }
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
.back-tooltip:hover .back-tooltiptext { visibility: visible; opacity: 1; }
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
  opacity: 0;
  transition: opacity 1s;
}
.projects-tooltip:hover .projects-tooltiptext { visibility: visible; opacity: 1; }
.main-menu { opacity: 0.75; }
.main-menu:hover{ opacity: 1; }

/* Navigation layout (top-right): [current] ← → [total] */
.sli-nav.tprev,
.sli-nav.tnext {
  position: fixed !important;
  top: 20% !important;
  bottom: auto !important;
  z-index: 100;
  color: white;
  font-size: 20px;
  width: auto;
  height: auto;
  cursor: pointer;
}
.sli-nav.tprev { right: 8.5%; }
.sli-nav.tnext { right: 6%; }
#currentIndex {
  position: fixed !important;
  top: 20%;
  bottom: auto;
  right: 11%;
  color: white;
  font-size: 13px;
  z-index: 100;
  cursor: pointer;
}
.idx-total {
  position: fixed !important;
  top: 20%;
  bottom: auto;
  right: 4%;
  color: white;
  font-size: 13px;
  z-index: 100;
  cursor: pointer;
}
.a_q span.sounda {
  position: fixed;
  bottom: 44px;
  left: 50%;
  transform: translateX(-50%);
  color: white;
  font-size: 13px;
  z-index: 100;
  white-space: nowrap;
}

@media only screen and (max-width: 768px){
  html, body{ font-family: 'Comic Neue', sans-serif; }
  .title-div{ width: fit-content; }
  .spiral-icon{ width:45px; }
  .roof-icon-div{ top: 6%; left: 7%; }
  .spiral-icon-div{ top: 6%; left: 94%; }
  .left-menu{ display: none; }
  #lines{ display: none; }
  .project-menu{ background: black; }
  section#slider{ margin-top: 135px; padding-top: 15px; z-index: 4; }
  .sli-nav.tprev { position: fixed !important; right: 24% !important; top: 20% !important; transform: none !important; }
  .sli-nav.tnext { position: fixed !important; right: 15% !important; top: 20% !important; }
  #currentIndex  { right: 32% !important; top: 20% !important; }
  .idx-total     { right: 8%  !important; top: 20% !important; }
  .back-tooltiptext, .projects-tooltiptext{ display: none; }
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
      <span><a style="color:pink;" class="main-menu" href="https://freemithu.mithusen.in/">freemithu</a></span>
      <span><a style="color:white;" class="main-menu" href="https://mithusen.in/about">about</a></span>
      <span><a style="color:white;" class="main-menu" href="https://mithusen.in/connect">connect</a></span>
    </p>
</div>
<div class="studio-icon-div"></div>
<div class="roof-icon-div back-tooltip">
    <img onclick="history.back()" class="roof-icon" src="../../wp-content/themes/Mithu/img/icons8-spiral-64.png">
    <span class="back-tooltiptext" style="font-size:13px;">back</span>
</div>
<div class="left-menu"></div>

<section id="slider">
    <div class="container">
        <div class="row slider_row">
            <div id="main_slidera" class="main_slider owl-carousel">
                <?php
                $i = 1;
                $thumb_post = get_post(get_post_thumbnail_id());
                $title = $thumb_post ? $thumb_post->post_title : '';
                ?>
                <img id="gallery-<?php echo $i; ?>" data-item="<?php echo $i; ?>" data-title="<?php echo $title; ?>" src="<?php echo get_the_post_thumbnail_url(null,'full'); ?>" />
                <?php ++$i; ?>
                <?php
                $images = get_field('gallery');
                if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                        <img id="gallery-<?php echo $i; ?>" data-title="<?php echo $image['title']; ?>" data-item="<?php echo $i; ?>" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <?php $i++; endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="slider-nav">
                <div class="sli-nav tprev" title="Previous">←</div>
                <div class="sli-nav tnext" title="Next">→</div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="text">
                <div class="a_q"><span class="sounda exc"></span></div>
                <div class="a_q1">
                    <span id="currentIndex">1</span>
                    <span class="idx-total"><?php echo --$i; ?></span>
                </div>
                <div class="ploading" style="color:rgb(255,255,255,0.8);">
                    <div class="load-content" id="asx" style="display:block;transition-duration:0.45s"><?php the_content(); ?></div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="spiral-icon-div projects-tooltip">
    <img class="spiral-icon" src="../../wp-content/uploads/2017/04/Spiral.webp" onclick="openProjectMenu()">
    <span class="projects-tooltiptext" style="font-size:13px;">projects</span>
</div>
<div class="project-menu">
    <?php
    $args = array(
        'post_type'      => 'projects',
        'orderby'        => 'ID',
        'post_status'    => 'publish',
        'order'          => 'DESC',
        'posts_per_page' => -1
    );
    $result = new WP_Query( $args );
    $pjs = [];
    if ( $result->have_posts() ) {
        while ( $result->have_posts() ) {
            $result->the_post();
            if( get_the_title() == "blank" || get_the_title() == "Blank" || !get_field('pj_year') ) continue;
            if( !array_key_exists(get_field('pj_year'), $pjs) ) $pjs[get_field('pj_year')] = [];
            $pjs[get_field('pj_year')][] = ['url'=>get_the_permalink(),'title'=>get_the_title(),'year'=>get_field('pj_year')];
        }
    }
    wp_reset_postdata();
    krsort($pjs);
    foreach($pjs as $year => $pj): ?>
        <br><span><?php echo $year; ?></span><br>
        <?php foreach ($pj as $p): ?>
            <a href="<?php echo $p['url']; ?>"><span style="color:#faed27; font-size: 18px">❥</span><span><?php echo $p['title']; ?></span></a><br>
        <?php endforeach; ?>
    <?php endforeach; ?>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>

<script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script>
function openProjectMenu(){
  var menu_opa = document.getElementsByClassName("project-menu")[0];
  if (menu_opa.style.opacity == 1){menu_opa.style.opacity = 0; menu_opa.style.zIndex = 3;}
  else {menu_opa.style.opacity = 1; menu_opa.style.zIndex = 5;}
}

jQuery(".tnext").click(function(){
    var totalItems = jQuery('.owl-item').length;
    var currentIndex = parseInt(document.getElementById("currentIndex").innerHTML, 10);
    currentIndex = (currentIndex >= totalItems) ? 1 : currentIndex + 1;
    jQuery('#currentIndex').html(currentIndex);
    jQuery(".sounda").html(jQuery("#gallery-"+currentIndex).attr("data-title"));
})

var owl = jQuery('.owl-carousel');
jQuery(".tnext").click(function(){ owl.trigger('next.owl.carousel'); })
jQuery(".tprev").click(function(){ owl.trigger('prev.owl.carousel'); })
jQuery("#currentIndex").click(function(){ owl.trigger('prev.owl.carousel'); })
jQuery(".idx-total").click(function(){ owl.trigger('next.owl.carousel'); })

owl.on('changed.owl.carousel', function(event) {
    if ( event.page.count != 0 ) {
        var currentIndex = event.page.index + 1;
        jQuery('#currentIndex').html(currentIndex);
        jQuery(".sounda").html(jQuery("#gallery-"+currentIndex).attr("data-title"));
    }
})

document.addEventListener("contextmenu", evt => evt.preventDefault(), false);
document.addEventListener("copy", evt => { evt.preventDefault(); return false; }, false);

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
				for (var s = 0; s < ball.num; s++) {
					var circle = new createjs.Shape();
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
			TweenMax.to(ball, ball.speed, {scaleX:scale, scaleY:scale, x:range(ball.initX-ball.distance, ball.initX+ball.distance), y:range(ball.initY-ball.distance, ball.initY+ball.distance), onComplete:animateBall, onCompleteParams:[ball], ease:Cubic.easeInOut});
			TweenMax.to(ball, ball.speed/2, {alpha:range(0.1, ball.alphaMax), onComplete:fadeout, onCompleteParams:[ball, ball.speed]});
		}
		function fadeout(ball, speed) { ball.speed = range(2,10); TweenMax.to(ball, speed/2, {alpha:0}); }
		drawParticles();
	}
	ParticleEngine.prototype.render = function() { this.stage.update(); }
	ParticleEngine.prototype.resize = function() {
		this.totalWidth = this.canvasWidth = document.getElementById(this.canvas_id).width = document.getElementById(this.canvas_id).offsetWidth;
		this.totalHeight = this.canvasHeight = document.getElementById(this.canvas_id).height = document.getElementById(this.canvas_id).offsetHeight;
		this.render();
		for (var i=0, length=this.particleArray.length; i<length; i++) this.applySettings(this.particleArray[i], 0, this.totalWidth, this.particleArray[i].areaHeight);
		for (var j=0, len=this.lights.length; j<len; j++) {
			this.lights[j].elem.initY = this.totalHeight/2 + this.lights[j].offsetY;
			this.lights[j].elem.initX = this.totalWidth/2 + this.lights[j].offsetX;
			TweenMax.to(this.lights[j].elem, .5, {x:this.lights[j].elem.initX, y:this.lights[j].elem.initY});
		}
	}
	return ParticleEngine;
}());
function range(min, max) { return min + (max-min) * Math.random(); }
function round(num, p) { return Math.round(Math.pow(10,p)*num)/Math.pow(10,p); }
function weightedRange(to, from, dp, wr, ws) {
	if(!from) from=0; if(!dp) dp=0; if(!wr) wr=0; if(!ws) ws=0;
	if(to==from) return to;
	if(wr && Math.random()<=ws) return round(Math.random()*(wr[1]-wr[0])+wr[0], dp);
	return round(Math.random()*(to-from)+from, dp);
}
var particles;
(function(){
	particles = new ParticleEngine('projector');
	createjs.Ticker.addEventListener("tick", function(){ particles.render(); });
	window.addEventListener('resize', function(){ particles.resize(); }, false);
}());
</script>
