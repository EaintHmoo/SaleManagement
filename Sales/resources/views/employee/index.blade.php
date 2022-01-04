@extends('master.layouts')
@section('content')
<section>
    <div class="container">
        <div>
        <a href="{{route('employees.create')}}" class="btn btn-info float-end my-3">Add New Employee</a>
        </div>
        <table class="table table-striped">
                        
            <thead class="bg-dark text-white">
                <tr>
                    <td>No</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Date of Birth</td>
                    <td>Actions</td>
                </tr>
            </thead> 
            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$employee['name']}}</td>
                    <td>{{$employee['email']}}</td>
                    <td>{{$employee['address']}}</td>
                    <td>{{$employee['dob']}}</td>
                    <td>
                        <a href="{{route('employees.show',$employee->id)}}" class="btn btn-primary">View</a>
                        <a href="" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>                 
        </table>
    </div>
</section>
@endsection