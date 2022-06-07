<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    /**
     * Mass assignable attributes
     */
    protected $fillable = [
        'property_title',
        'property_description',
        'user_id',
        'property_type',
        'price',
        'status',
        'latitude',
        'longitude'
    ];

    /**
     * Defining relationship with users table
     */
    public function user(){
        return $this->belongsTo(User::class);
    }
}
