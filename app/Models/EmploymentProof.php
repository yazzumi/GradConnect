<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmploymentProof extends Model
{
    protected $primaryKey = 'proof_id';

    const CREATED_AT = 'uploaded_at';
    const UPDATED_AT = null;

    protected $fillable = [
        'session_id',
        'file_path',
        'file_type',
    ];

    // Relationships
    public function surveySession()
    {
        return $this->belongsTo(SurveySession::class, 'session_id', 'session_id');
    }
}
