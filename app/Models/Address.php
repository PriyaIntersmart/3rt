<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'title','address','status','sort_order'
    ];
    public function scopeActive($query){
        return $query->where('status', 1);
    }
}
