
      <x-layout>
        @auth
        <div class="d-flex justify-content-center mb-3">
        <a href="upload" type="button" class="btn btn-lg btn-success ">Create Post</a>
        </div>
        @endauth
        
      @foreach($posts as $post)

        <x-postcard :post="$post" />
        
      @endforeach          
      
      </x-layout>
