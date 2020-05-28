@extends('template/maintemplate')
@section('content')
<form action="{{url('admin/savescore')}}" method="post">
    {{ csrf_field() }}
    <div class="container" style="max-width: 540px; margin-top: 50px;">
        <div style="background-color: #525252;" class="rounded">
            <div style="padding: 35px; padding-bottom: 20px;">
                <div class="bg-darken-4">
                    <h1 style="text-align: center; margin-bottom:30px;">Add Score Form</h1>
                </div>
                <a href="{{url('admin')}}" class="btn btn-danger mb-3 btn-icon-split border-0">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Bring Me Back!</span>
                </a>
                <div class="form-group">
                    <label for="id">ID</label>
                    <!-- <input type="number" name="id" id="id" class="form-control border-0" required="required" style="background-color: #5c5c5c; color: #a3a3a3"> -->
                    <select name="id" id="id" class="form-control border-0" required="required" style="background-color: #5c5c5c; color: #a3a3a3">
                    @foreach($data as $row)
                        <option value="{{$row->ID}}">{{$row->ID}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="clasid">Class ID</label>
                    <input type="text" name="classid" id="classid" class="disabled form-control border-0" style="background-color: #5c5c5c; color: #a3a3a3; pointer-events: none;" value="{{$classid}}">

                </div>
                <div class="form-group">
                    <label for="username">User Name</label>
                    <!-- <input type="text" name="username" id="username" class="form-control border-0" required="required" style="background-color: #5c5c5c; color: #a3a3a3"> -->
                    <select name="username" id="username" class="form-control border-0" required="required" style="background-color: #5c5c5c; color: #a3a3a3">
                    @foreach($data as $row)
                        <option value="{{$row->USERNAME}}">{{$row->USERNAME}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="sub_id">Subject ID</label>
                    <input type="text" name="sub_id" id="sub_id" class="disabled form-control border-0" style="background-color: #5c5c5c; color: #a3a3a3; pointer-events: none;" value="{{$subjectid}}">
                </div>
                <div class="form-group">
                    <label for="quiz1">Quiz 1</label>
                    <input type="number" name="quiz1" id="quiz1" class="form-control border-0" required="required" style="background-color: #5c5c5c; color: #a3a3a3">
                </div>
                <div class="form-group">
                    <label for="quiz2">Quiz 2</label>
                    <input type="number" name="quiz2" id="quiz2" class="form-control border-0" style="background-color: #5c5c5c; color: #a3a3a3">
                </div>
                <div class="form-group">
                    <label for="midterm">Midterm</label>
                    <input type="number" name="midterm" id="midterm" class="form-control border-0" style="background-color: #5c5c5c; color: #a3a3a3">
                </div>
                <div class="form-group">
                    <label for="quiz3">Quiz 3</label>
                    <input type="number" name="quiz3" id="quiz3" class="form-control border-0" style="background-color: #5c5c5c; color: #a3a3a3">
                </div>
                <div class="form-group">
                    <label for="lastexam">Last Exam</label>
                    <input type="number" name="lastexam" id="lastexam" class="form-control border-0" style="background-color: #5c5c5c; color: #a3a3a3">
                </div>
                <div class="form-group">
                    <label for="average">Average</label>
                    <input type="number" name="average" id="average" class="form-control border-0" style="background-color: #5c5c5c; color: #a3a3a3">
                </div>
                <div class="form-group d-flex justify-content-center">
                    <button class="btn btn-success mb-3 border-0" style="padding-left: 30px; padding-right: 30px; margin-top: 20px;" type="submit">Add</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection