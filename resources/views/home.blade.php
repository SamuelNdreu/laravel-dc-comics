@extends("layouts.pubblic")

@section("main")
@include("partials.jumbo")
<section id="serie-cards">
  <div class="container">
    <div class="row pt-5">
      @foreach ($comics as $comic)
      <a href="{{ route('admin.show', $comic->id)}}" class="col-2 text-white text-decoration-none">
        <img src="{{$comic->thumb}}" alt=" {{$comic->title}}" class="img-fluid">
        <div>
          {{$comic->series}}
        </div>
      </a>
      @endforeach
    </div>
    
    <div class="text-center">
      <a href="{{route('admin.create')}}" class="btn btn-primary my-4">ADD</a> 
    </div>
    </div>
  </section>
@endsection