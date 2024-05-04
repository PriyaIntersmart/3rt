<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AdminConfiguration extends Model
{
    use HasFactory,ImageTrait;

    public function getImageAttribute()
    {
        return Storage::disk('public')->exists($this->value) ? Storage::url($this->value) : asset($this->value);
    }
}
