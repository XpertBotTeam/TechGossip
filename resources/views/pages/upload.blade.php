<x-layout>
  

<form class="m-5 p-2 border border-info rounded" method="post" action="upload" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" name="title"  required>
    @error('title')
            <span class="error">{{ $message }} </span>
    @enderror
  </div>

  <div class="form-group">
    <label for="excerpt">Excerpt</label>
    <input type="text" class="form-control" name="excerpt"  required>
    @error('excerpt')
            <span class="error">{{ $message }} </span>
    @enderror
  </div>

  <div class="form-group">
    <label for="Categories">Categories</label>
    <select class="form-control"  name="category_id" required>
     @foreach ($categories as $category) 
     <option value="{{$category->id}}">{{$category->name}}</option>
     @endforeach
    </select>

    @error('category_id')
            <span class="error">{{ $message }} </span>
    @enderror
  </div>

  <div class="form-group">
    <label for="exampleFormControlFile1">Thumbnail</label>
    <input type="file" class="form-control-file" name="thumbnail" required>
    @error('thumbnail')
            <span class="error">{{ $message }} </span>
    @enderror
  </div>
 
  <div class="form-group">
    <label for="body">body</label>
    <textarea class="form-control" name="body" rows="3" required></textarea>
    @error('body')
            <span class="error">{{ $message }} </span>
    @enderror
  </div>
  <button class="form-control btn btn-primary btn-lg btn-block ">Post</button>
</form>




</x-layout>