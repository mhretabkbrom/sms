<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Upload;

class UploadController extends Controller
{
    //

    public function index(){
        return view('uploads.upload');
    }

    public function store(Request $request){
        if($request->hasFile('image')){
         $request->file('image');
         return $request->image->storeAs('public', 'im.jpeg');
       //  return Storage::putFile('public', $request->file('image'));
    }else{
        return 'has no file';
    }
    }




    public function show(){
        $url =  Storage::url('im.jpeg');
        return "<img src='".$url."'/>";
    }
}