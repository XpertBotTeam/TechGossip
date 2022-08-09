
      <x-layout>
      
      @foreach($posts as $post)

        <x-postcard :post="$post" />
        
      @endforeach          
      
      </x-layout>
