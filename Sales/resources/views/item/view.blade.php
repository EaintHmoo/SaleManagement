@extends('master.layouts');
@section('content')
<section>
    <div class="container">
        <div>
        <a href="{{route('items.index')}}" class="btn btn-success float-end my-3">Back</a>
        </div>
        <div class="my-3">
            <h1>Item Detail</h1>
        </div>
        <form>
        <div class="mb-3">
        <div class="mb-3">
        <label for="code" class="form-label">Code</label>
        <input type="text" class="form-control" id="code" name="code" placeholder="000" value="{{$item->code}}" disabled>
        </div>
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$item->name}}" disabled>
        </div>
        <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" id="type" name="type" placeholder="type" value="{{$item->type}}" disabled>
        </div>
        </form>
    </div>
</section>
@endsection
