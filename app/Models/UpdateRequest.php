<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UpdateRequest extends Model
{
    protected $primaryKey = 'update_request_id';

    const CREATED_AT = 'requested_at';
    const UPDATED_AT = null;

    protected $fillable = [
        'graduate_id',
        'old_session_id',
        'new_session_id',
        'request_status',
        'reviewed_at',
        'reviewed_by',
        'review_notes',
    ];

    protected $casts = [
        'requested_at' => 'datetime',
        'reviewed_at'  => 'datetime',
    ];

    // Relationships
    public function graduate()
    {
        return $this->belongsTo(Graduate::class, 'graduate_id', 'graduate_id');
    }

    public function oldSession()
    {
        return $this->belongsTo(SurveySession::class, 'old_session_id', 'session_id');
    }

    public function newSession()
    {
        return $this->belongsTo(SurveySession::class, 'new_session_id', 'session_id');
    }

    public function reviewedBy()
    {
        return $this->belongsTo(Admin::class, 'reviewed_by', 'admin_id');
    }

    // Helpers
    public function isPending(): bool
    {
        return $this->request_status === 'Pending';
    }

    public function isApproved(): bool
    {
        return $this->request_status === 'Approved';
    }

    public function isRejected(): bool
    {
        return $this->request_status === 'Rejected';
    }
}
