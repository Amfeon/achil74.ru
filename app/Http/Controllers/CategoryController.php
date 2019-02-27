<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class CategoryController extends Controller
{
    //
    public function index(){
        $a= new Category();
        $data=$a->getAll();
        return view('back-end.category',['data'=>$data]);
    }
    public function store(Request $request){
        $a=new Category();
        if(isset($request->id)){
            $a->updateCat($request);
            return redirect()->route('category');
        }else{
            $a=new Category();
            $a->create($request);
            return redirect()->route('category');
        }
    }
    public function create()
    {
        return view('back-end.category.catCreate');
    }

    public function delete($id){
        $a=new Category();
        $a->delCat($id);
        return redirect()->route('category');
    }
    public function categoryEdit($id){
        $a= new Category();
        $data=$a->getCat($id);
        return view('back-end.category.catEdit',['category'=>$data]);
    }
    public function ajax(Request $request){
        $file= $request->file('image');
        $name= $file->getClientOriginalName();
        $path = $file->storeAs('thumbnail','thumnail_'.$name);
        $image = Image::make('storage/'.$path)->resize(400,265);
        $image->save('storage/thumbnail/'.$image->basename);
       return response()->json(['path'=>$path]);

    }
}
