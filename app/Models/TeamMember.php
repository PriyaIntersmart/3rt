<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class TeamMember extends Model
{
    use HasFactory,ImageTrait;


    protected $fillable = [
        "type","name","designation","description","sort_order","status","image"
    ];
    protected $fileDirectory = 'Team';

    public function fileDirectory()
    {
        return $this->fileDirectory;
    }

    public function getImageValueAttribute()
    {
        if ($this->image && Storage::disk('public')->exists($this->image))
            return Storage::url($this->image);
        else if ($this->image && file_exists($this->image))
            return asset($this->image);
        else
            return asset('frontend/images/team1.jpg');
    }

    public function scopeActive($query){
        return $query->where('status', 1);
    }
}
