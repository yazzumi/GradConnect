<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class programs extends Model
{
    protected $table = 'programs';
    public $timestamps = false;
    public $incrementing = true;
    protected $primaryKey = 'program_id';

    protected $fillable = [
        'program_id',
        'program_code',
        'program_name',

    ];
}
