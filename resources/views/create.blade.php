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
        <form action="/posts" method="POST">
            @csrf
          <div class="form-group">
            <label for="title">Post</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Enter Post Title">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description" placeholder="Enter Description" cols="30" rows="10"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Post</button>
        </form>
      </div>
    
  </div>


@endsection