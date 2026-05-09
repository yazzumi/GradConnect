<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $primaryKey = 'admin_id';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = null;

    protected $fillable = [
        'username',
        'password_hash',
        'role',
    ];

    protected $hidden = [
        'password_hash',
    ];

    // Relationships
    public function auditLogs()
    {
        return $this->hasMany(AuditLog::class, 'admin_id', 'admin_id');
    }

    public function reports()
    {
        return $this->hasMany(Report::class, 'admin_id', 'admin_id');
    }

    public function reviewedUpdateRequests()
    {
        return $this->hasMany(UpdateRequest::class, 'reviewed_by', 'admin_id');
    }
}
