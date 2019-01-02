<?php /* Template Name: CustomPageT1 */ ?>





<!-- import section -->
<head>
	<style>
		/* TEST SECTION*/
  .affix {
      top: 0;
      width: 100%;
      z-index: 9999 !important;
  }

  .affix + .container-fluid {
      padding-top: 70px;
  }


/* END */

.header {
  max-width: 1900px;
  display: relative;
  margin: 0 auto;
}
.responsive {
    width: 100%;
    max-width: 400px;
    height: auto;
}

.container-cover {
height: 225px;
}

.headerimage {
  
   background-color: #ffdb00;
}

#cover{ 
  display: block;
  margin-top: 0px;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  z-index:1;
  height: auto;

}
  
#logo {
  height: 125px;
  border-radius: 100%;
  left: 85%;
  top: -100px;
  z-index: auto;
  position:relative;
}


/* nav menu items */


#nav-menu {
 /* position: fixed; /* Set the navbar to fixed position 
  top: 0; /* Position the navbar at the top of the page */
  align: center;
  width: 100%;
  background-color: #000300;
  text-color: white;
  font-family: 'Roboto';
}

.col { 
  display:table-cell;
  width: 50%;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #030303;
}

li {
  float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
  background-color: #ffdb00;
  color: #030303;
  text-decoration: none;
  
}  

/* body */
.background {
  background-color: #ffffff;
}

/* Portfolio */

.title {
  font-size: 70px;
  font-family: 'Roboto'; /* it's better to find another font */
  text-color: #000300;
  font-style: normal;
  text-align: center;
  text-decoration: none;
  margin-top: 50px;
}

h5 {
  font-style: italic;
  text-align: center;
  font-family: 'Roboto';
  text-decoration: none;
}

hr.star-dark {
    color: #ffdb00;
    padding: 0;
    max-width: 512px;
    border: 0;
    border-top: solid 5px;
    text-align: center;
}


.row {
  align: in-line;
}

.img-thumbnail {
  width: 250px;
  border: 1px;
  color: black;
}

.col-sm-4 {
  text-align: center;
  padding: 15px;
}

.portfolio-elements:hover {
  opacity: 0.7;
}

a[target="_blank"] { 
    background-color: #ffdb00;
}

/* about us + contact form */
#about {
  width: 100%;
  padding-right: 5px;
  padding-left: 5px;
}

.about-us{
  text-align: right;
  font-family: roboto;
  font-style: italic;
  font-size: 15px;
  font-weight: 500;
}

figcaption { 
    display: block;
    align: bottom;
}


figcaption:hover {
    color: #ffdb00;
}

.contact{
  align: right;
  font-family: roboto;
}


#contact {
  width: 100%;
  padding-right: 5px;
  padding-left: 5px;
}

#form {
  align: left;
}

* {
  box-sizing:border-box;
}

.left {
  text-align:left;
  background-color:#000300;
  padding:10px;
  float:left;
  width:20%; /* The width is 20%, by default */
  height: 100px;
}

.main {
  text-align: center;
  background-color:#ffdb00;
  padding:10px;
  float:left;
  width:60%; /* The width is 60%, by default */
  height: 100px;
}

.right {
  text-align:right;
  background-color:#000300;
  padding:10px;
  float:left;
  width:20%; /* The width is 20%, by default */
  height: 100px;
}

/* contact form*/

