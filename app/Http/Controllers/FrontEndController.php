<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(Request $request){
        $page_title = "Welcome";

        if($request->path() == "about"){
            $page_title = "About";
        }

        return view('pages.static' ,[
            'page_title'=> $page_title
        ]);
    }
}
