<?php

namespace App\Models;

use App\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class StructureCms extends Model
{
    use HasFactory,ImageTrait;

    protected $fileDirectory = 'structure-cms';

    public function fileDirectory()
    {
        return $this->fileDirectory;
    }

    public function getImageValueAttribute()
    {
        if ($this->left_section_image && Storage::disk('public')->exists($this->left_section_image))
            return Storage::url($this->left_section_image);
        else if ($this->left_section_image && file_exists($this->left_section_image))
            return asset($this->left_section_image);
        else
            return null;
    }
    public function getImageValueOneAttribute()
    {
        if ($this->section_one_image && Storage::disk('public')->exists($this->section_one_image))
            return Storage::url($this->section_one_image);
        else if ($this->section_one_image && file_exists($this->section_one_image))
            return asset($this->section_one_image);
        else
            return null;
    }

    public function getImageValueTwoAttribute()
    {
        if ($this->section_two_image && Storage::disk('public')->exists($this->section_two_image))
            return Storage::url($this->section_two_image);
        else if ($this->section_two_image && file_exists($this->section_two_image))
            return asset($this->section_two_image);
        else
            return null;
    }
}
