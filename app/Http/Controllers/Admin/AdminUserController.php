<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Employer;
use App\Models\Employee;

class AdminUserController extends Controller
{
    public function listEmployers()
    {

        $listEmployers =  Employer::get();

        return view('admin.manageEmployer', compact('listEmployers'));
    }

    public function listEmployees()
    {

        $listEmployees =  Employee::get();

        return view('admin.manageEmployee', compact('listEmployees'));
    }
}
