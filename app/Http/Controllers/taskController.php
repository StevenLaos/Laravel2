<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tasks extends Controller
{
    //
    public function taskList(Request $request){
        $tasks = Task::orderBy('created_at', 'asc')->get();
        return view('tasks', ['tasks'=> $tasks]);
    }
}
