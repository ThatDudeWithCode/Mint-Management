@extends('layouts.admin')

@section('content')

    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <span class="float-left">
                <h1 class="main-heading mb-0"><i class="fa fa-users mr-1"></i>{{ __('All Clients') }}</h1>
            </span>
            <span class="float-right">
                <a href="{{ url('clients/create') }}" class="btn btn-colorfull">Add Client</a>
            </span>
        </div>
    </div>

    @if($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            <strong class="p-0 m-0">{{$message}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(count($clients) > 0)
    <div class="card mt-4 shadow-sm">
        <div class="card-body">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Phone Number ( Cell )</th>
                    <th scope="col">Phone Number ( Office )</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $row)
                    <tr>
                        <th scope="row">{{$row['id']}}</th>
                        <td>{{$row['client_name']}}</td>
                        <td>{{$row['company_name']}}</td>
                        <td>{{$row['client_number']}}</td>
                        <td>{{$row['client_number_office']}}</td>
                        <td><a href="mailto:{{$row['client_email']}}">{{$row['client_email']}}</a></td>
                        <td>
                            <a href="{{action('ClientsController@edit', $row['id'])}}" class="btn btn-edit"><i class="fa fa-pencil mr-1"></i>Edit</a>
                            <a href="{{action('ClientsController@show', $row['id'])}}" class="btn btn-show"><i class="fa fa-eye mr-1"></i>View</a>
                            <form action="{{action('ClientsController@destroy', $row['id'])}}" method="post" class="delete_form">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-delete"><i class="fa fa-trash mr-1"></i>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @else
        <div class="card mt-4 shadow-sm">
            <div class="card-body">
                <p class="m-0 p-0">There are currently no clients</p>
            </div>
        </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.delete_form').on('submit', function () {
                if(confirm("Are you sure you want to delete this client?"))
                {
                    return true;
                } else {
                    return false;
                }
            });
        });
    </script>
@endsection
