<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    /** @use HasFactory<\Database\Factories\TagsFactory> */
    use HasFactory;

    protected $fillable = [];


    public function jobs(){
        return $this->belongsToMany(Jobs::class);
    }
}