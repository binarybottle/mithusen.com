<?php
/**
 * Template Name: Words
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
  <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
</head>
<style>
#logo,#nav {
	display:none;
}
html, body {
  	font-family: "Comic Sans MS", "Comic Sans", cursive;
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
  position: fixed;
  top: 9%;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
}
.title-div a {
  text-decoration: none !important;
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
.concepts-div{
  text-align:left;
  position: fixed;
  top: 50%;
  left: 50%;
  margin-right: -50%;
  transform: translate(-50%, -50%);
  transition: 2s;
}
.concepts-text{
  color:white;
  font-size: 22px;
  cursor: pointer;
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
.tooltip .tooltiptext {
  visibility: hidden;
  width: 250px;
  border-radius: 10px;
  left: 120%;
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
  left: 120%;
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
  left: 120%;
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

.main-menu {
  opacity: 0;
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
  width: 250px;
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
@media only screen and (max-width: 768px){
  html, body{
    font-family: 'Special Elite', cursive;
	}
  .title-div{
    width: 70%;
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
    left: 15%;
  }
  .left-menu-links{
    font-size: 18px;
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
  .tooltip .tooltiptext {
    left:10%;
    top: 100%;
  }
  .tooltip1 .tooltiptext1 {
    left:10%;
    top: 100%;
  }
  .tooltip2 .tooltiptext2 {
    left:50%;
    top: 250%;
  }
  .concepts-text{
    font-size: 18px;
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
    <span class="animateIt" onclick="playAudio()" style="font-size: 18px;"><span style="color:#fe0000">Un</span>home</span>
    <div class="title-div"> 
        <a href="https://mithusen.in/">
          	 <span class="title-text-icon">mithu sen</span>    
        </a><br>
  		<p class="top-menu"><span><a style="color:white;" class="main-menu" href="https://mithusen.in/works-projects">works</a></span>
          <span><a style="color:white;" href="https://mithusen.in/words">words</a></span>
          <span><a style="color:pink;"class="main-menu" href="https://freemithu.mithusen.in">freemithu</a></span>
          <span><a style="color:white;"class="main-menu" href="https://mithusen.in/about">about</a></span>
          <span><a style="color:white;" class="main-menu" href="https://mithusen.in/connect">connect</a></span>
  		</p>
	</div>
	<div class="concepts-div"> 
      <p class="concepts-text tooltip"><span style="color:#FCB44A; font-size: 20px">⇝ </span>mother tongue<span class="tooltiptext" style="font-size:13px;">Monolingualism or Unilingualism imposes a logic that tells us not to smell poetry, hear shadows or taste light. </span></p> 
      <p class="concepts-text tooltip1"><span style="color:#FCB44A; font-size: 20px">⇝ </span>other tongue<span class="tooltiptext1" style="font-size:13px;">A non-productive, unowned, ephemeral mode of communication not codified by lingua franca.</span></p>
	</div>
      	<div class="studio-icon-div">
              <!-- <img onclick="openLeftMenu()" class="studio-icon" src="wp-content/themes/Mithu/img/studio1.png"> -->
          </div>
		<div class="roof-icon-div back-tooltip">
              <img onclick="history.back()" class="roof-icon" src="wp-content/themes/Mithu/img/icons8-spiral-64.png"><span class="back-tooltiptext" style="font-size:13px;">back</span> 
          </div>
		<div class="spiral-icon-div projects-tooltip">
              <img class="spiral-icon" src="wp-content/uploads/2017/04/Spiral.webp" onclick="openProjectMenu()"><span class="projects-tooltiptext" style="font-size:13px;">projects</span>
          </div>
		<div class="left-menu">
          <!-- <p style="color:#df0025; cursor:pointer; font-weight: bolder; font-size: 24px" onclick="history.back()">Un</p>
          <p><a style="color:white;"class="left-menu-links main-menu" href="https://mithusen.in/works">works</a></p>
          <p><a style="color:white;"class="left-menu-links" href="https://mithusen.in/words">words</a></p>
          <p><a style="color:pink;"class="left-menu-links main-menu" href="https://freemithu.mithusen.in/works-projects">freemithu</a></p>
          <p><a style="color:white;"class="left-menu-links main-menu" href="https://mithusen.in/about">about</a></p>
          <p><a style="color:white;"class="left-menu-links main-menu" href="https://mithusen.in/connect">connect</a></p>
          <br> -->
          <p class="tooltip2"><a class="left-menu-links" href="https://mithusen.in/words-projects"><span style="color:#fe0000">Un</span>poetry<br><span style="color:#fe0000">Un</span>language</a><span class="tooltiptext2" style="font-size:13px;">Unpoetry/Unlanguage is a condition beyond postmonolingualism,  a psycholinguistics chaos , random fixation- association with uplifted words , wrong spelling, shifting meanings, textual typeface , diaristic voice , nurturing poetics, optical irregularity, unreasonable outcomes …  intuitive- instinctive voice of electronics, self-made interfaces , the imperfection and a cognitive strain as a performance…. </span></p>
		</div>

		<div class="project-menu" onmouseout="removeLines()">
        	<?php $args = array(
              'post_type'=> 'projects',
              'orderby'    => 'ID',
              'post_status' => 'publish',
              'order'    => 'DESC',
              'posts_per_page' => -1 // this will retrive all the post that is published 
              );
              $result = new WP_Query( $args );
              if ( $result-> have_posts() ) : ?>
              <?php while ( $result->have_posts() ) : $result->the_post(); if(get_the_title() == "blank" || get_the_title() == "Blank"){continue;} $poetry = get_field('is_poetry'); if(empty($poetry[0]) || $poetry[0]!='Yes'){continue;} ?>
          	  <a href="<?php the_permalink(); ?>"><span style="color:#faed27; font-size: 18px">❥ </span><span class="projects-links" onmouseover="abc(this)"><?php the_title(); ?></span></a><br>   
              <?php endwhile; ?>
              <?php endif; wp_reset_postdata(); ?>
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
/* fetch("wp-content/themes/Mithu/mithuprojects.txt")
	.then((response) => {
  		return response.text;
	})
	.then((text) => {
  		let projects = text;
	}); */
