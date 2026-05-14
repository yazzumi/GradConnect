<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmploymentStatus extends Model
{
    protected $table = 'employment_status';
    protected $primaryKey = 'employment_status_id';

    public $timestamps = false;

    protected $fillable = [
        'status_name',
    ];

    // Relationships
    public function surveySessions()
    {
        return $this->hasMany(SurveySession::class, 'employment_status_id', 'employment_status_id');
    }

    public function surveyQuestions()
    {
        return $this->hasMany(SurveyQuestion::class, 'employment_status_id', 'employment_status_id');
    }
}
