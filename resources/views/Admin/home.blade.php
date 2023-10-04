@extends("layouts.pubblic")

@section("main")
@include("partials.jumbo")
<section id="serie-cards">
  <div class="container">
    <div class="row pt-5 pb-3 align-items-stretch">
        @foreach ($comics as $comic)
        <a href="{{ route('admin.comic.show', $comic->id) }}" class="col-2 text-white pb-2 mb-4 text-decoration-none ">
            <img src="{{$comic->thumb}}" alt=" {{$comic->title}}" class="img-fluid">
        <div>
          {{$comic->series}}
        </div>
      </a>
      @endforeach
    </div>
  </div>
  </section>
@endsection

@section("footer")
  @include("partials.footer")
@endsection

@section("js")
  @vite('resources/js/deleteConfirm.js')
@endsection