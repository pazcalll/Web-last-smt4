@extends('template/maintemplate')
@section('content')
<div class="col-md-12">
    <h1 style="text-align: center; margin-bottom:30px;">Subject List</h1>
</div>
<div class="row mr-2 ml-2">

    <!-- Earnings (Monthly) Card Example -->
    <a href="{{ URL('admin/lists/subjects/1') }}" class="col-xl-3 col-md-6 mb-4 border-0">
    <div class="card border-left-primary shadow h-100 py-2 border-top-0 border-right-0 border-bottom-0"  style="background: #414141">
        <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"></div>
            <div class="h5 mb-0 font-weight-bold" style="color: white; opacity:60%">Mathematics</div>
            </div>
            <div class="col-auto">
            <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
            </div>
        </div>
        </div>
    </div>
    </a>

    <!-- Earnings (Monthly) Card Example -->
    <a href="{{ URL('admin/lists/subjects/2') }}" class="col-xl-3 col-md-6 mb-4 border-0">
    <div class="card border-left-success shadow h-100 py-2 border-top-0 border-right-0 border-bottom-0"  style="background: #414141">
        <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1"></div>
            <div class="h5 mb-0 font-weight-bold" style="color: white; opacity:60%">Bahasa Indonesia</div>
            </div>
            <div class="col-auto">
            <!-- <i class="fas fa-dollar-sign fa-2x text-gray-300"></i> -->
            </div>
        </div>
        </div>
    </div>
    </a>

    <!-- Earnings (Monthly) Card Example -->
    <a href="{{ URL('admin/lists/subjects/3') }}" class="border-0 col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2 border-top-0 border-right-0 border-bottom-0"  style="background: #414141">
        <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"></div>
            <div class="row no-gutters align-items-center">
                <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold" style="color: white; opacity:60%">English</div>
                </div>
                <div class="col">
                <!-- <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div> -->
                </div>
            </div>
            </div>
            <div class="col-auto">
            <!-- <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> -->
            </div>
        </div>
        </div>
    </div>
    </a>

    <!-- Pending Requests Card Example -->
    <a href="{{ URL('admin/lists/subjects/4') }}" class="border-0 col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow border-top-0 border-right-0 border-bottom-0 h-100 py-2" style="background: #414141">
        <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"></div>
            <div class="h5 mb-0 font-weight-bold" style="color: white; opacity:60%">Natural Science</div>
            </div>
            <div class="col-auto">
            <!-- <i class="fas fa-comments fa-2x text-gray-300"></i> -->
            </div>
        </div>
        </div>
    </div>
    </a>

    <!-- Pending Requests Card Example -->
    <a href="{{ URL('admin/lists/subjects/5') }}" class="border-0 col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2 border-top-0 border-right-0 border-bottom-0"  style="background: #414141">
        <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"></div>
            <div style="color: white; opacity:60%" class="h5 mb-0 font-weight-bold">Social Science</div>
            </div>
            <div class="col-auto">
            <!-- <i class="fas fa-comments fa-2x text-gray-300"></i> -->
            </div>
        </div>
        </div>
    </div>
    </a>

</div>

@endsection