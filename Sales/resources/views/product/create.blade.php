@extends('master.layouts');
@section('content')
<section>
    <div class="container">
        <div>
        <a href="{{route('products.index')}}" class="btn btn-success float-end my-3">Back</a>
        </div>
        <div class="my-3">
            <h1>Create New Product</h1>
        </div>
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li class="text-danger">{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <form method="post" action="{{route('products.store')}}">
            @csrf
        <div class="mb-3">
        <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="name">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</section>
@endsection
