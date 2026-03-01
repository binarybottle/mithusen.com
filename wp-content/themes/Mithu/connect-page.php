<?php
/**
 * Template Name:Connect
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 get_header();?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&display=swap" rel="stylesheet">
</head>
<style>
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
.container{
  width: 100%;
}
#poetry{
  display: block;
}
#poetry-moible{
  display: none;
}
.copyright {
	position: absolute;
	bottom: 2px;
	text-align: center;
	width: 100%;
	font-size: 20px;
	
}

.blue {
	color: #adaaaa;
}
	.mytooltip {
		position: relative;
	}
	.mytooltip-text {
		position : absolute;
		top: -25px;
		left: 0px;
		opacity : 0;
		transition: 0.5s;
		font-size: 18px;
		width: 100%;
		text-align: center;
		color: white;
	}
	.mytooltip:hover .mytooltip-text {
		opacity:1;
	}
	

@media only screen and (max-width: 768px){
  html, body{
    font-family: 'Comic Neue', sans-serif;
	}
  .title-div{
    width: 85%;
  }
  .navbar{
    display: none;
  }
  #poetry{
    display: none;
  }
  #poetry-mobile{
    display: block;
    margin-top: 175px;
  }
  .connect-row{
    margin-top: 0%;
  }
  .col-sm-6{
    text-align: center;
  }
  .col-sm-6{
    margin: 10px;
  }
  .copyright {
	font-size:12px;
  }
}
</style>
<canvas id="projector">Your browser does not support the Canvas element.</canvas>
<div class="title-div"> 
        <a href="https://mithusen.in/" onclick="moveStudio()">
          	 <span class="title-text-icon">mithu sen<br/></span>
        </a><br>
  		<p class="top-menu"><span><a style="color:white;"class="main-menu" href="https://mithusen.in/works-projects">works</a></span>
          <!-- <span><a style="color:white;"class="main-menu" href="https://mithusen.in/words">words</a></span> -->
          <span><a style="color:white;"class="main-menu" href="https://mithusen.in/book/">book</a></span>
          <span><a style="color:pink;"class="main-menu" href="https://freemithu.mithusen.in/">freemithu</a></span>
          <span><a style="color:white;"class="main-menu" href="https://mithusen.in/about">about</a></span>
          <span><a style="color:white;" href="https://mithusen.in/connect">connect</a></span></p>
</div>
<section id="poetry">
    <div class="container">
    	<div class="row connect-row">
          <div class="col-lg-2">
          </div>
           <div class="col-lg-1 mytooltip">
             <a href="https://en.wikipedia.org/wiki/Mithu_Sen" target="__blank" target="__blank"><img class="connect-img" style="height:80px;" src="../wp-content/themes/Mithu/img/wiki.png">
			 <span class="mytooltip-text">wiki</span></a>
          </div>
          <div class="col-lg-1 mytooltip">
             <a href="https://www.instagram.com/mithusen26/" target="__blank"><img class="connect-img" style="height:100px;" src="../wp-content/themes/Mithu/img/instagram.png">
			  <span class="mytooltip-text">insta</span></a>
          </div>
          <div class="col-lg-1 mytooltip">
             <a href="mailto:sen.mithu@gmail.com" target="__blank"><img class="connect-img" style="height:70px;" src="../wp-content/themes/Mithu/img/email.png">
			 <span class="mytooltip-text">email</span></a>
          </div>
          <!--<div class="col-lg-1">
             <a href="https://drive.google.com/drive/folders/1k4DcrmdDpKvJsq4eyRW1Q1CneXUtLOoy?usp=sharing" target="__blank"><img class="connect-img" style="height:100px;" src="../wp-content/themes/Mithu/img/newsletters.png"></a>
          </div>-->
          <div class="col-lg-1 mytooltip">
             <a href="https://www.gallerychemould.com/artists/36-mithu-sen/" target="__blank"><img class="connect-img" style="height:80px;" src="../wp-content/themes/Mithu/img/shop.png">
			  <span class="mytooltip-text">gallery</span></a>
          </div>
          <div class="col-lg-1 mytooltip">
             <a href="https://twitter.com/Mithusen26" target="__blank"><img class="connect-img" style="height:90px;" src="../wp-content/themes/Mithu/img/youtube.png">
			  <span class="mytooltip-text">x</span></a>
          </div>
          <div class="col-lg-1 mytooltip">
             <a href="https://www.instagram.com/mithusen26seriouslyofficial/" target="__blank"><img class="connect-img" style="height:90px;" src="../wp-content/themes/Mithu/img/twitter.png">
			  <span class="mytooltip-text">insta</span></a>
          </div>
          <div class="col-lg-1 mytooltip">
             <a href="https://www.linkedin.com/in/mithu-sen-4991423a/" target="__blank"><img class="connect-img" style="height:50px;" src="../wp-content/themes/Mithu/img/linkdn.png"><span class="mytooltip-text">linkdin</span></a>
          </div>
          <div class="col-lg-2">
          </div>
        </div>
    </div>
</section>
<div class="copyright blue">
	<p>
		Unless otherwise indicated, all materials on these pages are copyrighted
	</p>
	<p>
		<span style="font-family: Georgia, Consolas, Verdana; vertical-align:bottom">© </span>mithusen
	</p>
</div>
<?php $useragent=$_SERVER['HTTP_USER_AGENT']; if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) { ?> 
<section id="poetry-mobile">
    <div class="container">
    	<div class="row connect-row">
           <div class="col-sm-6">
             <a href="https://en.wikipedia.org/wiki/Mithu_Sen" target="__blank" target="__blank"><img class="connect-img" style="height:80px;" src="../wp-content/themes/Mithu/img/wiki.png"></a>
          </div>
          <div class="col-sm-6">
             <a href="https://www.instagram.com/mithusen26/" target="__blank"><img class="connect-img" style="height:100px;" src="../wp-content/themes/Mithu/img/instagram.png"></a>
          </div>
      	 </div>
          <div class="row connect-row">
          <div class="col-sm-6">
             <a href="https://www.gallerychemould.com/artists/36-mithu-sen/" target="__blank"><img class="connect-img" style="height:80px;" src="../wp-content/themes/Mithu/img/shop.png"></a>
          </div>
          <div class="col-sm-6">
             <a href="https://twitter.com/Mithusen26" target="__blank"><img class="connect-img" style="height:90px;" src="../wp-content/themes/Mithu/img/youtube.png"></a>
          </div>
          </div>
          <div class="row connect-row">
          <div class="col-sm-6">
             <a href="https://www.instagram.com/mithusen26seriouslyofficial/" target="__blank"><img class="connect-img" style="height:90px;" src="../wp-content/themes/Mithu/img/twitter.png"></a>
          </div>
          <div class="col-sm-6">
             <a href="https://www.linkedin.com/in/mithu-sen-4991423a/" target="__blank"><img class="connect-img" style="height:50px;" src="../wp-content/themes/Mithu/img/linkdn.png"></a>
          </div>
        </div>
		        <div class="row connect-row">
          <div class="col-sm-6">
             <a href="mailto:sen.mithu@gmail.com" target="__blank"><img class="connect-img" style="height:70px;" src="../wp-content/themes/Mithu/img/email.png"></a>
          </div>
          <!--<div class="col-sm-6">
             <a href="https://drive.google.com/drive/folders/1k4DcrmdDpKvJsq4eyRW1Q1CneXUtLOoy?usp=sharing" target="__blank"><img class="connect-img" style="height:100px;" src="../wp-content/themes/Mithu/img/newsletters.png"></a>
          </div>-->
     	  </div>
    </div>
</section>
<div class="copyright">
	<p class="blue">
		Unless otherwise indicated, all materials on these pages are copyrighted
	</p>
	<p>
		<span class="blue" style="font-family: Georgia, Consolas, Verdana; vertical-align:bottom">© </span>mithusen
	</p>
</div>
<?php } ?>

<script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script>
  ////////////////////////// PARTICLE ENGINE ////////////////////////////////////////

var elem = document.getElementsByClassName("connect-row")[0].style.display = "";
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

<?php get_footer(); ?>
