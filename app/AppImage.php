<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class AppImage extends Model
{
    //
    public function createImage($data,$id){
        $size=1200*0.741;
        $path = $data->store('images');
        $image = Image::make('storage/'.$path)->resize(1200,$size);
        $image->save('storage/images/'.$image->basename);
        $this->image = $path;
        $this->app_id = $id;
        $this->save();
    }
}
