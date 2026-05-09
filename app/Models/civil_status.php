<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class civil_status extends Model
{
    protected $table = 'civil_status';
    public $timestamps = false;
    public $incrementing = true;
    protected $primaryKey = 'civil_status_id';
    protected $fillable = [
        'status_name',

    ];
}
