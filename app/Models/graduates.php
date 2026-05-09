<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class graduates extends Model
{
    protected $table = 'graduates';

    public $incrementing = true;
    public $timestamps = false;
    protected $primaryKey = 'graduate_id';
    protected $fillable = [
        'student_id',
        'first_name',
        'middle_name',
        'last_name',
        'sex',
        'date_of_birth',
        'email',
        'contact_number',
        'graduation_year',
        'program_id',
        'civil_status_id',
        'created_at',
        'updated_at',
        'guid'
    ];

}
