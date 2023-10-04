<form class="container mb-5" action="{{route($route, $comic->id)}}" method="POST">
    @csrf

    @method($method)
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" class="form-control"name="title" value="{{$comic->title}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Description</label>
      <textarea name="description" class="form-control">{{$comic->description}}</textarea>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Thumb</label>
      <input type="text" class="form-control"name="thumb" value="{{$comic->thumb}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Price</label>
      <input type="text" class="form-control"name="price" value="{{$comic->price}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Series</label>
      <input type="text" class="form-control"name="series" value="{{$comic->series}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Sale date</label>
      <input type="text" class="form-control"name="sale_date" value="{{$comic->sale_date}}">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Type</label>
      <input type="text" class="form-control"name="type" value="{{$comic->type}}">
    </div>
    <button type="submit" class="btn btn-primary">CREATE</button>
  </form>