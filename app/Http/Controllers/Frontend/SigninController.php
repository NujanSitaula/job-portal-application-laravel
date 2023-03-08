<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function index()
    {
        return view('employer.signin');
    }
    public function employee()
    {
        return view('employee.signin');
    }

}
