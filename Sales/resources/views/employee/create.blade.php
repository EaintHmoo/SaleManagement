@extends('master.layouts');
@section('content')
<section>
    <div class="container">
        <div>
        <a href="{{route('employees.index')}}" class="btn btn-success float-end my-3">Back</a>
        </div>
        <div class="my-3">
            <h1>Create New Employee</h1>
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
        <form method="post" action="{{route('employees.store')}}">
            @csrf
        <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="name">
        </div>
        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="name">
        </div>
        <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea type="text" class="form-control" id="address" name="address" placeholder="name"></textarea>
        </div>
        <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob" placeholder="name">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>
</section>
@endsection
