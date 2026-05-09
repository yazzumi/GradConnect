<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditLog extends Model
{
    protected $primaryKey = 'log_id';

    const CREATED_AT = 'timestamp';
    const UPDATED_AT = null;

    protected $fillable = [
        'admin_id',
        'action',
        'table_name',
        'record_id',
    ];

    // Relationships
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'admin_id');
    }
}
