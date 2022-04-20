<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chicken extends Model
{
    protected $table = 'chickens';

    public $primaryKey ='id';

    public $timestamps = true;
}
