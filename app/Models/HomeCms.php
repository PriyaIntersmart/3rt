<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class HomeCms extends Model
{
    use HasFactory;


    protected $fileDirectory = 'Home-cms';

    public function fileDirectory()
    {
        return $this->fileDirectory;
    }

    public function getSectionOneValueAttribute()
    {
        if ($this->section_one_image && Storage::disk('public')->exists($this->section_one_image))
            return Storage::url($this->section_one_image);
        else if ($this->section_one_image && file_exists($this->section_one_image))
            return asset($this->section_one_image);
        else
            return asset('frontend/images/abotClip.jpg');
    }

    public function getSectionTwoValueOneAttribute()
    {
        if ($this->section_two_imageone && Storage::disk('public')->exists($this->section_two_imageone))
            return Storage::url($this->section_two_imageone);
        else if ($this->section_two_imageone && file_exists($this->section_two_imageone))
            return asset($this->section_two_imageone);
        else
            return asset('frontend/images/business-1.jpg');
    }

    public function getSectionTwoValueTwoAttribute()
    {
        if ($this->section_two_imagetwo && Storage::disk('public')->exists($this->section_two_imagetwo))
            return Storage::url($this->section_two_imagetwo);
        else if ($this->section_two_imagetwo && file_exists($this->section_two_imagetwo))
            return asset($this->section_two_imagetwo);
        else
            return asset('frontend/images/dElmt-logoOutline.svg');
    }

    public function getSectionTwoValueThreeAttribute()
    {
        if ($this->section_two_imagethree && Storage::disk('public')->exists($this->section_two_imagethree))
            return Storage::url($this->section_two_imagethree);
        else if ($this->section_two_imagethree && file_exists($this->section_two_imagethree))
            return asset($this->section_two_imagethree);
        else
            return asset('frontend/images/dElmt-gold-1.png');
    }

    public function getSectionThreeValueAttribute()
    {
        if ($this->section_three_image && Storage::disk('public')->exists($this->section_three_image))
            return Storage::url($this->section_three_image);
        else if ($this->section_three_image && file_exists($this->section_three_image))
            return asset($this->section_three_image);
        else
            return asset('frontend/images/location-1.jpg');
    }
}
