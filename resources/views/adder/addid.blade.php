@extends('template/maintemplate')
@section('content')
<div class="col-md-12">
    <!-- <h1 style="text-align: center; margin-bottom:30px;">Add ID Form</h1> -->
</div>
<form action="{{url('admin/saving')}}" method="post">
    {{ csrf_field() }}
    <div class="container" style="max-width: 540px;">
        <div style="background-color: #525252;" class="rounded">
            <div style="padding: 35px; padding-bottom: 20px;">
                <div class="bg-darken-4">
                    <h1 style="text-align: center; margin-bottom:30px;">Add ID Form</h1>
                </div>
                <a href="{{url('admin')}}" class="btn btn-danger mb-3 btn-icon-split border-0">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Bring Me Back!</span>
                </a>
                <div class="form-group">
                    <label for="ID">ID</label>
                    <input type="number" name="id" id="id" class="form-control border-0" required="required" style="background-color: #5c5c5c; color: #a3a3a3">
                </div>
                <div class="form-group">
                    <label for="clasid">Class ID</label>
                    <select name="classid" id="classid" class="form-control border-0" required="required" style="background-color: #5c5c5c; color: #a3a3a3">
                    @foreach($data as $row)
                        <option value="{{$row->CLASS_ID}}">{{$row->CLASS_ID}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" name="username" id="username" class="form-control border-0" required="required" style="background-color: #5c5c5c; color: #a3a3a3">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" required="required" class="form-control border-0" id="status" style="background-color: #5c5c5c; color: #a3a3a3">
                        <option value="student">Student</option>
                        <option value="Teacher">Teacher</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <div class="form-group d-flex justify-content-center">
                    <button class="btn btn-success mb-3 border-0" style="padding-left: 30px; padding-right: 30px; margin-top: 20px;" type="submit">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection