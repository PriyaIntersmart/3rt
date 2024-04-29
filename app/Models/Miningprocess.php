<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miningprocess extends Model
{
    use HasFactory;

    protected $fillable = [
       'title','description','sort_order','status'
       ];

       public function scopeActive($query){
        return $query->where('status', 1);
    }
}
