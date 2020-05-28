@extends('template/maintemplate')
@section('content')
<div class="container bg-white" style="color: black;margin-top:20px">
    <div class="col-md-12">
        <h1 style="text-align: center; margin-bottom:30px;">Teacher List</h1>
    </div>
    <table class="table table-striped table-bordered rounded" style="color: #000000;" id="list_smt">
        <thead>
            <tr>
                <th>No.</th>
                <th>Teacher Name</th>
                <th>Address</th>
                <th>ID</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>Birthdate</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$row->USERNAME}}</td>
                <td>{{$row->ADDRESS}}</td>
                <td>{{$row->ID}}</td>
                <td>{{$row->FATHERNAME}}</td>
                <td>{{$row->MOTHERNAME}}</td>
                <td>{{$row->BIRTHDATE}}</td>
                <td>
                    <a href="{{url('admin/delete/user')}}/{{$row->ID}}" class="btn btn-danger mb-3 btn-icon-split border-0">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Delete</span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection