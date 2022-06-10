@extends('dashboard.layouts.base')

@section('pageTitle')
Home Page
@endsection

@section('breadcrumb-links')
<li class="breadcrumb-item"><a href="#">خانه</a></li>
<li class="breadcrumb-item"><a href="#">مدیریت</a></li>
<li class="breadcrumb-item active">داشبرد</li>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-6 col-lg-3">
        <div class="card card-inverse card-primary">
            <div class="card-block p-b-0">
                <div class="btn-group pull-left">
                    <button type="button" class="btn btn-transparent active dropdown-toggle p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <h4 class="m-b-0">9.823</h4>
                <p>کاربر آنلاین</p>
            </div>
            <div class="chart-wrapper p-x-1" style="height:70px;">
                <canvas id="card-chart1" class="chart" height="70"></canvas>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card card-inverse card-info">
            <div class="card-block p-b-0">
                <button type="button" class="btn btn-transparent active p-a-0 pull-left">
                    <i class="icon-location-pin"></i>
                </button>
                <h4 class="m-b-0">9.823</h4>
                <p>کاربر آنلاین</p>
            </div>
            <div class="chart-wrapper p-x-1" style="height:70px;">
                <canvas id="card-chart2" class="chart" height="70"></canvas>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card card-inverse card-warning">
            <div class="card-block p-b-0">
                <div class="btn-group pull-left">
                    <button type="button" class="btn btn-transparent active dropdown-toggle p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <h4 class="m-b-0">9.823</h4>
                <p>کاربر آنلاین</p>
            </div>
            <div class="chart-wrapper" style="height:70px;">
                <canvas id="card-chart3" class="chart" height="70"></canvas>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
        <div class="card card-inverse card-danger">
            <div class="card-block p-b-0">
                <div class="btn-group pull-left">
                    <button type="button" class="btn btn-transparent active dropdown-toggle p-a-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="icon-settings"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
                <h4 class="m-b-0">9.823</h4>
                <p>کاربر آنلاین</p>
            </div>
            <div class="chart-wrapper p-x-1" style="height:70px;">
                <canvas id="card-chart4" class="chart" height="70"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
