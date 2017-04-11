<?php

namespace App\Http;

use Illuminate\Http\Request;

class FileUploader {

    public static function upload(Request $request, $item, $path, $property = 'photo') {
                    
        if ($request->file($property)) {                                    
            $file = $request->file($property);
            $ext = $file->guessClientExtension();                 
            $path = $file->storeAs($path, "image_{$item->id}.{$ext}");            
                                    
            $item->{$property} = 'storage/' . $path;
            $item->save();
        }

        return $item;
    }

}