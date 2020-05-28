@extends('template/maintemplate')
@section('content')
<div class="container bg-white" style="color: black; margin-top:20px">
    <div class="col-md-12">
        @foreach($data as $row)
        <h1 style="text-align: center; margin-bottom:30px;">{{$row->SUB_NAME}} Scores</h1>
        @break
        @endforeach
    </div>
    <a href="{{ url('admin/lists/subjects/addscore')}}/{{$subjectid}}/{{$classid}}" class="btn btn-success mb-3 btn-icon-split border-0">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Add Record</span>
    </a>
    <table class="table table-striped table-bordered rounded" style="color: #000000;" id="list_smt">
        <thead>
            <tr>
                <th>No.</th>
                <th>Student Name</th>
                <th>ID</th>
                <th>Quiz 1</th>
                <th>Quiz 2</th>
                <th>Midterm</th>
                <th>Quiz 3</th>
                <th>Last Exam</th>
                <th>Average</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$row->USERNAME}}</td>
                <td>{{$row->ID}}</td>
                <td>{{$row->QUIZ1}}</td>
                <td>{{$row->QUIZ2}}</td>
                <td>{{$row->MID_EXAM}}</td>
                <td>{{$row->QUIZ3}}</td>
                <td>{{$row->LAST_EXAM}}</td>
                <td>{{$row->AVERAGE}}</td>
                <td>
                    <a href="{{url('admin/delete/score')}}/{{$row->SCOREID}}" class="btn btn-danger mb-3 btn-icon-split border-0">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Delete</span>
                    </a>
                    <a href="{{url('admin/edit/score')}}/{{$row->SCOREID}}/{{$classid}}" class="btn btn-warning mb-3 btn-icon-split border-0">
                        <span class="icon text-white-50">
                            <i class="fas fa-exclamation-triangle"></i>
                        </span>
                        <span class="text">Edit</span>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection