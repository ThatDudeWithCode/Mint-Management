<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use RealRashid\SweetAlert\Facades\Alert;

class Clients extends Model
{
    use Notifiable;


    protected $fillable = [
        'client_name',
        'company_name',
        'client_number',
        'client_number_office',
        'client_email',
        'client_address',
        'client_address_2',
        'client_city',
        'client_provence',
        'client_zip',
        'client_country',
    ];
}
