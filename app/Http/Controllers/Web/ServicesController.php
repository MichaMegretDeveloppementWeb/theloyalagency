<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

    public function index(Request $request){

        $serviceComparison = [
            'Item 1' => [
                'resources' => true,
                'pack-boost' => true,
                'pack-maitrise' => true,
            ],
            'Item 2' => [
                'resources' => true,
                'pack-boost' => true,
                'pack-maitrise' => true,
            ],
            'Item 3' => [
                'resources' => false,
                'pack-boost' => true,
                'pack-maitrise' => true,
            ],
            'Item 4' => [
                'resources' => false,
                'pack-boost' => true,
                'pack-maitrise' => true,
            ],
            'Item 5' => [
                'resources' => false,
                'pack-boost' => false,
                'pack-maitrise' => true,
            ],
            'Item 6' => [
                'resources' => false,
                'pack-boost' => false,
                'pack-maitrise' => true,
            ]
        ];

        return view('web.services', compact('serviceComparison'));

    }

}
