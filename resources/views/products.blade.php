
{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="../../public/images/products/beans_vege.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-center">{{$product['name']}}</h5>
                          <p class="card-text text-center">${{$product['price']}}</p>
                          <p class="card-text text-center">{{$product->productCategory['category']}}</p>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html> --}}


@extends('frontEnd.layouts.layout')

@section('frontend_content')

<div class="card">
    {{-- <img class="card-img-bottom" src="C:\Users\sonal\laravelProjects\Veg4U\public\images\products\beans_vege.jpg" alt="Card image cap"> --}}
    <h1 class="text-center mt-5">Fresh Farm Products</h1>
  </div>
<!-- card section starts -->
<div class="container">
    <div class="row">

        @foreach ($products as $product)
        <div class="col-md-3 mt-3 mb-5">
            <div class="card" style="width: 18rem;">
                <div class="img-section">
                    <img class="card-img-top product-img" src="{{$product['image']}}" alt="Card image cap" style="height:250px;">
                    <div class="add-to-cart butn btn-cart"><a href=""><i class="fa-solid fa-cart-plus"></i></a></div>
                    <div class="wishlist butn btn-wishlist"><a href=""><i class="fa-solid fa-heart"></i></a></div>
                </div>
                <div class="card-body">
                  <h5 class="card-title text-center">{{$product['name']}}</h5>
                  <p class="card-text text-center price">${{$product['price']}}</p>
                  {{-- <p class="card-text text-center">{{$product->productCategory['category']}}</p> --}}

                </div>
            </div>
        </div>
        @endforeach
        
    </div>
</div>
<!-- card section ends -->
@endsection



      


