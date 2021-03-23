<html>
<head><title>CZ--COMPUTER ZONE</title></head>
<body bg background="pic/a5.jpg">


<img src="pic/logo.png" align="left" hspace="12px" height="180" width="500"/></center>

<marquee bgcolor="#CC6633" ><font color="white"> Welcome To COMPUTER ZONE official Website</font></marquee><BR> 
<style>
#p { background-color: #66CC00; height: 40px; text-align: center; font-size: 14px;
}
#sc img{
    width: 100%;
}
ul{
padding: 0;
list-style: none;
background: #CC6633;
}
ul li{
display: inline-block;
position: relative;
line-height: 21px;
text-align: left;
}
ul li a{
display: block;
padding: 8px 25px;
color: #333;
text-decoration: none;
}
ul li a:hover{
color: ?#?fff?;
background:#CC9966;
}
ul li ul.dropdown{
min-width: 175px; /* Set width of the dropdown */
background: #CC9966;
display: none;
position: absolute;
z-index: 999;
left: 0;
}
ul li:hover ul.dropdown{
display: block; /* Display the dropdown */
}
ul li ul.dropdown li{
display: block;
}
</style>
<style>


#menu {
width: 600px 
hight: 50px
font-size: 16px 
font-family:Georgia, "Times New Roman", Times, serif;
font-weight: bold; color:#FFFFFF;
text-align:left;



background-color:#000000; 
background-repeat:no-repeat;
border-radius: 8px;
}


#menu li {
display: list-item;
padding: 5px;

}


</style>

<style>
#C { color:#FFFFFF; background-color:#000099; text-align:left; position:relative;
left:50px; width:100%; font-family: "Book Antiqua", "Franklin Gothic Book";
}</style>


<br><br>
<div id="p">
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="aboutus.html">ABOUT US</a></li>
<li><a href="#">COURSES</a>
<ul class="dropdown">
<li><a href="courses/webdesigning.html">WEB DESIGNING</a></li>
<li><a href="courses/autocad.html">AUTOCAD</a></li>
<li><a href="courses/solidworks.html">SOLIDWORKS</a></li>
<li><a href="courses/staddpro.html">STAAD.Pro</a></li>
<li><a href="courses/php.html">PHP/MySQL</a></li>
</ul>
</li>
<li><a href="contactus.html">CONTACT US</a></li>
<li><a href="index_inquiry.php" target="_blank">INQUIRY</a></li>
<li><a href="index_search.php" target="_blank">STUDENT VERYFICATION</a></li>
</ul></div><br>
<style>
.mySlides {display:none;}
</style>
<body>
<h4 class="w3-center"></h4>
<div class="w3-content w3-section">
<div id="sc">
  <center><img class="mySlides" src="pic/c.jpg" width="1300" higth="300"></center>
   <center><img class="mySlides" src="pic/c1.jpg"width="1300" higth="300"></center>
   <center><img class="mySlides" src="pic/c2.jpg"width="1300" higth="300"></center>
   <center><img class="mySlides" src="pic/c3.jpg"width="1300" higth="300"></center>
   <center><img class="mySlides" src="pic/c4.jpg" width="1300" higth="300"></center>
</div></div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 6000); // Change image every 6 seconds
}
</script>

<?php
include("footer.php");
?>
</body>

</html>
