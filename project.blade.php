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
<link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{URL::asset('js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{URL::asset('css/style.css')}}" rel='stylesheet' type='text/css' />
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
          <a href="index.html"><img src="images/logo.png"></img></a>
        </div>
          <div class="menu">
          <a class="toggleMenu" href="#"><img src="{{URL::asset('images/nav_icon.png')}}" alt="" /> </a>
          <ul class="nav" id="nav">
            <li ><a href="index">Home</a></li>
            <li><a href="about">About</a></li>
           
           
           <li class="dropdown">
         <a class="dropbtn" href="">Projects</a>
         <div class="dropdown-content">
                <a href="complete" >Complete Projects</a>
            <a href="running" class="current">Running Projects</a>
   
         </div>

         </li>
            
            <li><a href="contact">Contact</a></li>                
            <div class="clear"></div>
          </ul>
          <script type="text/javascript" src="{{URL::asset('responsive-nav.js')}}"></script>
        </div>              
          <div class="clearfix"> </div>
          <!----//End-top-nav---->
       </div>
    </div>

    <!----//End-header---->
     
     @yield('main_content')

     </div>
    </div>



</body>
</html>   

