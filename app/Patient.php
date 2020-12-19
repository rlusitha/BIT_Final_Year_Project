<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address_no', 'street_name', 'city', 'district', 'date_of_birth' ,'gender', 'nic', 'email', 'mobile_no'
    ];
}
