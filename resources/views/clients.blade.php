@extends('welcome')

@section('content')

         <h2 class="display-4 display-end">
            <div>
                Clients
            </div>
            <div>
                <a href="{{route('add-client')}}" class="btn btn-primary btn-lg">Add New Client </a>
            </div>
        
        </h2>


    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clients as $key=>$each)
            <tr @if($key%2 ==0) class="tr_client" @else class="tr_client2" @endif>
                <td >{{$key+1}}</th>
                <td>{{$each->first_name}} {{$each->last_name}}</td>
                <td>{{$each->phone}}</td>
                <td>{{$each->description}}</td>
                 <td>{{$each->description}}</td>
                <td>
                    <a href="{{route('edit-client',['id' => $each->id])}}" class="btn btn-primary btn-lg @if($key%2 ==0) btn-primary2 @endif">Edit</a>
                    <a href="{{route('edit-client',['id' => $each->id])}}" class="btn btn-primary btn-lg @if($key%2 ==0) btn-primary2 @endif">Delete</a>
                </td>
            </tr>
        @endforeach
        
        </tbody>
    </table>




    @endsection