@extends("layouts.pubblic")

@section("main")
@include("partials.jumbo")
<section id="serie-cards">
  <div class="container">
    <div class="row pt-5 align-items-stretch">
        @foreach ($comics as $comic)
        <div class="col-2 text-white pb-5 mb-4 position-relative">
            <img src="{{$comic->thumb}}" alt=" {{$comic->title}}" class="img-fluid">
        <div>
          {{$comic->series}}
        </div>
      </a>
      <div class="position-absolute bottom-0">
        <a href="{{ route('admin.show', $comic->id)}}" class="btn btn-primary btn-sm">Show</a>
        <a href="{{ route('admin.edit', $comic->id)}}" class="btn btn-warning btn-sm">Edit</a>
        <a href="" class="btn btn-danger btn-sm">Cancel</a>
      </div>
    </div>
      @endforeach
    </div>

    <div class="text-center">
      <a href="{{route('admin.create')}}" class="btn btn-primary my-4">ADD</a> 
    </div>
    </div>
  </section>
@endsection