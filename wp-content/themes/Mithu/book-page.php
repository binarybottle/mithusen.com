<?php
/**
 * Template Name: Book
 *
 * Showcases the Unmyth book with purchase links and reviews.
 */
get_header();?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
  <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
</head>
<style>
#logo, #nav { display: none; }
html, body {
  font-family: "Comic Sans MS", "Comic Sans", "Comic Neue", cursive;
  width: 100%; height: 100%; padding: 0; margin: 0; overflow: auto;
  background: #6F7475;
  background: linear-gradient(0deg, #6F7475 50%, #283139 100%);
  background-attachment: fixed;
}
.navbar { visibility: hidden; }
#projector {
  position: fixed;
  top: 0; left: 0;
  width: 100%; height: 100%;
  pointer-events: none;
  z-index: 0;
}
.title-div {
  text-align: center;
  position: fixed;
  top: 9%; left: 50%;
  transform: translate(-50%, -50%);
  transition: 2s;
  z-index: 6;
}
.title-div a { text-decoration: none !important; display: inline-block; }
.title-text-icon { color: white !important; font-size: 45px; transition: 2s; }
.title-text-icon:hover { opacity: 0.8; }
.top-menu span { font-size: 18px; margin: 0 10px; }
.main-menu { opacity: 0.75; }
.main-menu:hover { opacity: 1; }
.roof-icon-div {
  cursor: pointer; opacity: 1; position: fixed;
  top: 9%; left: 5%;
  transform: translate(-50%, -50%);
  transition: 2s; z-index: 10;
}
.roof-icon { width: 50px; }
.back-tooltip .back-tooltiptext {
  visibility: hidden; width: 120px;
  border-radius: 6px; left: 120%; top: 25%;
  color: #fff; text-align: left;
  position: absolute; z-index: 1;
  opacity: 0; transition: opacity 1s;
}
.back-tooltip:hover .back-tooltiptext { visibility: visible; opacity: 1; }

/* Book layout */
.book-wrap {
  position: relative; z-index: 5;
  margin: 180px auto 80px;
  width: 90%; max-width: 920px;
  color: white;
  display: flex;
  flex-wrap: wrap;
  gap: 48px;
  align-items: flex-start;
}
.book-cover {
  flex: 0 0 240px;
  max-width: 240px;
}
.book-cover img {
  width: 100%; height: auto;
  box-shadow: 0 12px 40px rgba(0,0,0,0.6);
  display: block;
}
.book-cover-placeholder {
  background: rgba(0,0,0,0.35);
  border: 1px solid rgba(255,255,255,0.2);
  padding: 48px 20px;
  text-align: center;
  font-size: 13px;
  color: #ccc;
  font-family: Arial, sans-serif;
}
.book-info { flex: 1; min-width: 240px; }

.book-title {
  font-size: 34px; font-weight: bold;
  margin: 0 0 6px; color: white;
  letter-spacing: 1px;
}
.book-subtitle {
  font-size: 15px; color: #ccc;
  margin: 0 0 6px;
  font-family: Arial, sans-serif;
}
.book-editor {
  font-size: 13px; color: #aaa;
  margin: 0 0 20px;
  font-family: Arial, sans-serif;
}
.book-meta {
  font-size: 13px; color: #aaa;
  font-family: Arial, sans-serif;
  line-height: 2; margin-bottom: 28px;
  border-top: 1px solid rgba(255,255,255,0.12);
  border-bottom: 1px solid rgba(255,255,255,0.12);
  padding: 14px 0;
}
.buy-heading, .reviews-heading {
  font-size: 13px; color: #888;
  letter-spacing: 2px; text-transform: uppercase;
  margin: 0 0 12px;
  font-family: Arial, sans-serif;
}
.buy-buttons {
  display: flex; flex-wrap: wrap; gap: 10px;
  margin-bottom: 36px;
}
.buy-btn {
  display: inline-block;
  padding: 10px 24px;
  border: 1px solid rgba(255,255,255,0.6);
  color: white;
  text-decoration: none;
  font-family: Arial, sans-serif;
  font-size: 13px;
  border-radius: 999px;
  transition: background 0.25s, border-color 0.25s;
  white-space: nowrap;
}
.buy-btn:hover {
  background: rgba(255,255,255,0.15);
  border-color: white; color: white;
}

.reviews-list {
  list-style: none; padding: 0; margin: 0;
  font-family: Arial, sans-serif;
}
.reviews-list li {
  margin-bottom: 12px;
  padding-bottom: 12px;
  border-bottom: 1px solid rgba(255,255,255,0.07);
}
.reviews-list li:last-child { border-bottom: none; }
.reviews-list a {
  color: #d8d8d8;
  text-decoration: none;
  font-size: 14px;
  line-height: 1.4;
  transition: color 0.2s;
  display: block;
  margin-bottom: 2px;
}
.reviews-list a:hover { color: white; text-decoration: underline; }
.review-pub {
  font-size: 11px; color: #777;
  text-transform: uppercase; letter-spacing: 1px;
}

