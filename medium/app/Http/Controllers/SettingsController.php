<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //

    public function list(){
        $arr =[
            'location',
            'profile',
            'privacy',
         ];
     
         return view('internal.settings',[
             'array'=>$arr
         ]);
    }
}
