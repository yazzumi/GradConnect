<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveySession extends Model
{
    protected $primaryKey = 'session_id';

    public $timestamps = false;

    protected $fillable = [
        'graduate_id',
        'survey_year',
        'submission_type',
        'based_on_session_id',
        'employment_status_id',
        'is_verified',
        'verification_method',
        'verified_at',
        'started_at',
        'completed_at',
        'is_completed',
        'is_current',
    ];

    protected $casts = [
        'is_verified'  => 'boolean',
        'is_completed' => 'boolean',
        'is_current'   => 'boolean',
        'verified_at'  => 'datetime',
        'started_at'   => 'datetime',
        'completed_at' => 'datetime',
    ];

    // Relationships
    public function graduate()
    {
        return $this->belongsTo(Graduate::class, 'graduate_id', 'graduate_id');
    }

    public function employmentStatus()
    {
        return $this->belongsTo(EmploymentStatus::class, 'employment_status_id', 'employment_status_id');
    }

    public function basedOnSession()
    {
        return $this->belongsTo(SurveySession::class, 'based_on_session_id', 'session_id');
    }

    public function derivedSessions()
    {
        return $this->hasMany(SurveySession::class, 'based_on_session_id', 'session_id');
    }

    public function profileUpdate()
    {
        return $this->hasOne(SessionProfileUpdate::class, 'session_id', 'session_id');
    }

    public function answers()
    {
        return $this->hasMany(SurveyAnswer::class, 'session_id', 'session_id');
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class, 'session_id', 'session_id');
    }

    public function employmentProofs()
    {
        return $this->hasMany(EmploymentProof::class, 'session_id', 'session_id');
    }

    public function updateRequestAsOld()
    {
        return $this->hasOne(UpdateRequest::class, 'old_session_id', 'session_id');
    }

    public function updateRequestAsNew()
    {
        return $this->hasOne(UpdateRequest::class, 'new_session_id', 'session_id');
    }
}
