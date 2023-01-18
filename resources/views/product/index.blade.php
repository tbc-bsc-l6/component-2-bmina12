@extends('layouts.app')
@section('content')

<h1 class="text-center mt-2">All Products</h1>
<hr>
<br>


<div class="container">
  <form action="">
    <div class="form-group">
      <input type="search" label="Search" name="search" id="" class="form-control" placeholder="Search by Title">
    </div>
    <br>
    <button class="btn btn-primary">Search</button>
  </form>
  <br>
    <div class="row">
        <div class="col-md-6" style="display:flex">
            @foreach ($product as $products)
            <div class="card m-2 p-2" style="width: 18rem;">
                <img src="{{asset('images/'. $products->picture)}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $products->title }}</h5>
                  <h5 class="card-title">Price: ${{ $products->price }}</h5>
                  <hr>
                  <p class="card-text">{{ $products->description}} </p>
                  <a href="{{ route('product.show', $products->id) }}" class="btn btn-primary">View Detail</a>
                </div>
              </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
