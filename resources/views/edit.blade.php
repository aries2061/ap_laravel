@extends("layout.master")

@section("pagetitle")
  Blog - Home
@endsection

@section("content")

  <div class="row mt-1 mb-4">
    <div class="col-12 mt-3 mb-2">
      <h3 class="text-center"><u>Create Post</u></h3>
    </div>


    
      <div class="col-xl-8 col-md-8 col-sm-12 mx-auto mt-3">
        <form action="/posts/{{$post->id}}" method="POST">
            @method('PUT')
            @csrf
          <div class="form-group">
            <label for="title">Post</label>
            <input type="text" name="title" class="form-control @error('title') border-danger @enderror" id="title" placeholder="Enter Post Title" value="{{ old('title',$post->title) }}">
            <!-- @error('title')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror -->
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') border-danger @enderror" name="description" id="description" placeholder="Enter Description" cols="30" rows="10">{{ old('description',$post->description) }}</textarea>
            @error('description')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
          </div>

          <select name="category_id" id="" class="form-control mb-2">
              <option value="">Select Category</option>
              @foreach($categories as $category)
              <option value="{{$category->id}}" {{ $category->id==$post->category_id ? "selected":""}}>{{$category->name}}</option>
              @endforeach
          </select>

          <div class="form-row">
          <button type="submit" class="btn btn-success ml-1">Update</button>
          <a href="/" class="btn btn-danger ml-2">Back</a>
          </div>
        </form>
      </div>
    
  </div>


@endsection