<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use Storage;

class ImageController extends Controller
{
    public function amazonS3(){
        return view('amazon_s3');
    }

    public function storeS3(Request $request){
        $path = $request->file('image')->store('images', 's3');
        // Storage::disk('s3')->setVisibility($path, 'public');

        $image = Image::create([
            'filename' => basename($path),
            'url' => Storage::disk('s3')->url($path)
        ]);
        
        return $image;
    }

    function showImageS3(Image $image){
        return view('amazon_s3_show', ['image' => $image]);
    }
}
