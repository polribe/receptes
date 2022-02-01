<!DOCTYPE html>
<html>
<title>Recipes Index</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>BR</b> Architects</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Projects</a>
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>

<!-- Header -->


<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Categories</h3>
  </div>

 
  @foreach($categories as $category)
  	<div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <a href="{{route('category.show', ['category'=>$category])}}"><div class="w3-display-topleft w3-black w3-padding">{{$category->name}}</div>
      </div></a>
    </div>
  @endforeach

  <!-- About Section -->

  
<!-- Image of location/map -->

<!-- End page content -->
</div>


<!-- Footer -->


</body>
</html>