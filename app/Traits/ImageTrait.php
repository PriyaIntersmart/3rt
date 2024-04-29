<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait ImageTrait
{
    /**
     * upload file
     *
     * @author priya
     */
    public function uploadFile($file, $directory)
    {
        $fileName  = Str::uuid() . '.' . $file->getClientOriginalExtension();
        $filePath   = 'uploads/' . $directory . '/' . $fileName;

        $file->storeAs('public/uploads/' . $directory, $fileName);

        return $filePath;
    }

    /**
     * Delete the file file associated with the model.
     *
     * @return void
     */
    public function deleteFile($fieldName)
    {
        if ($this->$fieldName){
            if (Storage::disk('public')->exists($this->$fieldName)) {
                Storage::disk('public')->delete($this->$fieldName);
                return true;
            } else {
                return false;
            }
    } else {
            return false;
        }
    }
}