let projects = [
  {"name":"Uncatharsis (100)second-hand drops 2020","radical":"yes","ligual":"no","unmonolith":"yes","untaboo":"no","counter":"yes","drawing":"no","sculpture":"no","performance":"yes","poetry":"no","sound":"no","video":"yes","installation":"no"},
  {"name":"BERKELEY FOR SALE !! 2020","radical":"yes","ligual":"no","unmonolith":"yes","untaboo":"no","counter":"yes","drawing":"no","sculpture":"no","performance":"yes","poetry":"no","sound":"yes","video":"yes","installation":"no"},
  {"name":"Lunch is cancelled 2019","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Unlockdown 2020","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"How to be a SUCKcessful Artist 2019","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"100 (un)silent ways 2019","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"UnMYthU: UnKIND(s) Alternatives APT9","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Mit i sny (Myth and Dreams)2018","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"UnMYthU","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Unlynching 2017","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Sounding Drawing","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Unline 2017","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Unhome in City IF Angels 2017","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"We Unfinish each other 2017","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"I Replace You 2017","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Embodied Language 2017","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"(Left Untold) 2016","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Aphasia 2016","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Return Gifts: For Sale 2016","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"MOU (Museum of Unbelongings)2011-2018","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Kenopsia 2016","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Mis(s)Guide 2016","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Tongue that won’t stop wounding 2015","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Once upon a sari 2015","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Unwor(l)dly 2015","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Ahh Taj 2011 – 2015","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Nonversation 2015","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Border Unseen 2014","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"I Am a Poet 2013 –","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Shop Lifting 2014","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"I have only one language; it is not mine 2014","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"No star, No land, No word, No Commitment 2004-2014","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Non spinal 2007-2014","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Mis(s)Guide 2016","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"A ° V O I D 2014","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Nobody is at home 2014","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Deafening Silence 2013","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Same River Twice 2013","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Artist: Unknown 2013","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Cannibal Lullaby 2013","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"I am not me 2012","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Devoid 2012","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"In House Adoption 2012","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Twinkle Twinkle 2012","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"For(e)play 2011","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"I chew, I bite, The Unknown 2010-2011","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"In Transit 2011","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Black Candy (Iforgotmypenisathome) 2010","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"No thing 2011","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Unwanted 2010","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Nothing lost in translation 2008","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Freemithu 2007-ongoing","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Abstract Cabinet 2009","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Dropping Gold, Dropping Gold 2009","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Me two 2009","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"I dig,I look down 2008","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Half Full 2007","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Kamdhenu 2007","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Icarus 2006-2007","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Indubala and her Unbelongings 2007","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"All that’s solid melts into air 2006","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"It’s good to be a queen 2006","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Letters on the beach 2006","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Drawing room 2006","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Ephemeral Affair 2006","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Being Anastacia 2006","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Spiritual materialistic 2005","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Breathing 2004","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Burnt by the sun 2004","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Outside the war zone 2004","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"I hate pink 2003","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
  {"name":"Twilight Zone 2003","radical":"yes","ligual":"yes","unmonolith":"no","untaboo":"no","counter":"yes","drawing":"yes","sculpture":"no","performance":"yes","poetry":"yes","sound":"yes","video":"no","installation":"yes"},
] 
 
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
var canvas = document.getElementById("lines");
var ctx = canvas.getContext("2d");  
function abc(x){
  var content = x.innerHTML;
  console.log(content);
  var found = projects.find(e => e.name === content);
  this.totalWidth = this.canvasWidth = document.getElementById("lines").width = document.getElementById("lines").offsetWidth;
  this.totalHeight = this.canvasHeight = document.getElementById("lines").height = document.getElementById("lines").offsetHeight;
  var concept_1 = document.getElementsByClassName("concepts-text")[0].getBoundingClientRect();
  var concept_2 = document.getElementsByClassName("concepts-text")[1].getBoundingClientRect();
  var rect = x.getBoundingClientRect();
  ctx.beginPath();
  ctx.strokeStyle = "#FCB44A";
  ctx.setLineDash([5, 3]);
  if(found.radical == "yes"){
  ctx.moveTo(rect.left, rect.top+10);
  ctx.lineTo((concept_1.left+concept_1.right)/2, concept_1.top+15);
  ctx.stroke(); 
  }
  if(found.lingual == "yes"){
  ctx.moveTo(rect.left, rect.top+10);
  ctx.lineTo((concept_2.left+concept_2.right)/2, concept_2.top+15);
  ctx.stroke(); 
  }
}
function removeLines(){
  ctx.clearRect(0, 0, canvas.width, canvas.height);
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
