<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechGossip</title>
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
  
    
 
</head>      
<body>

   
    <div id="root">

<link rel="stylesheet" v-bind:href="mode">

        <div v-show="sidebarFlag">
            <x-sidebar />
        </div>
        
    <section class="p-4 my-container active-cont flex-column justify-content-end" >
      
      <div v-if='loginFlag'>
            <x-login/>
        </div>
        <button class="btn" id="menu-btn" v-on:click="toggle" name="toggle">Toggle Sidebar</button>
        {{-- <h1 v-bind:class="contFontColor">Homepage</h1><br>  --}}
{{$slot}}

    </section>
</div>



<!-- bootstrap js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
<!-- custom js -->


@include('components.mainVue')
  
</body>

</html>