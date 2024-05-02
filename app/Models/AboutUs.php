<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class AboutUs extends Model
{
    use HasFactory ,ImageTrait;


    protected $fillable = [
        'title','subtitle','description','about_image','about_image_one','about_image_two','work_overview_title','work_overview_description','work_overview_imageone',
        'work_overview_imagetwo','work_overview_imagethree','work_overview_imagefour',
        'about_right_description','about_left_description','section_one_heading','section_one_subheading',
        'section_two_heading'

    ];

    protected $fileDirectory = 'about-cms';

    public function fileDirectory()
    {
        return $this->fileDirectory;
    }

    public function getAboutUsValueAttribute()
    {
        if ($this->about_image && Storage::disk('public')->exists($this->about_image))
            return Storage::url($this->about_image);
        else if ($this->about_image && file_exists($this->about_image))
            return asset($this->about_image);
        else
            return asset('frontend/images/about1.jpg');
    }

    public function getAboutUsValueOneAttribute()
    {
        if ($this->about_image_one && Storage::disk('public')->exists($this->about_image_one))
            return Storage::url($this->about_image_one);
        else if ($this->about_image_one && file_exists($this->about_image_one))
            return asset($this->about_image_one);
        else
            return asset('frontend/images/logoBg.svg');
    }

    public function getAboutUsValueTwoAttribute()
    {
        if ($this->about_image_two && Storage::disk('public')->exists($this->about_image_two))
            return Storage::url($this->about_image_two);
        else if ($this->about_image_two && file_exists($this->about_image_two))
            return asset($this->about_image_two);
        else
            return asset('frontend/images/abotClip.jpg');
    }

    public function getOverViewImageOneAttribute()
    {
        if ($this->work_overview_imageone && Storage::disk('public')->exists($this->work_overview_imageone))
            return Storage::url($this->work_overview_imageone);
        else if ($this->work_overview_imageone && file_exists($this->work_overview_imageone))
            return asset($this->work_overview_imageone);
        else
            return asset('frontend/images/stone.png');
    }

    public function getOverViewImageTwoAttribute()
    {
        if ($this->work_overview_imagetwo && Storage::disk('public')->exists($this->work_overview_imagetwo))
            return Storage::url($this->work_overview_imagetwo);
        else if ($this->work_overview_imagetwo && file_exists($this->work_overview_imagetwo))
            return asset($this->work_overview_imagetwo);
        else
            return asset('frontend/images/overview11.jpg');
    }


    public function getOverViewImageThreeAttribute()
    {
        if ($this->work_overview_imagethree && Storage::disk('public')->exists($this->work_overview_imagethree))
            return Storage::url($this->work_overview_imagethree);
        else if ($this->work_overview_imagethree && file_exists($this->work_overview_imagethree))
            return asset($this->work_overview_imagethree);
        else
            return asset('frontend/images/overview12.jpg');
    }

    public function getOverViewImageFourAttribute()
    {
        if ($this->work_overview_imagefour && Storage::disk('public')->exists($this->work_overview_imagefour))
            return Storage::url($this->work_overview_imagefour);
        else if ($this->work_overview_imagefour && file_exists($this->work_overview_imagefour))
            return asset($this->work_overview_imagefour);
        else
            return asset('frontend/images/overview13.jpg');
    }


}
