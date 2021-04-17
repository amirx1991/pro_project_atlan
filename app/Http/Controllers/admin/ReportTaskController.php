<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Http\Request;


class ReportTaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {

        $tasks=Task::with('user')->filter()->paginate(20);

        return view('admin.report',['tasks'=>$tasks,'report'=>$request]);
    }
}
