@extends('layouts.app')

@section('title', $viewData['title'])
@section('content')
<div>
  <a href={{route('product.index')}}>all products</a>
  <div>
    <p>{{ $viewData['product']['name'] }}</p>
    <p>{{ $viewData['product']['description'] }}</p>
  </div>
  <form action="{{ route('product.destroy', $viewData['product']['id']) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>
</div>
@stop