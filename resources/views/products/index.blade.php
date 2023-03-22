@extends('layouts.app')
<!-- use layouts ap
p.blade.php -->

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <a class = "mb-3 btn btn-primary"href="{{ route ('products.create')}}">Create Product</a>
                <div class="row">
                    @foreach ($productsView as $item)
                    <div class="col-4">
                        <a href="">
                        <div class="card p-3 mt-5">
                        <h4>Product Name : {{$item -> name}}</h4>
                        <p>Price : {{$item -> price}}</p>
                        </div>

                        </a>
                        <a href="{{route('products.edit',$item->id)}}" class="btn btn-warning mt-2">edit</a>
                        <form action="{{route('products.destroy' , $item->id)}}" method = "post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger mt-3">Delete Product</button>
                    </form>
                    </div>




                    @endforeach


                </div>

            </div>
        </div>
    </div>
@endsection
