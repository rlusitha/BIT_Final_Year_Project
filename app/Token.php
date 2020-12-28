<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    public $fillable = [
        'patient_id', 'patient_name', 'token_number', 'token_date',
    ];

    /**
     * Get the patient record associated with the token.
     */
    public function patient()
    {
        return $this->hasOne('App\Patient');
    }
}
