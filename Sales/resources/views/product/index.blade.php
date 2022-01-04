@extends('master.layouts')
@section('content')
<section>
    <div class="container">
        <div>
        <a href="{{route('products.create')}}" class="btn btn-info float-end my-3">Add New product</a>
        </div>
        <table class="table table-striped">
                        
            <thead class="bg-dark text-white">
                <tr>
                    <td>No</td>
                    <td>Product Name</td>
                    <td>Actions</td>
                </tr>
            </thead> 
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$product['name']}}</td>
                    <td>
                        <form action="{{route('products.destroy',$product->id)}}" method="post">
                        <a href="{{route('products.show',$product->id)}}" class="btn btn-primary">View</a>
                        <a href="{{route('products.edit',$product->id)}}" class="btn btn-success">Edit</a>
                        @csrf
                        @method('delete')
                        <button name="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>                 
        </table>
    </div>
</section>
@endsection