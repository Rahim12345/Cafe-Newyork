<?php


namespace App\Traits;


use Illuminate\Support\Facades\File;

Trait FileUploader
{
    public function fileSave($path, $file)
    {
        $new_name   = $file->hashName();
        $file->move(public_path($path), $new_name);

        return $new_name;
    }

    public function fileDelete($path)
    {
        if (File::exists(public_path($path)))
        {
            File::delete(public_path($path));
        }

        return true;
    }
}
