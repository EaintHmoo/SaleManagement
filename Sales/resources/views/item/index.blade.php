@extends('master.layouts')
@section('content')
<section>
    <div class="container">
        <div>
        <a href="{{route('items.create')}}" class="btn btn-info float-end my-3">Add New Item</a>
        </div>
        <table class="table table-striped">
                        
            <thead class="bg-dark text-white">
                <tr>
                    <td>No</td>
                    <td>Item Code</td>
                    <td>Item Name</td>
                    <td>Item Type</td>
                    <td>Actions</td>
                </tr>
            </thead> 
            <tbody>
                @foreach($items as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item['code']}}</td>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['type']}}</td>
                    <td>
                        <form action="{{route('items.destroy',$item->id)}}" method="post">
                        <a href="{{route('items.show',$item->id)}}" class="btn btn-primary">View</a>
                        <a href="{{route('items.edit',$item->id)}}" class="btn btn-success">Edit</a>
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" name="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>                 
        </table>
    </div>
</section>
@endsection