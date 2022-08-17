<div v-bind:class="sidebarDesign" style="width:14%">
    <h3 class="w3-bar-item">Menu</h3>
    @auth
    <h4 class="w3-bar-item">Welcome {{auth()->user()->username}}</h2><br>
    @endauth
    <a href="/" class="w3-bar-item w3-button">Home</a>
    
    @guest
    <a href="#" class="w3-bar-item w3-button" v-on:click="signupPop">Sign In</a>
    @endguest
  
  @auth
  @if( auth()->user()->is_admin)
  <a href="/dashboard" class="w3-bar-item w3-button">Dashboard</a>
  @endif
  @endauth
   
      <a href="#" class="w3-bar-item w3-button">About</a>
      <a href="#" class="w3-bar-item w3-button"  v-on:click="changeMode">Switch Theme</a>
  
      <div class="w3-dropdown-hover">
          <button class="w3-button">Categories</button>
          <div class="w3-dropdown-content w3-bar-block w3-border">
              @foreach ($categories as $category)
            <a href="{{$category->slug}}" class="w3-bar-item w3-button">{{ $category->name }}</a>
            @endforeach
          </div>
    </div>
  </div>