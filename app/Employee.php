<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'title', 'first_name', 'middle_name', 'last_name', 'address', 'district' ,'contact_number', 'email', 'date_of_birth', 'age', 'gender', 'nic', 'designation'
    ];
}
