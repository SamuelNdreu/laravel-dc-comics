@extends("layouts.pubblic")

@section("main")
@include("partials.createEditForm", ["route"=>"admin.comic.store", "method" => "POST", "comic"=> $comic])
@endsection
