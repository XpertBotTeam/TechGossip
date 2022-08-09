@props(['post'])
<div class="card m-auto p-3" v-bind:class="contFontColor" id="postcard">
            
    <span class="card-title"> <h5>{{$post -> title}}   &nbsp; &nbsp; {{ $post -> category -> name }}</h5>  ~ <em >posted by {{$post -> user -> username}}</em></p>
    <img src="frog.png" class="card-img-top" alt="...">
    
    <div class="card-body d-flex flex-row justify-content-between" >
      
      <p class="card-text">{{$post -> excerpt}}</p>
      <a href="post/{{$post -> id}}" class="btn btn-primary ml-2 p-3 h-25 float-xl-left">View</a>
    </div>
  </div>
  