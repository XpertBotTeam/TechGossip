<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  
  @guest
  <a href="#SignIn" class="w3-bar-item w3-button" v-on:click="signupPop">Sign In</a>
  @endguest



    <a href="#" class="w3-bar-item w3-button">About</a>
    <a href="#" class="w3-bar-item w3-button"  v-on:click="changeMode">Switch Theme</a>

    <div class="w3-dropdown-hover">
        <button class="w3-button">Hover Over Me!</button>
        <div class="w3-dropdown-content w3-bar-block w3-border">
            @foreach ($categories as $category)
          <a href="#" class="w3-bar-item w3-button">{{ $category->name }}</a>
          @endforeach
        </div>
  </div>
</div>

<!-- Page Content -->
<div style="margin-left:15%">

<div class="w3-container w3-teal">
  <h1>My Page</h1>
</div>

<img src="/frog.png" alt="Car" style="width:100%">

<div class="w3-container">
<h2>Sidebar Navigation Example</h2>
<p>The sidebar with is set with "style="width:25%".</p>
<p>The left margin of the page content is set to the same value.</p>
</div>

</div>
      
</body>
</html>
