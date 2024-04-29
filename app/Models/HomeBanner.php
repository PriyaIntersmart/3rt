<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HomeBanner extends Model
{
    use HasFactory,ImageTrait;


    protected $guarded=["id"];

    protected $fileDirectory = 'banner';

    public function fileDirectory()
    {
        return $this->fileDirectory;
    }

    public function getImageValueAttribute()
    {
        if ($this->banner_image && Storage::disk('public')->exists($this->banner_image))
            return Storage::url($this->banner_image);
        else if ($this->banner_image && file_exists($this->banner_image))
            return asset($this->banner_image);
        else
            return asset('frontend/images/banner-home-1.jpg');
    }
}
