@extends('master.layouts');
@section('content')
<section>
    <div class="container">
        <div>
        <a href="{{route('employees.index')}}" class="btn btn-success float-end my-3">Back</a>
        </div>
        <div class="my-3">
            <h1>Employee Detail</h1>
        </div>
        <form>
        <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$employee->name}}" disabled>
        </div>
        <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="name" value="{{$employee->email}}" disabled>
        </div>
        <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea type="text" class="form-control" id="address" name="address" placeholder="name" disabled>{{$employee->address}}</textarea>
        </div>
        <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob" placeholder="name" value="{{$employee->dob}}" disabled>
        </div>
        </form>
    </div>
</section>
@endsection
