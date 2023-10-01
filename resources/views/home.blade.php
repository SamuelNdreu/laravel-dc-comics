@extends("layouts.pubblic")

@section("main")
    <section id="serie-cards">
        
      <div class="container">
        <div class="row pt-5">
          @foreach ($comics as $comic)
          <a href="{{ route('info.card', $comic->id)}}" class="col-2 text-white text-decoration-none">

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