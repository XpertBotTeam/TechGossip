<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechGossip</title>
    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
 
</head>      
<body>

   
    <div id="root">

<link rel="stylesheet" v-bind:href="mode">

<x-header/>

        <div v-show="sidebarFlag">
            <x-sidebar />
        </div>
        
    <section class="p-4 my-container active-cont flex-column justify-content-end" >
      
      <div v-if='loginFlag'>
            <x-login/>
        </div>
        <button class="btn" id="menu-btn" v-on:click="toggle" name="toggle" style="z-index: 1">Toggle Sidebar</button>
      
{{$slot}}

    </section>
</div>



@include('components.mainVue')
  
</body>

</html>