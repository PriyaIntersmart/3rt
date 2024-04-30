<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AdminConfiguration extends Model
{
    use HasFactory;

    public function getImageValueAttribute()
    {
        return Storage::disk('public')->exists($this->value) ? Storage::url($this->value) : asset($this->value);
    }
}