input[type=text], select {
    width: 100%;
    padding: 6px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #ffdb00;
    color: black;
    padding: 6px 10px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

textarea {
    width: 100%;
    height: auto;
    padding: 6px 10px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 12px;
    resize: none;
}

input[type=submit]:hover {
    background-color: #eeca00;
}

div.form-contact {
    padding: 20px;
}
/* END */



.footer-logo {
  max-width: 100%;
  height: auto;
  border-radius: 50%;
  left: 5px;
  bottom: 5px; 
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

/* Socials */

.fa:hover {
  color: #ffdb00;
}

.fa {
  color: #ffffff;
  margin-top:20px;
  padding: 5px;
  align: center;
  font-size: 15px;
}

.right {
    text-align: center; 
  }

/* Use a media query to add a break point at 800px: */
@media screen and (max-width:800px) {
  h1.title {
    font-size: 30px;
  }
  .left, .main, .right {
    height: 100px;
    text-align: center;
    width:100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
  
   #logo {
    height: 100px;
    left: 75%;
    top: -90px;
    z-index: auto;
    position:relative;
}
    

}

@media screen and (min-width: 3px) {
  h1.title {
    font-size: 60px;
  }
  
  .footer-logo{
    width: 75px;
  }
}





	</style>
	</head>
</head>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- header section -->  
  <div id="home" class="header">
    <div class="container-cover">
      <div class="headerimage">
      <img id="cover" src="https://farm1.staticflickr.com/786/27376903868_6e28749f19_o.png" align="middle" class="responsive" alt="cover image of the company"/>
      </div>
     <nav class="navbar navbar-inverse " id="nav-menu" data-spy="affix" data-offset-top="197">
      <ul class="col">
        <li><a href="#home">Home</a></li>
        <li><a href="#portfolio">Portfolio</a></li>
        <li><a href="#about">About</a></li> 
      </ul>
    </nav>
      
      
            
<img id="logo" src="https://farm1.staticflickr.com/892/41207098002_7932f40c61_b.jpg" alt="personal photo or logo"/>
    </div>
  </div>

<!-- TEST SECTION -->





<!-- portfolio section -->
  <div class="background">
    <h1 id="portfolio" class="title">Portfolio</h2>
    <h5> Some web sites, projects and graphics made by me </h5>
    <hr class="star-dark"></hr>
  
<div  class="container">
  <div class="row">
    <div class="col-sm-4 portfolio-elements">
     <a href="https://codepen.io/r3ziel/pen/WzZQaY?editors=1100" target="_blank"> <img class="img-responsive img-thumbnail" src="https://farm1.staticflickr.com/873/40627350334_920cd22042_o.jpg"/></a><figcaption>1st FreeCodeCamp project</figcaption></div>
    
    <div class="col-sm-4 portfolio-elements">
     <a href="http://www.windroidanswers.com/" target="_blank"> <img class="img-responsive img-thumbnail" src="https://farm1.staticflickr.com/785/26377958687_99ab76ca04_o.jpg"/></a><figcaption>WinDroid Answers Community</figcaption></div>
    
    <div class="col-sm-4 portfolio-elements">
     <a href="http://ildemiurgo.it/" target="_blank"> <img class="img-responsive img-thumbnail" src="https://farm1.staticflickr.com/883/39441249730_ca37029d96_o.jpg"/></a><figcaption>il Demiurgo</figcaption>
    </div>
      </div>
  
  <div class="row">
    <div class="col-sm-4 portfolio-elements">
     <a href="http://sottosoprarent.com/" target="_blank"> <img class="img-responsive img-thumbnail" src="https://farm1.staticflickr.com/820/27376904678_3880f62cf1_o.jpg"/></a><figcaption>SottoSopra Rent</figcaption></div>
    
    <div class="col-sm-4 portfolio-elements">
     <a target="_blank"> <img class="img-responsive img-thumbnail" src="https://farm1.staticflickr.com/797/39441250610_703733597b_o.jpg"/></a><figcaption>WineBar Norge</figcaption></div>
    
    <div class="col-sm-4 portfolio-elements">
     <a href="http://www.avvocatogiovannasarnacchiaro.it/" target="_blank"> <img class="img-responsive img-thumbnail" src="https://farm1.staticflickr.com/883/27376904028_810d081303_o.jpg"/></a><figcaption>Studio Giovanna Sarnacchiaro</figcaption>
    </div>
      </div>
  
  <div class="row">
    <div class="col-sm-4 portfolio-elements">
     <a target="_blank"> <img class="img-responsive img-thumbnail" src="https://farm1.staticflickr.com/801/27376904918_cb985b67e7_o.jpg"/></a><figcaption>MotorPlanet Praha logo</figcaption></div>
    
    <div class="col-sm-4 portfolio-elements">
     <a href="http://www.scholaalbiniani.it/" target="_blank"> <img class="img-responsive img-thumbnail" src="https://farm1.staticflickr.com/878/39441249640_7e24d38e73_o.jpg"/></a><figcaption>Schola Albiniani</figcaption></div>
    
    <div class="col-sm-4 portfolio-elements">
     <a target="_blank"> <img class="img-responsive img-thumbnail" src="https://farm1.staticflickr.com/800/39441250550_c0def29b6a_o.jpg"/></a><figcaption>AzioniAMOci logo</figcaption>
    </div>
      </div>
  </div>
        </div>


<!-- about us section -->

    <h1 id="about" class="title">About Me and Contacts</h2>
  <hr class="star-dark"></hr>
<div id="about" class="row">
  <div class="col-sm-8"> <img class="img-responsive" src="https://farm1.staticflickr.com/799/39441250450_2ef0d04392_o.jpg"/>
  </div>
  <div><p class="col-sm-4 about-us">Web developer with practical experience in CMS like WordPress and similar (different sites already built and online), html5, CSS, Python (basic), project management, creative solutions, good writing skills in Italian, English and Spanish. 
I Love programming, I like to improve myself with new languages and disciplines, so I'm still studying and updating my knowledge in different ways. I’m on my journey to become a front-end developer and an object-oriented designer.
<br>If you want to tell me something, to request more info or a help in solve something, feel free to use the contact form below, I'll reply asap. <br>But please: no spam! ;)
    </p>
 
    </p></div>
  
  </div>

<!-- contact form section -->
<div class="row">
  <div id="form" class="col-sm-4">
    <h3>Contact Form</h3>
    
<div class="form-contact">
  <form action="mailto:r3ziel@gmail.com" method="GET">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Request</label>
    <select id="country" name="country">
      <option value="web-site">Website developing</option>
      <option value="app">App debugging</option>
      <option value="other">Other</option>
    </select>
    <hr/>
    <textarea>Your message...</textarea>
  
    <input type="submit" value="Submit">
  </form>
</div>
  </div>
  
  
  <div class="col-sm-8"> <img class="img-responsive" src="https://farm1.staticflickr.com/897/27376904778_64de8146a7_o.jpg"/>
  </div>
</div>

<h5>Made with <i class="fa fa-coffee" style="font-size: 18px; color:brown;"></i> by FuzeHeads 2018. All Rights Reserved</h5>
  

<!-- footer section -->
<footer>
  <div class="left">
  <img class="footer-logo" src="https://farm1.staticflickr.com/804/39444115980_88d414b250_o.jpg" alt="personal photo or logo"/>
</div>  

<div class="main">
  <h3>Live the <span style="font-weight:bold; color:red">Fuze</span> side of life</h3>
</div>

<div class="right">
  <a href="https://www.facebook.com/diego.sepe"> <i class="fa fa-facebook"></i></a>
  <a href="https://twitter.com/sepediego"> <i class="fa fa-twitter"></i></a>
  <a href="https://www.freecodecamp.org/r3ziel"> <i class="fa fa-free-code-camp"></i></a>
  <a href="https://github.com/r3ziel"> <i class="fa fa-github"></i></a>
  <a href="https://www.linkedin.com/in/sepediego/"> <i class="fa fa-linkedin"></i></a>
</div>

</footer>