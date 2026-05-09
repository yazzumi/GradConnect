<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $primaryKey = 'report_id';

    const CREATED_AT = 'date_generated';
    const UPDATED_AT = null;

    protected $fillable = [
        'admin_id',
        'report_type',
    ];

    // Relationships
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id', 'admin_id');
    }
}
