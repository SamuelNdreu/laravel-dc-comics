@extends("layouts.pubblic")

@section("main")
<form class="container mb-5" action="{{route('admin.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" class="form-control"name="title">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Description</label>
      <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Thumb</label>
      <input type="text" class="form-control"name="thumb">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Price</label>
      <input type="text" class="form-control"name="price">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Series</label>
      <input type="text" class="form-control"name="series">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Sale date</label>
      <input type="text" class="form-control"name="sale_date">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Type</label>
      <input type="text" class="form-control"name="type">
    </div>
    <button type="submit" class="btn btn-primary">CREATE</button>
  </form>
@endsection
