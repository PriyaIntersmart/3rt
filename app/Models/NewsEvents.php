<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class NewsEvents extends Model
{
    use HasFactory,ImageTrait,Sluggable;


    protected $fillable = [
        "image","title","description","date","status"
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true
            ]
        ];
    }
    protected $fileDirectory = 'news-events';

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
            return null;
    }
    public function scopeActive($query){
        return $query->where('status', 1);
    }
}
