@extends("layout.master")

@section("pagetitle")
  Blog - Home
@endsection

@section("content")

  <div class="row mt-5 mb-4">
    <div class="col-12 mt-3 mb-2">
      <h3 class="text-center"><u>Post</u></h3>
    </div>


    
      <div class="col-xl-12 col-md-12 col-sm-12 mt-3">
        <div class="card">
            <div class="card-header">
              <h5 class="card-title">{{ $post->title }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $post->description }}</p>
              <a href="/" class="btn btn-success">Back</a>
            </div>
          </div>
      </div>
    
  </div>


@endsection