@extends('layouts.admin')

@section('content')

    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <h1 class="main-heading mb-0"><i class="fa fa-users mr-1"></i>{{ __('Edit Client') }}</h1>
        </div>
    </div>
@if(count($errors) > 0)
    <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <form method="post" action="{{action('ClientsController@update', $id)}}">
                @csrf
                <input type="hidden" name="_method" value="PATCH" />
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="client_name">Name</label>
                            <input type="text" name="client_name" id="client_name" class="form-control rounded-0" placeholder="Name" value="{{$client->client_name}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" name="company_name" id="company_name" class="form-control rounded-0" placeholder="Company Name" value="{{$client->company_name}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="client_number">Phone Number ( Cell )</label>
                            <input type="text" name="client_number" id="client_number" class="form-control rounded-0" placeholder="Phone Number ( Cell )" value="{{$client->client_number}}">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="client_number_office">Phone Number ( Office )</label>
                            <input type="text" name="client_number_office" id="client_number_office" class="form-control rounded-0" placeholder="Phone Number ( Office )" value="{{$client->client_number_office}}">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="client_email">Email Address</label>
                            <input type="email" name="client_email" id="client_email" class="form-control rounded-0" placeholder="Email Address" value="{{$client->client_email}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="client_address">Street Address</label>
                            <input type="text" name="client_address" id="client_address" class="form-control rounded-0" placeholder="Street Address" value="{{$client->client_address}}">
                        </div>
                        <div class="form-group">
                            <label for="client_address_2">Street Address 2</label>
                            <input type="text" name="client_address_2" id="client_address_2" class="form-control rounded-0" placeholder="Street Address 2" value="{{$client->client_address_2}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="client_city">City</label>
                            <input type="text" name="client_city" id="client_city" class="form-control rounded-0" placeholder="City" value="{{$client->client_city}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="client_provence">Provence</label>
                            <input type="text" name="client_provence" id="client_provence" class="form-control rounded-0" placeholder="Provence" value="{{$client->client_provence}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="client_zip">Postal Zip</label>
                            <input type="text" name="client_zip" id="client_zip" class="form-control rounded-0" placeholder="Postal Zip" value="{{$client->client_zip}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="client_country">Country</label>
                            <input type="text" name="client_country" id="client_country" class="form-control rounded-0" placeholder="Country" value="{{$client->client_country}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-colorfull" value="edit">Update Client</button>
                </div>
            </form>
        </div>
    </div>
@endsection
