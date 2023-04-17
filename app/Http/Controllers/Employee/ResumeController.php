<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function __construct()
    {
        $this->middleware('employee');
    }

    public function index()
    {
        return view('employee.resume');
    }
    public function create()
    {
        return view('employee.createresume');
    }
}
