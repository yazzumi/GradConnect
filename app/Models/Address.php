<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $primaryKey = 'address_id';

    public $timestamps = false;

    protected $fillable = [
        'graduate_id',
        'street_address',
        'barangay',
        'city_municipality',
        'province',
    ];

    // Relationships
    public function graduate()
    {
        return $this->belongsTo(Graduate::class, 'graduate_id', 'graduate_id');
    }
}
