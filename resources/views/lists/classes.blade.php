@extends('template/maintemplate')
@section('content')
<div class="container bg-white" style="color: black; margin-top:20px">
    <div class="col-md-12">
        <h1 style="text-align: center; margin-bottom:30px;">Class {{$classid}} Students</h1>
    </div>
    <table class="table table-striped table-bordered rounded" style="color: #000000;" id="list_smt">
        <thead>
            <tr>
                <th>No.</th>
                <th>Student Name</th>
                <th>Status</th>
                <th>Address</th>
                <th>ID</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>Birthdate</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$row->USERNAME}}</td>
                <td>{{$row->STATUS}}</td>
                <td>{{$row->ADDRESS}}</td>
                <td>{{$row->ID}}</td>
                <td>{{$row->FATHERNAME}}</td>
                <td>{{$row->MOTHERNAME}}</td>
                <td>{{$row->BIRTHDATE}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection