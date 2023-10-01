@extends("layouts.pubblic")

@section("main")
  <div class="container">
    <section id="card-info" class="row pt-5">
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="w-25">
        <h1>{{$comic->title}}</h1>
        <p>{{$comic->description}}</p>
      <div>ecc.</div>
    </section>
  </div>
@endsection