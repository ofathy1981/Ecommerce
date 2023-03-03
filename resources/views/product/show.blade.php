@extends('product.layout')
@section('content')


</div>
<div class="container">



 <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">name</label>
    <div class="col-sm-10">
      <div  name="name" >{{ $product->name}}</div>
    </div>
  </div>


  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">price</label>
    <div class="col-sm-10">
      <div type="text"  >{{ $product->price}}</div>
    </div>
  </div>


  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">detial</label>
    <div class="col-sm-10">
      <div >{{ $product->detail }}"  </div>
    </div>
  </div>
</div>


@endsection