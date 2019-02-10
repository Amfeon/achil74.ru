<?php

namespace App\Http\Controllers;

use DeepCopy\f001\A;
use Illuminate\Http\Request;
use App\Application;
class ApplicationController extends Controller
{
    public function getApplication(){
        $a= new Application();
        $data=$a->showApps();
        return view('back-end.showApp',['data'=>$data]);
    }
    public function create(){
        return view('back-end.create');
    }
}
