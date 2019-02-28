<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Application extends Model
{
    public function showApps(){
        return $this->all();
    }
    public function createApplication($request, $file){
        $name= $file->getClientOriginalName();
        $path = $file->storeAs('thumbnail','thumnail_'.$name);
        $image = Image::make('storage/'.$path)->resize(400,265);
        $image->save('storage/thumbnail/'.$image->basename);
        $this->title=$request->title;
        $this->src=$path;
        $this->text=$request->text;
        $this->price=$request->price;
        $this->cat_id=$request->cat_id;
        $this->save();
        return $this->id;
    }
    public function del($id)
    {
        $this->destroy($id);
    }
    public function getApp($id){
        return $this->find($id);
    }
    public function updateApp($request){
       $app= $this->find($request->id);
        $app->title=$request->title;
        $app->src=$request->src;
        $app->text=$request->text;
        $app->price=$request->price;
        $app->cat_id=$request->cat_id;
        $app->save();
    }
}
