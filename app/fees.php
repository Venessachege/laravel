<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fees extends Model
{
    protected $table ="fees";
    protected $primarykey="id";
    public function installments()
    {
        return $this->belongsTo('App\student');
    }
}
