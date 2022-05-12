<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewTaskController extends Controller
{
    public function viewOneTask($id)
    {
          return view('viewtask', [
              'tasks' => \App\Models\Task::where('id', $id)->get(),
          ]);
    }
}
