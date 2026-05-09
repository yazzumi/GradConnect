<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyQuestion extends Model
{
    protected $primaryKey = 'question_id';

    public $timestamps = false;

    protected $fillable = [
        'question_text',
        'field_key',
        'question_type',
        'employment_status_id',
        'is_required',
        'display_order',
        'is_active',
    ];

    protected $casts = [
        'is_required' => 'boolean',
        'is_active'   => 'boolean',
    ];

    // Relationships
    public function employmentStatus()
    {
        return $this->belongsTo(EmploymentStatus::class, 'employment_status_id', 'employment_status_id');
    }

    public function options()
    {
        return $this->hasMany(QuestionOption::class, 'question_id', 'question_id')
                    ->orderBy('display_order');
    }

    public function answers()
    {
        return $this->hasMany(SurveyAnswer::class, 'question_id', 'question_id');
    }
}