@media (max-width: 680px) {
  .book-cover { flex: 0 0 100%; max-width: 180px; }
  .book-title { font-size: 26px; }
  .buy-buttons { gap: 8px; }
  .book-wrap { gap: 28px; }
}
</style>

<?php while (have_posts()) : the_post(); ?>
<canvas id="projector">Your browser does not support the Canvas element.</canvas>

<div class="title-div">
  <a href="https://mithusen.in/"><span class="title-text-icon">mithu sen</span></a><br>
  <p class="top-menu">
    <span><a style="color:white;" class="main-menu" href="https://mithusen.in/works-projects">works</a></span>
    <span><a style="color:#faed27;" class="main-menu" href="https://mithusen.in/book/">book</a></span>
    <span><a style="color:pink;" class="main-menu" href="https://freemithu.mithusen.in/">freemithu</a></span>
    <span><a style="color:white;" class="main-menu" href="https://mithusen.in/about">about</a></span>
    <span><a style="color:white;" class="main-menu" href="https://mithusen.in/connect">connect</a></span>
  </p>
</div>

<div class="roof-icon-div back-tooltip">
  <img onclick="history.back()" class="roof-icon" src="<?php bloginfo('template_url'); ?>/img/icons8-spiral-64.png">
  <span class="back-tooltiptext" style="font-size:13px;">back</span>
</div>

<div class="book-wrap">
  <div class="book-cover">
    <?php if (has_post_thumbnail()) : ?>
      <img src="<?php the_post_thumbnail_url('large'); ?>" alt="Unmyth book cover">
    <?php else : ?>
      <img src="https://www.mapinpub.com/cdn/shop/files/Unmyth_cover.jpg" alt="Unmyth book cover"
           onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
      <div class="book-cover-placeholder" style="display:none;">
        <div style="font-size:42px; margin-bottom:16px;">📖</div>
        <strong>Unmyth</strong><br>Mithu Sen
      </div>
    <?php endif; ?>
  </div>

  <div class="book-info">
    <p class="book-title">Unmyth</p>
    <p class="book-subtitle">Works and Worlds of Mithu Sen</p>
    <p class="book-editor">Edited by Irina Aristarkhova</p>
    <p class="book-meta">
      Publisher: Mapin / Chemould Prescott Road<br>
      364 pages &nbsp;·&nbsp; Nov. 2024<br>
      ISBN: 978-9394501874
    </p>

    <p class="buy-heading">Buy</p>
    <div class="buy-buttons">
      <a class="buy-btn" href="https://www.amazon.com/UnMyth-Works-Worlds-Mithu-Sen/dp/9394501878" target="_blank" rel="noopener">Amazon</a>
      <a class="buy-btn" href="https://www.mapinpub.com/products/unmyth?variant=46307019522262" target="_blank" rel="noopener">Mapin</a>
      <a class="buy-btn" href="https://www.gallerychemould.com/publications/180-unmyth-mithu-sen/" target="_blank" rel="noopener">Chemould Gallery</a>
    </div>

    <p class="reviews-heading">Reviews</p>
    <ul class="reviews-list">
      <li>
        <a href="https://artreview.com/unmyth-works-and-words-by-mithu-sen-review-chris-fite-wassilak/" target="_blank" rel="noopener">The 'Unmyths' of Mithu Sen</a>
        <span class="review-pub">ArtReview Asia</span>
      </li>
      <li>
        <a href="https://www.livemint.com/mint-lounge/art-and-culture/unmyth-new-monograph-mithu-sen-collapsing-hierarchies-11745560422178.html" target="_blank" rel="noopener">A mind map of two decades of her art</a>
        <span class="review-pub">Mint Lounge</span>
      </li>
      <li>
        <a href="https://elledecor.in/mithu-sen-book-unmyth-chemould-knma/" target="_blank" rel="noopener">Mithu Sen goes off-script in her new book</a>
        <span class="review-pub">Elle Decor</span>
      </li>
      <li>
        <a href="https://www.indiatoday.in/magazine/leisure/story/20250707-mithu-sens-unmyth-a-singular-artist-2747043-2025-06-28" target="_blank" rel="noopener">A singular artist</a>
        <span class="review-pub">India Today</span>
      </li>
      <li>
        <a href="https://www.abirpothi.com/and-then-many-uns-of-mithu-sen/" target="_blank" rel="noopener">And Then Many 'Uns' of Mithu Sen</a>
        <span class="review-pub">AbirPothi</span>
      </li>
    </ul>
  </div>
</div>

<?php endwhile; ?>

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
<?php get_footer(); ?>
