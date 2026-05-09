<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SessionProfileUpdate extends Model
{
    protected $primaryKey = 'profile_update_id';

    public $timestamps = false;

    protected $fillable = [
        'session_id',
        'email',
        'contact_number',
        'civil_status_id',
        'street_address',
        'barangay',
        'city_municipality',
        'province',
    ];

    // Relationships
    public function surveySession()
    {
        return $this->belongsTo(SurveySession::class, 'session_id', 'session_id');
    }

    public function civilStatus()
    {
        return $this->belongsTo(CivilStatus::class, 'civil_status_id', 'civil_status_id');
    }
}
