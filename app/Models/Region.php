<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    /**
     * Get the country owns the region
     */
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
