@if($errors->any())
<div class="alert alert-danger container">
  <ul>
    @foreach($errors->all() as $error)
      <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<form class="container mb-5" action="{{route($route, $comic->id)}}" method="POST">
    @csrf

    @method($method)
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" class="form-control"name="title" value="{{old('title') ?? $comic->title}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Description</label>
      <textarea name="description" class="form-control">{{old('description') ?? $comic->description}}</textarea>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Thumb</label>
      <input type="text" class="form-control"name="thumb" value="{{old('thumb') ?? $comic->thumb}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Price</label>
      <input type="text" class="form-control"name="price" value="{{old('price') ?? $comic->price}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Series</label>
      <input type="text" class="form-control"name="series" value="{{old('series') ?? $comic->series}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Sale date</label>
      <input type="text" class="form-control"name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Type</label>
      <input type="text" class="form-control"name="type" value="{{old('type') ?? $comic->type}}">
    </div>
    <button type="submit" class="btn btn-primary">CREATE</button>
  </form>