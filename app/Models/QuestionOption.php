<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    protected $primaryKey = 'option_id';

    public $timestamps = false;

    protected $fillable = [
        'question_id',
        'option_text',
        'option_value',
        'display_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Relationships
    public function surveyQuestion()
    {
        return $this->belongsTo(SurveyQuestion::class, 'question_id', 'question_id');
    }
}
