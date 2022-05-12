<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function deleteTask($id)
    {
      return view('delete', [
          'tasks' => \App\Models\Task::where('id', $id)->delete(),
      ]);

    }
}
