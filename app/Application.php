<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    public function showApps(){
        return $this->all();
    }
}
