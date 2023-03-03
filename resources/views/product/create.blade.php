@extends('product.layout')
@section('content')


</div>
<div class="container">
    <form action="{{ route('product.store')}}" method="POST">@csrf
 <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">name</label>
    <div class="col-sm-10">
      <input type="text" name="name"  class="form-control" id="staticEmail" >
    </div>
  </div>


  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">price</label>
    <div class="col-sm-10">
      <input type="text"  name="price"  class="form-control" id="staticEmail" >
    </div>
  </div>


  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">detial</label>
    <div class="col-sm-10">
      <input type="text" name="detail"   class="form-control" id="staticEmail" >
    </div>
  </div>
</div>
<button type="submit">Create </button>
</form>
@endsection