<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Geust;
use App\Http\Requests\GeustRequest;

class GeustController extends Controller
{
    var $count = 0 ;

    public function index(){
        $this->count++ ;
        if($this->count > 1) dd("test");

        return view("index");
    }

    public function dspmsg(GeustRequest $request){
        $form = $request->all() ;
        Geust::create($form);
        
        return view("thanks");
    }
}
