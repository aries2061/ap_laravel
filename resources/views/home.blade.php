@extends("layout.master")

@section("pagetitle")
  Blog - Home
@endsection

@section("content")

  <div class="row mt-5 mb-4">
    <div class="col-12 mt-3 mb-2">
      <h3 class="text-center"><u>Posts</u></h3>
    </div>

    <div class="col-12 mt-2 mb-2"><a href="/posts/create" class="btn btn-success">New Post</a></div>

    @foreach($post as $row)
      <div class="col-xl-3 col-md-4 col-sm-12 mt-3">
        <div class="card">
            <div class="card-header">
              <h5 class="card-title">{{ $row->title }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $row->description }}</p>
              <div class="form-row">
                <a href="/posts/{{ $row->id }}" class="btn btn-warning mr-2"><i class="fas fa-angle-double-right"></i></a>
                <a href="/posts/{{ $row->id }}/edit" class="btn btn-info mr-2"><i class="fas fa-edit"></i></a>
                <form action="/posts/{{ $row->id }}" method="POST">
                  @method("DELETE")
                  @csrf
                  <button type="submit" class="btn btn-danger mr-2"><i class="fas fa-trash"></i></button>
                </form>
              </div>
            </div>
          </div>
      </div>
    @endforeach
  </div>


@endsection