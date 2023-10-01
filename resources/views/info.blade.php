@extends("layouts.pubblic")

@section("main")
  <div class="container">
    <section id="card-info" class="row pt-5">
      <img src="{{$dcData[0]['thumb']}}" alt="{{$dcData[0]['title']}}" class="w-25">
      <h1>{{$dcData[0]["title"]}}</h1>
      <p>{{$dcData[0]["description"]}}</p>
      <div>ecc.</div>
    </section>
  </div>
@endsection