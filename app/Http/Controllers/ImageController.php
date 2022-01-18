<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    //
    public function home(){
        $images = Image::paginate(6);
        return view('home');
    }

    public function searchImage(Request $request){
        $images = Image::where('name','like','%'.$request->search.'%')->paginate(6);
        return view('search_image',compact('images'));
    }

}
