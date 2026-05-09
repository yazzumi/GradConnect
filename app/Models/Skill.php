<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $primaryKey = 'skill_id';

    public $timestamps = false;

    protected $fillable = [
        'skill_name',
    ];

    // Relationships
    public function graduates()
    {
        return $this->belongsToMany(Graduate::class, 'graduate_skills', 'skill_id', 'graduate_id');
    }
}
