<style>
html {
	overflow:hidden;	
}
body {
	background-color:#737373;
	background-image:url('<?php bloginfo("template_url"); ?>/img/thoughts-bg.jpg'),linear-gradient(to right, #615f60, #b5b5b5, #615f60);
	background-size:cover;
}

/*#thaughts .animated {
	-webkit-transition-delay: 2s;
	-moz-transition-delay: 2s;
	-ms-transition-delay: 2s;
	-o-transition-delay: 2s;
    transition-delay: 2s;
	/*-ms-animation-duration: 3s;
	-moz-animation-duration: 3s;
	-webkit-animation-duration: 3s;
	-o-animation-duration: 3s;
}*/
.med_h span:hover{
	color:#323f5c;
}
#sidebar {
  z-index: 1;
}
#thaughts {
  background: none;
}
#thaughts li {
  color: rgb(50, 63, 92);
}
#sidebar-wrapper {
	background:rgba(119, 119, 119, 0.6);
}
.open-comments {
  display: block;
}
.comments input[type="submit"] {
  background: none;
  border: none;
  color: #fd1a1a;
  padding: 5px 0 0;
  text-shadow: none;
}
/*#thaughts li a:hover {
  background-color: rgba(255, 255, 255, 0.27);
  border-radius: 4px;
  box-shadow: 0 0 45px 20px rgba(255, 255, 255, 0.35);
  color: #337ab7;
}*/
#thaughts li a:hover {
    color: #174c82;
    text-shadow: 0 0 1px #fcf8e3;
}
.star-container {
  height: 100%;
  margin: 0;
  background-repeat: no-repeat;
  z-index: 10;
  overflow: hidden;
  position:absolute;
  margin-left:0%;
}
.star {
  transform: rotate(45deg);
  margin-top: -200px;
  height: 1px;
  width: 200px;
  z-index: 11;
  background-color: /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffffff+0,ffffff+100&0+0,1+100 */
  background: -moz-linear-gradient(left, rgba(237, 230, 77, 0) 0%, rgba(237, 230, 77, 1) 100%);
  /* FF3.6-15 */
  background: -webkit-linear-gradient(left, rgba(237, 230, 77, 0) 0%, rgba(237, 230, 77, 1) 100%);
  /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(to right, rgba(237, 230, 77, 0) 0%, rgba(237, 230, 77, 1) 100%);
  /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#00C2BE4E', endColorstr='#C2BE4E', GradientType=1);  /* IE6-9 */
  opacity: 0;
  margin-left: -200px;
}
.animate {
  animation: fadeInOut 3s 1s 1;
}


@keyframes fadeInOut {
  0% {
    opacity: 0;
  }
  50% {
    opacity: 1;
    -webkit-box-shadow: 9px 2px 16px 0px rgba(252, 252, 252, 0.1);
    -moz-box-shadow: 9px 2px 16px 0px rgba(252, 252, 252, 0.1);
    box-shadow: 9px 2px 16px 0px rgba(252, 252, 252, 0.1);
  }
  80% {
    opacity: 0;
  }
  100% {
    margin-left: 75%;
    margin-top: 80%;

  }
}
.animateIt,.animateIt2 {
  color: #c80024;
  left: 0;
  position: absolute;
  top: 0;
  opacity:0;
  transition:all 200ms;
  animation: upDown 35s linear 2s infinite alternate;
}
.animateIt2 {
  left: auto;
  top: auto;
  right:0;
  bottom:0;
  animation: upDown2 35s linear 2s infinite alternate;
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
		top:90%;
		left:50%;
	}
}
@keyframes upDown2 {
	0% {
		opacity:1;
		bottom:15%;
		right:5%;
	}
	10% {
		opacity:1;
		bottom:10%;
		right:8%;
	}
	20% {
		opacity:1;
		bottom:20%;
		right:15%;
	}
	30% {
		opacity:1;
		bottom:30%;
		right:18%;
	}
	40% {
		opacity:1;
		bottom:35%;
		right:25%;
	}
	50% {
		opacity:1;
		bottom:40%;
		right:42%;
	}
	60% {
		opacity:1;
		bottom:44%;
		right:52%;
	}
	70% {
		opacity:1;
		bottom:50%;
		right:60%;
	}
	80% {
		opacity:1;
		bottom:65%;
		right:65%;
	}
	90% {
		opacity:1;
		bottom:60%;
		right:54%;
	}
	100% {
		opacity:1;
		bottom:60%;
		right:67%;
	}
}
.un-id{
	position: absolute;top: -78px;left: 16px;width:100%;
}
.un-fi{
position: absolute;top: 290px;left: -325px;
}
.un-sexual{
	 position: absolute;top: -185px; left: -100px;
	 
 }
 .un-umbilical{
	 left: 130px;position: absolute;top: -225px;width: 100px;
 }
 .un-bird{
	 position: absolute;top: -170px;left: 76px;
	 
 }
 .un-sexuality{
	position: absolute;top: -50px;left: -95px; 
 }
 .un-flower{
	 position: relative;top: 160px;
	 
 }
 .sp-1{
	 width:10%;
	 
 }
 .un-spirl-{
	 position: absolute;top: -210px;left: 100px;width: 100%;
 }
.bow {
	visibility:hidden
}
@media only screen and (max-width: 800px){
	.tought_40 {
		left:263px !important;
	}
	.tought_46 {
		left: -51px !important;
	}
	.tought_63 {
	 	left: 340px !important;
		top: -307px !important;
	}
	.tought_13 {
		left: -1px  !important;
		top: -296px !important;
	}
	.tought_8 {
		left: -35px; !important;
	}
	.tought_7 {
		left: -56px; !important;
	}
	.tought_2 {
		top: -174px !important;
	}
	.tought_20 {
		top: -264px!important;
	}
	.tought_1 {
		left: -249px!important;
	}
}
#radical .modal-body,#lingual .modal-body,#untaboo .modal-body,#counter .modal-body,#unmonolith .modal-body {
	margin-top:4%;
}
#radical .modal-header .close,#lingual .modal-header .close,#untaboo .modal-header .close,#counter .modal-header .close,#unmonolith .modal-header .close {
	margin-top:-80px
}
</style>