</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome To Bus Booking System</title>
	  <link rel="stylesheet" href="index.css">
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>

<h2><b>Bus Booking</b></h2>

	<div class="navbar">
  <a href="#home">Home</a>
  <a href="#news">About Us</a>
  <div class="dropdown">
    <button class="dropbtn">Magazine 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">News</a>
      <a href="#">Articles</a>
      <a href="#">Tutorial</a>
    </div>
  </div> 
  <a href="#contact">Contact</a>

   <a href="login.php">Sign Up/ Login</a>

</div>

<div class="w3-content w3-display-container" style="max-width:800px">
  <img class="mySlides" src="images/booking.jpg" style="width:100%">
  <img class="mySlides" src="images/waiting.jpg" style="width:100%">
  <img class="mySlides" src="images/success.jpg" style="width:100%">
  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
</body>


</html>
