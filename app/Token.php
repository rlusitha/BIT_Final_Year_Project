<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    /**
     * Get the patient record associated with the token.
     */
    public function patient()
    {
        return $this->hasOne('App\Patient');
    }
}
