<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>ReLink</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/icon.jpg" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
	
		<link rel="stylesheet" href="css/blog.css" media="screen">

    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>

<style>
/* Style The Dropdown Button */
.dropbtn {
 background-color: #2c1d16;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 0px 1px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #01b3a7;
}
</style>
<style>
.dropdown-submenu {
  position: relative;
  color: black;
   background-color: #2c1d16;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
  color: black;
   background-color: #2c1d16;
}
.dropdown-menu a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  
}
.dropdown-menu a:hover {background-color: #f1f1f1}

</style>

<style>
.serviceBox{
    color: #fff;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    padding: 25px 25px 55px;
    position: relative;
    z-index: 1;
}
.serviceBox:before,
.serviceBox:after{
    content: '';
    background: linear-gradient(#a64cef, #882FD5);
    border-radius: 20px;
    position: absolute;
    left: 10px;
    right: 0;
    top: 15px;
    bottom: 0;
    z-index: -1;
}
.serviceBox:after{
    background: #fff;
    left: 0;
    right: 10px;
    top: 0;
    bottom: 15px;
    clip-path: polygon(30% 0, 100% 0, 100% 85%, 75% 100%, 0 100%, 0 20%);
}
.serviceBox .service-icon{
    color: #882FD5;
    font-size: 35px;
    text-shadow: 4px 4px rgba(0,0,0,0.1);
    margin: 0 0 10px;
}
.serviceBox .title{
    color: #882FD5;
    font-size: 18px;
    font-weight: 400;
    text-transform: uppercase;
    margin: 0 0 10px;
}
.serviceBox .title span{ font-weight: 700; }
.serviceBox .description{
    color: #888;
    font-size: 13px;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 0;
}
.serviceBox .read-more{
    color: #fff;
    font-size: 22px;
    line-height: 22px;
    position: absolute;
    right: 15px;
    bottom: 9px;
    transition: all 0.3s ease 0s;
}
.serviceBox .read-more:hover{
    color: rgba(255,255,255,0.7);
    text-shadow: 3px 3px rgba(255,255,255,0.1);
}
.serviceBox.darkgreen:before{ background: linear-gradient(#00A28D, #007385); }
.serviceBox.darkgreen .service-icon,
.serviceBox.darkgreen .title{
    color: #007385;
}
.serviceBox.blue:before{ background: linear-gradient(#00BFE9, #0170DC); }
.serviceBox.blue .service-icon,
.serviceBox.blue .title{
    color: #0170DC;
}
.serviceBox.green:before{ background: linear-gradient(#93c916, #3AB447); }
.serviceBox.green .service-icon,
.serviceBox.green .title {
    color: #3AB447;
}
@media only screen and (max-width:990px){
    .serviceBox{ margin: 0 0 30px; }
</style>



<style>


* { box-sizing: border-box; }


.scene {
  border: 1px solid #CCC;
  margin: 40px 0;
  position: relative;
  width: 210px;
  height: 140px;
  margin: 80px auto;
  perspective: 1000px;
}

.carousel {
  width: 100%;
  height: 100%;
  position: absolute;
  transform: translateZ(-288px);
  transform-style: preserve-3d;
  transition: transform 1s;
}

.carousel__cell {
  position: absolute;
  width: 190px;
  height: 120px;
  left: 10px;
  top: 10px;
  border: 2px solid black;
  line-height: 116px;
  font-size: 80px;
  font-weight: bold;
  color: white;
  text-align: center;
  transition: transform 1s, opacity 1s;
}

.carousel__cell:nth-child(9n+1) { background: hsla(  0, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+2) { background: hsla( 40, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+3) { background: hsla( 80, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+4) { background: hsla(120, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+5) { background: hsla(160, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+6) { background: hsla(200, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+7) { background: hsla(240, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+8) { background: hsla(280, 100%, 50%, 0.8); }
.carousel__cell:nth-child(9n+0) { background: hsla(320, 100%, 50%, 0.8); }

.carousel__cell:nth-child(1) { transform: rotateY(  0deg) translateZ(288px); }
.carousel__cell:nth-child(2) { transform: rotateY( 40deg) translateZ(288px); }
.carousel__cell:nth-child(3) { transform: rotateY( 80deg) translateZ(288px); }
.carousel__cell:nth-child(4) { transform: rotateY(120deg) translateZ(288px); }
.carousel__cell:nth-child(5) { transform: rotateY(160deg) translateZ(288px); }
.carousel__cell:nth-child(6) { transform: rotateY(200deg) translateZ(288px); }
.carousel__cell:nth-child(7) { transform: rotateY(240deg) translateZ(288px); }
.carousel__cell:nth-child(8) { transform: rotateY(280deg) translateZ(288px); }
.carousel__cell:nth-child(9) { transform: rotateY(320deg) translateZ(288px); }



.carousel-options {
  text-align: center;
  position: relative;
  z-index: 2;
  background: hsla(0, 0%, 100%, 0.8);
}
</style>
 </head>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
 
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand-->
					<a class="brand" href="index.php"><p>ReLink Technologies</p></a>
					
                  </div>
				  
                </div>
                <div class="rd-navbar-aside-right rd-navbar-collapse">
                  <ul class="rd-navbar-corporate-contacts">
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon mdi mdi-comment-text-outline"></span></div>
                        <div class="unit-body">
					<a href="about-us.php#contact">Contact</a>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon mdi mdi-cellphone-android"></span></div>
                        <div class="unit-body">
					<!--	<a class="link-phone" href="tel:#">+1 323-913-4688</a>-->
										<a href="tel:+251 11 668 7188">+251 11 668 7188</a>

						</div>
                      </div>
                    </li>
                  </ul>
				<!--  <a class="button button-md button-default-outline-2 button-ujarak" href="#">Get a Free Quote</a>-->
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap">
               
                  <!-- RD Navbar Nav-->
                  <ul class="rd-navbar-nav">
				  
				  
				  
			
                    <li class="rd-nav-item "><a class="rd-nav-link" href="index.php">Home</a>
                    </li>
				 <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.php">About Us</a>
                    </li>
					
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="rd-nav-item"><a class="rd-nav-link" href="bank.php">Knowledge Bank</a>
                    </li>
                   
									<!--	<div class="dropdown">

  <button class="dropbtn">Services</button>
  <div class="dropdown-content">
		<a href="DevP tracker.php">    DevP tracker </a>
		<a href="Smart contract.php">    Smart contract   </a>
		<a href="RelinkBiz MIS.php">    RelinkBiz MIS  </a>
		<a href="RelinkAgri.php">   RelinkAgri </a>
  </div>
</div>
-->

<div class="dropdown">
    <button class="dropbtn" type="button" data-toggle="dropdown">Services
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    <li><a href="tracker.php">     DevTracker  </a></li>
      <li><a href="agri.php">    RelinkAgri   </a></li>
	  <li><a href="market.php">    RelinkMarket  </a></li>
	  <li><a href="apps.php">   RelinkApps </a></li>
      <!--<li class="dropdown-submenu">
        <a class="test" tabindex="-1" href="#">New dropdown <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
          <li><a tabindex="-1" href="#">2nd level dropdown</a></li>
          <li class="dropdown-submenu">
            <a class="test" href="#">Another dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">3rd level dropdown</a></li>
              <li><a href="#">3rd level dropdown</a></li>
            </ul>
          </li>
        </ul>
      </li>-->
    </ul>
  </div>


				
						
                  </ul>
				  

                </div>
				
              </div>
            </div>
          </nav>
        </div>
      </header>
	  	  
	  <section class="section section-fluid bg-default">
        <div class="parallax-container" data-parallax-img="images/3.jpg">
          <div class="parallax-content section-xl context-dark bg-overlay-26">
            <div class="container">
              <div class="row row-50 justify-content-center border-classic">
                <div class="col-sm-6 col-md-5 col-lg-3">
                  <div class="counter-classic">
               
                    <h2 class="counter-classic-title">Contents Cooming Soon</h2>
                  </div>
                </div>
             
          
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Blog</h2>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.html">Home</a></li>
              <li class="active">About</li>
            </ul>
          </div>
          <div class="box-position" style="background-image: url(images/bg5.jpg);"></div>
        </div>
      </section>
	  
	  
	  
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox blue">
                <div class="service-icon">
                    <span><i class="fa fa-globe"></i></span>
                </div>
                <h3 class="title">Web <span>Design</span></h3>
                <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
                <a href="#" class="read-more"><i class="far fa-arrow-alt-circle-right"></i></a>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="serviceBox blue">
                <div class="service-icon">
                    <span><i class="fa fa-globe"></i></span>
                </div>
                <h3 class="title">Web <span>Development</span></h3>
                <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
                <a href="#" class="read-more"><i class="far fa-arrow-alt-circle-right"></i></a>
            </div>
        </div>
		<div class="col-md-3 col-sm-6">
            <div class="serviceBox blue">
                <div class="service-icon">
                    <span><i class="fa fa-globe"></i></span>
                </div>
                <h3 class="title">Web <span>Design</span></h3>
                <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
                <a href="#" class="read-more"><i class="far fa-arrow-alt-circle-right"></i></a>
            </div>
        </div><div class="col-md-3 col-sm-6">
            <div class="serviceBox blue">
                <div class="service-icon">
                    <span><i class="fa fa-globe"></i></span>
                </div>
                <h3 class="title">Web <span>Design</span></h3>
                <p class="description">Lorem ipsum dolor sit amet conse ctetur adipisicing elit. Qui quaerat fugit quas veniam perferendis repudiandae sequi, dolore quisquam illum.</p>
                <a href="#" class="read-more"><i class="far fa-arrow-alt-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>



<div class="scene">
  <div class="carousel">
    <div class="carousel__cell">1</div>
    <div class="carousel__cell">2</div>
    <div class="carousel__cell">3</div>
    <div class="carousel__cell">4</div>
    <div class="carousel__cell">5</div>
    <div class="carousel__cell">6</div>
    <div class="carousel__cell">7</div>
    <div class="carousel__cell">8</div>
    <div class="carousel__cell">9</div>
    <div class="carousel__cell">10</div>
    <div class="carousel__cell">11</div>
    <div class="carousel__cell">12</div>
    <div class="carousel__cell">13</div>
    <div class="carousel__cell">14</div>
    <div class="carousel__cell">15</div>
  </div>
</div>

<div class="carousel-options">
  <p>
    <label>
      Cells
      <input class="cells-range" type="range" min="5" max="15" value="9" />
    </label>
  </p>
  <p>
    <button class="previous-button">Previous</button>
    <button class="next-button">Next</button>
  </p>
  <p>
    Orientation:
    <label>
      <input type="radio" name="orientation" value="horizontal" checked />
      horizontal
    </label>
    <label>
      <input type="radio" name="orientation" value="vertical" />
      vertical
    </label>
  </p>
</div>

 

      <section class="section section-lg text-center">
        <div class="container">
          <h3 class="wow-outer"><span class="wow slideInDown">Recent News</span></h3>
          <div class="row row-30">
            <div class="col-sm-6 col-md-4 col-lg-3 wow-outer">

              <article class="post-tiny wow fadeSlideInDown"><a class="post-tiny-media" href="#"><img src="images/bg8.jpg" alt="" width="270" height="184"/></a>
                <h5 class="post-tiny-title"><a href="#">Market Research Tips for Business Owners</a></h5>
                <time class="post-tiny-time" datetime="2017">2 days ago</time>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 wow-outer">

              <article class="post-tiny wow fadeSlideInDown" data-wow-delay=".05s"><a class="post-tiny-media" href="#"><img src="images/bg8.jpg" alt="" width="270" height="184"/></a>
                <h5 class="post-tiny-title"><a href="#">Managing Your Company Finances</a></h5>
                <time class="post-tiny-time" datetime="2017">2 days ago</time>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 wow-outer">

              <article class="post-tiny wow fadeSlideInDown" data-wow-delay=".1s"><a class="post-tiny-media" href="#"><img src="images/bg8.jpg" alt="" width="270" height="184"/></a>
                <h5 class="post-tiny-title"><a href="#">Efficient Accounting for Your Business</a></h5>
                <time class="post-tiny-time" datetime="2017">2 days ago</time>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 wow-outer">

              <article class="post-tiny wow fadeSlideInDown" data-wow-delay=".15s"><a class="post-tiny-media" href="#"><img src="images/bg8.jpg" alt="" width="270" height="184"/></a>
                <h5 class="post-tiny-title"><a href="#">Applying Innovations in Management</a></h5>
                <time class="post-tiny-time" datetime="2017">2 days ago</time>
              </article>
            </div>
          </div>
          <div class="wow-outer button-outer offset-top-2"><a class="button button-dark-outline button-winona wow slideInUp" href="#">View all Blog posts</a></div>
        </div>
      </section>
	  -->
	  
	
	
      <!-- Page Footer--><?php
	  include "footer.php";
	  ?>
      <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

    <script class="u-script" type="text/javascript" src="css/nicepage.js" defer=""></script>

<script>
var carousel = document.querySelector('.carousel');
var cells = carousel.querySelectorAll('.carousel__cell');
var cellCount; // cellCount set from cells-range input value
var selectedIndex = 0;
var cellWidth = carousel.offsetWidth;
var cellHeight = carousel.offsetHeight;
var isHorizontal = true;
var rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
var radius, theta;
// console.log( cellWidth, cellHeight );

function rotateCarousel() {
  var angle = theta * selectedIndex * -1;
  carousel.style.transform = 'translateZ(' + -radius + 'px) ' + 
    rotateFn + '(' + angle + 'deg)';
}

var prevButton = document.querySelector('.previous-button');
prevButton.addEventListener( 'click', function() {
  selectedIndex--;
  rotateCarousel();
});

var nextButton = document.querySelector('.next-button');
nextButton.addEventListener( 'click', function() {
  selectedIndex++;
  rotateCarousel();
});

var cellsRange = document.querySelector('.cells-range');
cellsRange.addEventListener( 'change', changeCarousel );
cellsRange.addEventListener( 'input', changeCarousel );



function changeCarousel() {
  cellCount = cellsRange.value;
  theta = 360 / cellCount;
  var cellSize = isHorizontal ? cellWidth : cellHeight;
  radius = Math.round( ( cellSize / 2) / Math.tan( Math.PI / cellCount ) );
  for ( var i=0; i < cells.length; i++ ) {
    var cell = cells[i];
    if ( i < cellCount ) {
      // visible cell
      cell.style.opacity = 1;
      var cellAngle = theta * i;
      cell.style.transform = rotateFn + '(' + cellAngle + 'deg) translateZ(' + radius + 'px)';
    } else {
      // hidden cell
      cell.style.opacity = 0;
      cell.style.transform = 'none';
    }
  }

  rotateCarousel();
}

var orientationRadios = document.querySelectorAll('input[name="orientation"]');
( function() {
  for ( var i=0; i < orientationRadios.length; i++ ) {
    var radio = orientationRadios[i];
    radio.addEventListener( 'change', onOrientationChange );
  }
})();

function onOrientationChange() {
  var checkedRadio = document.querySelector('input[name="orientation"]:checked');
  isHorizontal = checkedRadio.value == 'horizontal';
  rotateFn = isHorizontal ? 'rotateY' : 'rotateX';
  changeCarousel();
}

// set initials
onOrientationChange();

</script>
  </body>
</html>