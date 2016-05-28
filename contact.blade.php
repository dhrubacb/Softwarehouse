<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Software House</title>
<style type="text/css">


li a, #dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: #000000 ;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #000000;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {

	background-color: #000000}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Change color of dropdown links on hover */


/* Change the background color of the dropdown button when the dropdown content is shown */

</style>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
</script>
</head>
<body>
      <!----start-header---->
		<div class="header">
			<div class="container">
				<div class="logo">
				   <a href="index"><h2 class="sw" style="display: inline-block;">Software</h2><h2 class="house" style="display: inline-block;"> House</h2></a>
				</div>
		  		<div class="menu">
					<a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
					<ul class="nav" id="nav">
					  <li><a href="index">Home</a></li>
					  <li><a href="about">About</a></li>
					 
					 
					 <li class="dropdown">
 				 <a class="dropbtn" >Projects</a>
 				 <div class="dropdown-content">
          		  <a href="complete">Complete Projects</a>
  				  <a href="running">Running Projects</a>
   
 				 </div>

   		   </li>
					  
					  <li class="current"><a href="contact">Contact</a></li>								
					  <div class="clear"></div>
					</ul>
					<script type="text/javascript" src="js/responsive-nav.js"></script>
				</div>							
	  			<div class="clearfix"> </div>
			    <!----//End-top-nav---->
			 </div>
		</div>
		<!----//End-header---->
		
		<div class="contact">
			<div class="container">
				<h2 class='item_title'>Contact</h2>
			    <div class="map">
				 <script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
var myCenter = new google.maps.LatLng(21.416721, 91.982126);

function initialize() {
var mapProp = {
center:myCenter,
zoom:12,
scrollwheel:false,
draggable:false,
mapTypeId:google.maps.MapTypeId.ROADMAP
};

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
position:myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
		

			    </div>
                <div class="row contact_top">
                	<div class="col-md-4 contact_details">
                	   <h5>Address :</h5>
                	   <i class="address"></i>
                	   <div class="contact_address">
				
						Department of Computer Science and Engineering.<br>Shahajalal University of Science and Technology, Sylhet<br>
						</div>
                	</div>
                	<div class="col-md-4 contact_details">
                	   <h5>Phone :</h5>
                	   <i class="phone"></i>
                	   <div class="contact_address">
						+880______<br>
						+880______<br>
					   </div>
                	</div>
                	<div class="col-md-4 contact_details">
                	   <h5>Email :</h5>
                	   <i class="mail"></i>
                	   <div class="contact_mail">
						dhruba@sust.edu
					   </div>
                	</div>
                </div>
                <div class="contact_bottom">
                   <h3>Contact Us</h3>
                  
                   <form method="post" action="contact-post.html">
					<div class="contact-to">
                     	<input type="text" class="text" value="Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name...';}">
					 	<input type="text" class="text" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}" style="margin-left: 10px">
					 	<input type="text" class="text" value="Subject..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject...';}" style="margin-left: 10px">
					</div>
					<div class="text2">
	                   <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message..</textarea>
	                </div>
	                <div>
	               		<a href="#" class="submit">Submit</a>
	                </div>
	             </form>
                </div>
			</div>
		</div>
		<!----//end-banner---->
	    <div class="footer">
			
		     <div class="footer_midle">
			   	<div class='container'>
			   	 <div class="row">
			   		<div class="col-md-4">
			   		    <ul class="social_left">
			   			  <li class="facebook"><a href="#"><i class="fb"> </i></a></li>
			   			  <li class="fb_text"><h4><a href="#">Follow us on Facebook</a></h4>
			   			  	<p>quod mazim placerat</p>
			   			  </li>
			   			  <div class="clearfix"> </div>
			   			</ul>
			   		</div>
			   		<div class="col-md-4">
			   		    <ul class="social_left">
			   			  <li class="facebook"><a href="#"><i class="google"> </i></a></li>
			   			  <li class="fb_text"><h4><a href="#">Follow us on Google +</a></h4>
			   			  	<p>dolore eu feugiat nulla</p>
			   			  </li>
			   			  <div class="clearfix"> </div>
			   			</ul>
			   		</div>
			   		<div class="col-md-4">
			   		    <ul class="social_left">
			   			  <li class="facebook"><a href="#"><i class="linked"> </i></a></li>
			   			  <li class="fb_text"><h4><a href="#">Follow us on LinkedIn</a></h4>
			   			  	<p>quod mazim placerat</p>
			   			  </li>
			   			  <div class="clearfix"> </div>
			   			</ul>
			   		</div>
			   	 </div>
		       </div>
		    </div>
		    <div class="footer_bottom">
		    	<div class="copy">
		           <p>&copy; Software House 2016 <a href="http://w3layouts.com" target="_blank">  </a></p>
		       </div>
		    </div>
		</div>
</body>
</html>		