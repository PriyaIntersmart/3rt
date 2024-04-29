<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class KeyElement extends Model
{
    use HasFactory,ImageTrait;

    protected $fillable = [
        'title','logo_image','description'
    ];

    protected $fileDirectory = 'keyelements';

    public function fileDirectory()
    {
        return $this->fileDirectory;
    }

    public function getImageValueAttribute()
    {
        if ($this->logo_image && Storage::disk('public')->exists($this->logo_image))
            return Storage::url($this->logo_image);
        else if ($this->logo_image && file_exists($this->logo_image))
            return asset($this->logo_image);
        else
            return null;
    }


    public function scopeActive($query){
        return $query->where('status', 1);
    }

}
