<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order()
    {
        return view('order', [
            'tasks' => \App\Models\Task::orderBy('title', 'asc')->get(),
        ]);
    }
}
