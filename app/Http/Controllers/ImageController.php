<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Student;
use Storage;
use Carbon\Carbon;

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

    public function media(){
        return view('media.index');
    }

    
    public function storeMedia(Request $request){
        $student = new Student;
        $student->name = 'Dep';
        $student->status = 'COLLEGE';
        $student->save();

        $student->addMedia($request->image)
                ->toMediaCollection();

        return $student;
    }

    public function showMedia(Student $model)
    {
        dd(
            $model->getMedia(),
            $model->getMedia()[0]->getUrl(),
            $model->getMedia()[0]->getFullUrl(),
            $model->getMedia()[0]->getPath(),

            $model->getMedia()[0]->size,
            $model->getMedia()[0]->human_readable_size,

            $model->getFirstMedia(),
            $model->getFirstMediaUrl(),
        );
    }
}
