@extends('template/maintemplate')
@section('content')
<form action="{{url('admin/importpage/import')}}" method="POST" enctype="multipart/form-data">
    <!-- @csrf -->
    {{ csrf_field() }}
    <div class="container" style="max-width: 540px;">
        <div style="background-color: #525252;" class="rounded">
            <div style="padding: 35px; padding-bottom: 20px;">
                <div class="bg-darken-4">
                    <h1 style="text-align: center; margin-bottom:30px;">Import Score Form</h1>
                </div>
                <a href="{{url('admin')}}" class="btn btn-danger mb-3 btn-icon-split border-0">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Bring Me Back!</span>
                </a>
                <div class="form-group">
                    <label for="file">File</label>
                    <input type="file" name="file" id="file" placeholder="No files" class="form-control border-0" required="required" accept=".csv" style="background-color: #5c5c5c; color: #a3a3a3">
                </div>
                <div class="form-group d-flex justify-content-center">
                    <button name="submit" type="submit" class="btn btn-success mb-3 border-0" style="padding-left: 30px; padding-right: 30px; margin-top: 20px;">Import</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection