<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LegalPagesController extends Controller
{

    public function privacyPolicy(Request $request){

        return view('web.legal-pages.privacy-policy');

    }


    public function legalNotice(Request $request){

        return view('web.legal-pages.legal-notice');

    }


}
