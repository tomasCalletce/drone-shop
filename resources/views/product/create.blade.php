@extends('layouts.app')

@section('title', $viewData['title'])
@section('content')
  <form method="POST" action="{{ route('product.save') }}">
    @csrf
    <input type="text" class="form-control mb-2" placeholder="Enter name" name="name" value="{{ old('name') }}" />
    <input type="text" class="form-control mb-2" placeholder="Enter description" name="description" value="{{ old('description') }}" />
    <input type="text" class="form-control mb-2" placeholder="Enter price" name="price" value="{{ old('price') }}" />
    <input type="submit" class="btn btn-primary" value="Send" />
  </form>
@stop


