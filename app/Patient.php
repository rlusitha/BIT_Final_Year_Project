<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address_no', 'street_name', 'city', 'district', 'date_of_birth' ,'gender', 'nic', 'email', 'mobile_no'
    ];
}
