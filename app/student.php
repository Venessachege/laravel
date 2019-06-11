<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table ="students";
    protected $primarykey="id";

    public function installments()
    {
        return $this->hasMany('App\fees');
    }
}
