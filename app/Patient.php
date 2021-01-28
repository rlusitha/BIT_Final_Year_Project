<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;

class Patient extends Model
{
    use SoftDeletes, Searchable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name', 'address_no', 'street_name', 'city', 'district', 'date_of_birth' , 'age', 'gender', 'active', 'nic', 'email', 'mobile_no'
    ];

    /**
     * Get the token that owns the patient.
     */
    public function token()
    {
        return $this->belongsTo('App\Token');
    }
}
