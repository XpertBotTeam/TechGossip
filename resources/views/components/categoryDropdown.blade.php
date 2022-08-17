<div class="w3-dropdown-hover">
    <button class="w3-button">Categories</button>
    <div class="w3-dropdown-content w3-bar-block w3-border">
        @foreach ($categories as $category)
      <a href="#" class="w3-bar-item w3-button">{{ $category->name }}</a>
      @endforeach
    </div>
</div>