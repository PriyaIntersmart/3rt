<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class countSetting extends Model
{
    use HasFactory;
    protected $fillable = [

        'count', 'subtitle','text_before_count','text_after_count','sort_order','status'
    ];
    public function scopeActive($query){
        return $query->where('status', 1);
    }
}
