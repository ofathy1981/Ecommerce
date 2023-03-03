@extends('product.layout')

@section('content')
<div class="container">

  <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Custom jumbotron</h1>
      <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
      <button class="btn btn-primary btn-lg" type="button">Example button</button>
    </div>
  </div>
</div>

  <div class="container" style="margin-top: 50px">

    @if ($message =Session::get('success'))
    <div class="alert alert-primary" role="alert">{{ $message}}ds</div>
        
    @endif
  </div>

<div class="container">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">name</th>
        <th scope="col">price </th>
        <th scope="col">detail</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($product as $item)
        
  
      <tr>
       
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->detail}}</td>
        <td> <a href="{{  route('product.edit',$item->id)}}">edit</a> 
          <a href="{{  route('product.show',$item->id)}}">show</a>
          <a href="{{  route('product.unsoftdelete',$item->id)}}">undelete</a>
          <a href="{{  route('product.forcedel',$item->id)}}">forcedel</a>
          <form action="{{  route('product.destroy',$item->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit">Delete</button>
        </form></td>
      </tr>
        @endforeach
    </tbody>
  </table>
  {{ $product->links()  }}
</div>
</div>
@endsection