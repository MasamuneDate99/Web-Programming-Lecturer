<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class LikeController extends Controller
{
    public function getUserLike(){
        $like = Image::all();
        return view('profile');
    }

    public function newLike(Request $req){
        $like = new User();
        //$like->like_id = $req->
    }
}
