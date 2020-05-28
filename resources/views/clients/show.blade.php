@extends('layouts.admin')

@section('content')

    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <span class="float-left">
                <h1 class="main-heading mb-0"><i class="fa fa-users mr-1"></i>{{ __('View Client') }}</h1>
            </span>
            <span class="float-right">
                <a href="{{ url('clients') }}" class="btn btn-colorfull">Back</a>
            </span>

        </div>
    </div>

    <div class="row">
        <div class="col-lg-5">
            <div class="card mt-4 shadow-sm">
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Name: <span class="float-right">{{$client['client_name']}}</span></li>
                        <li class="list-group-item">Company Name: <span class="float-right">{{$client['company_name']}}</span></li>
                        <li class="list-group-item">Phone Number ( Cell ): <span class="float-right">{{$client['client_number']}}</span></li>
                        <li class="list-group-item">Phone Number ( Office ): <span class="float-right">{{$client['client_number_office']}}</span></li>
                        <li class="list-group-item">Email Address: <span class="float-right">{{$client['client_email']}}</span></li>
                        <li class="list-group-item">
                            Street Address: <span class="float-right">{{$client['client_address']}}</span><br>
                            Street Address 2: <span class="float-right">{{$client['client_address_2']}}</span><br>
                            City: <span class="float-right">{{$client['client_city']}}</span><br>
                            Provence: <span class="float-right">{{$client['client_provence']}}</span><br>
                            Postal Zip: <span class="float-right">{{$client['client_zip']}}</span><br>
                            Country: <span class="float-right">{{$client['client_country']}}</span><br>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card mt-4 shadow-sm">
                <div class="card-body">
                    <h2 class="main-heading">Projects</h2>
                    Project
                </div>
            </div>
        </div>
    </div>







@endsection
