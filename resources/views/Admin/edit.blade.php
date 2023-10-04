@extends("layouts.pubblic")

@section("main")
@include("partials.createEditForm", ["route"=>"admin.comic.update", "method" => "PUT", "comic"=> $comic])
  </form>
@endsection