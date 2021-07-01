<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css">
<body>

<!-- Navigation -->
<nav class="container">
  <a href="#home" class="container">Home</a>
  <a href="#about" class="container">About</a>
  <a href="#contact" class="container">Contact</a>



  
</nav>

<!-- Slide Show -->
<section>
  <img class="mySlides" src="img1.jpg"
  style="width:100%">
  <img class="mySlides" src="img2.jpg"
  style="width:100%">
  <img class="mySlides" src="img3.jpg"
  style="width:100%">
</section>

<!-- Description -->
<section class="class-section" style="max-width:600px">
  <h2 class="Yummy-class">Yummy</h2>
  <img src="Assets/images/img7.png" alt="">
  <p class="food"><i>We love food</i></p>
  <p class="food">Although staying at home is the best way to reduce the spread of COVID-19,
	  The sudden change may lead to bad eating habits and as a result... We have created the best eating plans website to share healthy food and tips. It is very important to plan on what you are going to eat weekly. allocate time for meal breaks...If you are used to 3 meals per day then stick to that each day. While sticking to our healthy meals, make sure you exercise. Do this regularly so that you can maintain your weight. We are so excited to start this journey with you :).</p>
</section>

<!-- Food categories -->

  <article class="food-categories">
    <p>Breakfast</p>
    <img src="Assets/images/img1.jpg" alt="" style="width:100%">
    <p>Healthy breakfast.</p>
  </article>
  <article class="food-categories">
    <p>Lunch</p>
    <img src="Assets/images/img3.jpg" alt="" style="width:100%">
    <p>Healthy lunch.</p>
  </article>
  <article class="food-categories">
    <p>Supper</p>
    <img src="img8.jpeg" alt="" style="width:100%">
    <p>Healthy meal to eat for super.</p>
  </article>


<script>
// Automatic Slideshow - change image every 3 seconds
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
  setTimeout(carousel, 3000);
}
</script>

</body>
</html>

