<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index()
    {
        return view('employer.signup');
    }
    public function employee()
    {
        return view('employee.signup');
    }
}
