<nav class="navbar navbar-expand-lg navbar-light bg-info p-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TechGossip</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
   
      <div class=" collapse navbar-collapse" >
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <span class="nav-link mx-2"><form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="button">Search</button>
              </form></span>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
          <li class="nav-item mx-2">

            
            <div class="w3-dropdown-hover">

              <button class="w3-button"> 
                <a class="nav-link text-dark h5" href="" target="blank"><i><a class="navbar-brand" href="#">
                <img src="/person.svg" alt="Avatar Logo" style="width:40px;" class="rounded-pill"> 
              </a></i></a>
            </button>

              <div class="w3-dropdown-content w3-bar-block w3-border">
                @auth
                <a href="#profile" class="w3-bar-item w3-button">profile</a>
                <a href="logout" class="w3-bar-item w3-button">logout</a>
                @endauth
               
                @guest
                <a href="#SignIn" class="w3-bar-item w3-button" v-on:click="signupPop">Sign in</a>
                <a href="signup" class="w3-bar-item w3-button">Sign up</a>
                @endguest
              </div>
        </div>

            
          </li>
        </ul>

      </div>
    </div>
  </nav>