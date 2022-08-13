<?php

use Illuminate\Support\Facades\Storage;

function uploadFile($file,$path='images'){

    $filename = $path."/".time(). preg_replace('/[^A-Za-z0-9\-.]/', '', $file->getClientOriginalName());
    Storage::put($filename,\File::get($file));
    return $filename;
}

function getFilePath($path){
    // dd(config('filesystems.default') );
     $relativePath= Storage::url($path);
    if(config('filesystems.default') == 'public'){
        return asset($relativePath);
    }
}