@extends("layout.master")

@section("content")

  <div class="jumbotron">
    <h1 class="display-4">Hello, Everyone!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    
  </div>

  <div class="row mt-5 mb-5">
    <div class="col-12 mt-3 mb-5">
      <h3 class="text-center"><u>Posts</u></h3>
    </div>

    @foreach($data as $row)
      <div class="col-xl-3 col-md-4 col-sm-12">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $row->title }}</h5>
              <p class="card-text">{{ $row->description }}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
      </div>
    @endforeach

  </div>


@endsection