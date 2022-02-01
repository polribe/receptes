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
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">CREATE</h3>
  </div>
  <!-- Contact Section -->
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Create a Recipe</h3>
    <p>Lets get in touch and talk about your next project.</p>
    <form action="{{route('recipe.store')}}" method='post'>
    	@csrf
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Description" required name="description">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Cooking Time" required name="cookingTime">
      <input class="w3-input w3-section w3-border" type="text" placeholder="User ID" required name="user_id">
       <input class="w3-input w3-section w3-border" type="text" placeholder="Category ID" required name="category_id">

      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> CREATE RECIPE
      </button>
    </form>
  </div>
  
<!-- Image of location/map -->

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

</body>
</html>
