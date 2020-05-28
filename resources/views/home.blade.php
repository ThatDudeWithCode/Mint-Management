@extends('layouts.admin')

@section('content')

    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <h1 class="main-heading mb-0"><i class="fa fa-tachometer mr-1"></i>{{ __('Dashboard') }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3">
            <div class="card mt-4 shadow-sm card-border-left-primary">
                <div class="card-body">
                    <h3 class="main-heading">Users</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card mt-4 shadow-sm card-border-left-secondary">
                <div class="card-body">
                    <h3 class="main-heading">Clients</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card mt-4 shadow-sm card-border-left-warning">
                <div class="card-body">
                    <h3 class="main-heading">Tasks</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card mt-4 shadow-sm card-border-left-danger">
                <div class="card-body">
                    <h3 class="main-heading">Projects</h3>
                </div>
            </div>
        </div>
    </div>


@endsection
