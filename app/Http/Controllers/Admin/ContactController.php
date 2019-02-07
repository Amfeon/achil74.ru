<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;
class ContactController extends Controller
{
    public function store(Request $request){
      //  return response()->json([$request->all()]);
        $data=json_decode($request->getContent());
        $task=new Task();
        $task->create($data);
        return $request->all();
    }
    public function index(){
        $a=new Task();
        $data=$a->getTask();
        return view('back-end.index', ['tasks'=>$data]);

    }
    public function delete($id){
        $a= new Task();
        $a->deleteTask($id);
        return redirect('admin');
        
    }
    public function watched(){
        
    }
}
