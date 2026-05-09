<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $primaryKey = 'experience_id';

    public $timestamps = false;

    protected $fillable = [
        'session_id',
        'company_name',
        'company_address',
        'company_type',
        'position',
        'job_description',
        'employment_type',
        'is_current_job',
        'date_started',
        'date_ended',
    ];

    protected $casts = [
        'is_current_job' => 'boolean',
        'date_started'   => 'date',
        'date_ended'     => 'date',
    ];

    // Relationships
    public function surveySession()
    {
        return $this->belongsTo(SurveySession::class, 'session_id', 'session_id');
    }
}
