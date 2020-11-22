<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tasks;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tasks = Tasks::all();

    return view('tasks.index', compact('tasks'));
    }
}
