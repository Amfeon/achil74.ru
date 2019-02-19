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
    public function store(Request $request){
        $app=new Application();
        if(isset($request->id)){
            $app->updateApp($request);
            return redirect(route('application'));
        }
        $file=$request->file('image');
        $app->createApplication($request,$file);
        return redirect(route('application'));
    }
    public function deleteApp($id){
        $a=new Application();
        $a->del($id);
        return redirect(route('application'));
    }
    public function editApp($id){
        $a = new Application();
        $data=$a->getApp($id);
        return view('back-end.editApp', ['data'=>$data]);
    }
    public function index(){
        $app= new Application();
        $data=$app->showApps();
        return view('front-end.index',['data'=>$data]);
    }
}
