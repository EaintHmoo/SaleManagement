@extends('master.layouts');
@section('content')
<section>
    <div class="container">
        <div>
        <a href="{{route('products.index')}}" class="btn btn-success float-end my-3">Back</a>
        </div>
        <div class="my-3">
            <h1>Product Detail</h1>
        </div>
        <form>
        <div class="mb-3">
        <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$product->name}}" disabled>
        </div>
        
        </form>
    </div>
</section>
@endsection
