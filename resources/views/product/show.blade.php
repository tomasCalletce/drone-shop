@extends('layouts.app')

@section('title', $viewData['title'])
@section('content')
<div>
  <a href={{route('product.index')}}>all products</a>
  <div>
    <p>{{ $viewData['product']['name'] }}</p>
    <p>{{ $viewData['product']['description'] }}</p>
  </div>
  <div>
    <h1>Comments</h1>
    @foreach($viewData["product"]->comments as $comment)
      <p>{{$comment->getDescription()}}</p>
     @endforeach
  </div>
  <form action="{{ route('comment.save', $viewData['product']['id']) }}" method="POST">
    @csrf
    @method('POST')
    <h2>Make Comment</h2>
    <div class="form-group">
      <label for="name">make comment:</label>
      <input type="text" id="description" name="description" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">save</button>
  </form>
  <form action="{{ route('product.destroy', $viewData['product']['id']) }}" method="POST">
    @csrf
    @method('DELETE')
    <h2>Delete Product</h2>
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>
  <form action="{{ route('product.update', $viewData['product']['id']) }}" method="POST">
    @csrf
    @method('PUT')
    <h2>Update Product</h2>
    <div class="form-group">
      <label for="name">Product Name:</label>
      <input type="text" id="name" name="name" class="form-control" value="{{ $viewData['product']['name'] }}" required>
    </div>
    <div class="form-group">
      <label for="description">Product Description:</label>
      <input type="text" id="description" name="description" class="form-control" value="{{ $viewData['product']['description'] }}" required>
    </div>
    <div class="form-group">
      <label for="description">Product Price:</label>
      <input type="number" id="price" name="price" class="form-control" value="{{ $viewData['product']['price'] }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
@stop