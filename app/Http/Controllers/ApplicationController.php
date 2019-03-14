<?php

namespace App\Http\Controllers;

use DeepCopy\f001\A;
use Illuminate\Http\Request;
use App\Application;
use App\Category;
use Intervention\Image\Facades\Image;
use App\AppImage;
class ApplicationController extends Controller
{
    public function getApplication(){
        $a= new Application();
        $data=$a->showApps();
        return view('back-end.showApp',['data'=>$data]);
    }
    public function create(){
        $a = new Category();
        $category= $a->getAll();
        return view('back-end.create',['categories'=>$category]);
    }
    public function store(Request $request){
        $app=new Application();
        $file=$request->file('image');
        $data=$request->file('picture');
        /* if it update*/
        if(isset($request->id)){
            if($data!=null){
                $imageFile=$request->file('picture');
                foreach ($imageFile as $item){
                    $a = new AppImage();
                    $a->createImage($item,$request->id);
                }
            }
            $app->updateApp($request);
            return redirect(route('application'));
        }
        /*else it is a create function*/
        $id=$app->createApplication($request,$file);
        foreach ($data as $item){
           $a = new AppImage();
           $a->createImage($item,$id);
        }
        return redirect(route('application'));
    }
    public function deleteApp($id){
        $a=new Application();
        $a->del($id);
        return redirect(route('application'));
    }
    public function editApp($id){
        $a = new Application();
        $b = new Category();
        $i =new AppImage();
        $images= $i->get()->where('app_id',$id);
        $data=$a->getApp($id);
        $categories=$b->getAll();
        return view('back-end.editApp', ['data'=>$data,'categories'=>$categories, 'images'=>$images]);
    }
    public function index(){
        $app= new Application();
        $data=$app->showApps();
        return view('front-end.index',['data'=>$data]);
    }
    public function showApp($cat_id){
        $a = new Application();
        $b = new Category();
        $category = $b->find($cat_id);
        $data=$a->get()->where('cat_id',$cat_id);
        return view('front-end.showApp',['data'=>$data, 'category'=>$category]);
    }
    public function appIndex($cat_id,$id){
        $a= new Application();
        $b = new AppImage();
        $images= $b->get()->where('app_id',$id);
        $data=$a->find($id);
        return view('front-end.appIndex', ['data'=>$data,'images' =>$images]);
        
    }
    public function deleteAppImage(Request $request){
        foreach ($request->image_id as $image){
            $i =new AppImage();
            $i->destroy($image);
        }
        return redirect()->route('editApp', $request->app_id);
    }
}
