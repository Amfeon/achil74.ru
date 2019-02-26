<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class Category extends Model
{
    public $timestamps = false;
    public function getAll(){
        return $this->all();
    }
    public function create($request){
        $file=$request->file('image');
        $name= $file->getClientOriginalName();
        $path = $file->storeAs('thumbnail','thumnail_'.$name);
        $image = Image::make('storage/'.$path)->resize(400,265);
        $image->save('storage/thumbnail/'.$image->basename);
        $this->title=$request->title;
        $this->image=$path;
        $this->save();
    }
    public function delCat($id){
        $this->destroy($id);
    }
    public function getCat($id){
        return $this->find($id);
    }
}
