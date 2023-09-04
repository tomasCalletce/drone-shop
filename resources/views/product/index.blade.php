@extends('layouts.app')

@section('title', $viewData['title'])
@section('content')
<div>
  <a href={{route('product.create')}}>add product</a>
  <div>
    @foreach ($viewData["products"] as $product)
    <div class="col-md-4 col-lg-3 mb-2">
      <div class="card">
        <img src="https://laravel.com/img/logotype.min.svg" class="card-img-top img-card">
        <div class="card-body text-center">
          <a 
            href="{{ route('product.show', ['id'=> $product["id"]]) }}" 
            class="btn bg-primary text-white"
          >
            {{ $product["name"] }}
          </a>
          <p>{{ $product["description"] }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@stop