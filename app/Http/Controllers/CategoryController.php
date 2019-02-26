<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    //
    public function index(){
        $a= new Category();
        $data=$a->getAll();
        return view('back-end.category',['data'=>$data]);
    }
    public function store(Request $request){
        if(isset($request->id)){

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
}
