<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyStoryController extends Controller
{

    public function index(Request $request){

        return view('web.my-story');

    }

}
