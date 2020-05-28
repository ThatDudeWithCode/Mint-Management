@extends('layouts.admin')

@section('content')

    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <span class="float-left">
                <h1 class="main-heading mb-0"><i class="fa fa-users mr-1"></i>{{ __('Add Client') }}</h1>
            </span>
            <span class="float-right">
                <a href="{{ url('clients') }}" class="btn btn-colorfull">Back</a>
            </span>
        </div>
    </div>

    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <form action="{{ route('clients.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="client_name">Name</label>
                            <input type="text" name="client_name" id="client_name" class="form-control rounded-0" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="company_name" id="company_name" class="form-control rounded-0" placeholder="Company Name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="client_number">Phone Number ( Cell )</label>
                            <input type="text" name="client_number" id="client_number" class="form-control rounded-0" placeholder="Phone Number ( Cell )">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="client_number_office">Phone Number ( Office )</label>
                            <input type="text" name="client_number_office" id="client_number_office" class="form-control rounded-0" placeholder="Phone Number ( Office )">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="client_email">Email Address</label>
                            <input type="email" name="client_email" id="client_email" class="form-control rounded-0" placeholder="Email Address">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="client_address">Street Address</label>
                            <input type="text" name="client_address" id="client_address" class="form-control rounded-0" placeholder="Street Address">
                        </div>
                        <div class="form-group">
                            <label for="client_address_2">Street Address 2</label>
                            <input type="text" name="client_address_2" id="client_address_2" class="form-control rounded-0" placeholder="Street Address 2">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="client_city">City</label>
                            <input type="text" name="client_city" id="client_city" class="form-control rounded-0" placeholder="City">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="client_provence">Provence</label>
                            <input type="text" name="client_provence" id="client_provence" class="form-control rounded-0" placeholder="Provence">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="client_zip">Postal Zip</label>
                            <input type="text" name="client_zip" id="client_zip" class="form-control rounded-0" placeholder="Postal Zip">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="client_country">Country</label>
                            <input type="text" name="client_country" id="client_country" class="form-control rounded-0" placeholder="Country">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-colorfull">Add Client</button>
                </div>
            </form>
        </div>
    </div>

@endsection
