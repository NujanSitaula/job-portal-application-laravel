<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware('employer');
    }

    public function index()
    {
        return view('employer.dashboard');
    }

    public function payment()
    {
        return view('employer.profile');
    }
    
}
