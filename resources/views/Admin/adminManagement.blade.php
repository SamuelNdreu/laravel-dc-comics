@extends("layouts.pubblic")

@section("main")
  <section id="serie-cards" class="bg-white">
    <div class="container">
      <div class="row pt-5 align-items-stretch">
        @foreach ($comics as $comic)
        <div class="col-2 pb-5 mb-4 position-relative">
          <img src="{{$comic->thumb}}" alt=" {{$comic->title}}" class="img-fluid">
          <div>
            {{$comic->series}}
          </div>
          <div class="position-absolute bottom-0">
            <a href="{{ route('admin.comic.show', $comic->id)}}" class="btn btn-primary btn-sm">Show</a>
            <a href="{{ route('admin.comic.edit', $comic->id)}}" class="btn btn-warning btn-sm">Edit</a>
            <form class="d-inline delete-element" action="{{route('admin.comic.destroy', $comic->id)}}" method="POST" data-element-name="{{$comic->title}}">
              @csrf 
              @method("DELETE")
              <button type="submit" class="btn btn-danger btn-sm">Cancel</button>
            </form>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="text-center">
      <a href="{{route('admin.comic.create')}}" class="btn btn-primary my-4">ADD</a> 
    </div>
  </section>
@endsection

@section("js")
  @vite('resources/js/deleteConfirm.js')
@endsection