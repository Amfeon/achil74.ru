<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $table = 'tasks';
    public $timestamps = false;
    public function create($request){
        $this->name=$request->name;
        $this->phone=$request->phone;
        $this->writen=0;
        $this->save();
    }
    public function getTask(){
        return $this->all();
    }
    public  function deleteTask($id){
        $this->destroy($id);
       /* $a=$this->find($id);
        $a->delete();*/
    }

}
