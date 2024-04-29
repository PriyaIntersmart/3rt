<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','iframe','sort_order','status','address','email','display_footer'
    ];
    public function scopeActive($query){
        return $query->where('status', 1);
    }
}
