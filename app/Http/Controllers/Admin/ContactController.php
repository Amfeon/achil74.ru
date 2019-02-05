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
}
