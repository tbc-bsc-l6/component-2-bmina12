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
  <h1 style="text-align: center;">Latest Products</h1>
  <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          @foreach ($product as $products)
          <div class="col-md-4 mb-4">
              <div class="card h-100">
                  <!-- Product image-->
                  <img class="card-img-top" src="images/{{ $products->picture }}" alt="..." />
                  <!-- Product details-->
                  <div class="card-body p-4">
                      <div class="text-center">
                          <!-- Product name-->
                          <h5 class="fw-bolder">{{ $products->title }}</h5>
                          <!-- Product price-->
                          Price: ${{ $products->price }}
                      </div>
                  </div>
                  <!-- Product actions-->
                  <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                      <div class="text-center"><a href="{{ route('product.show', $products->id) }}" class="btn btn-outline-dark mt-auto" href="#">View Detail</a></div>
                  </div>
              </div>
          </div>
          @endforeach
      </div>
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
