
   
<nav class="navbar navbar-expand d-flex flex-column align-item-start active-nav" id="sidebar">

    <a href="/" class="navbar-brand text-light mt-5">
        <div class="display-6 font-weight-bold" >TechGossip</div>
    </a>

        <ul class="navbar-nav d-flex flex-column mt-5 w-100" >
                  <li class="nav-item w-100">
                      <a href="/" class="nav-link text-light pl-4">Home</a>
                  </li>

                  @guest
                  <li class="nav-item w-100">
                      <a href="#SignIn" class="nav-link text-light pl-4" v-on:click="signupPop">Sign In</a>
                  </li>
                  @endguest

                  <li class="nav-item dropdown w-100">
                      <a href="#" class="nav-link dropdown-toggle text-light pl-4" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Category</a>
                      <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                          <li><a href="#" class="dropdown-item text-light pl-4 p-2">{{ $category->name }}</a></li>
                          @endforeach
                      </ul>
                  </li>

                  <li class="nav-item w-100">
                      <a href="#" class="nav-link text-light pl-4">About</a>
                  </li>

                  <li class="nav-item w-100">
                      <a href="#" class="nav-link text-light pl-4" v-on:click="changeMode">Switch Theme</a>
                  </li>
                  
                 
              </ul>

</nav>