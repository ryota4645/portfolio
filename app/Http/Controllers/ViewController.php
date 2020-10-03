<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Atm;

class ViewController extends Controller
{
 
    // TOPページの表示
    public function top(){
        return view("pages/top");
    }

    // ヒストリーページの表示
    public function history(){
        return view("pages/history");
    }


    // 制作物ページの表示
    public function work(){
        return view("pages/work");
    }
}
