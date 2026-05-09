<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SurveyAnswer extends Model
{
    protected $primaryKey = 'answer_id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = null;

    protected $fillable = [
        'session_id',
        'question_id',
        'answer_text',
    ];

    // Relationships
    public function surveySession()
    {
        return $this->belongsTo(SurveySession::class, 'session_id', 'session_id');
    }

    public function surveyQuestion()
    {
        return $this->belongsTo(SurveyQuestion::class, 'question_id', 'question_id');
    }
}
