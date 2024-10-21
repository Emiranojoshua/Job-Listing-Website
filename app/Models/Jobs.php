<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    /** @use HasFactory<\Database\Factories\JobsFactory> */
    use HasFactory;

    public function employers(){
        return $this->belongsTo(Employers::class);
    }

    public function tags(){
        return $this->hasMany(Tags::class);
    }
}
