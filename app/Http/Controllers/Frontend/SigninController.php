<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employer;
use App\Models\Employee;
use Hash;
use Auth;

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

    public function signinSubmit(Request $request, Employer $employer)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
        ]);

        $employer = Employer::where('username', $request->username)->first();
        if($employer) {
            if(Hash::check($request->password, $employer->password)) {
                if($employer->isverified == 1) {
                    Auth::guard('employer')->login($employer);
                    return redirect()->route('employer.dashboard');
                } else {
                    return redirect()->route('employer.signin')->with('error', 'Your email is not verified');
                }
            } else {
                return redirect()->route('employer.signin')->with('error', 'Incorrect password');
            }
        } else {
            return redirect()->route('employer.signin')->with('error', 'User with that username does not exists');
        }
    }

    public function employerLogout()
    {
        Auth::guard('employer')->logout();
        return redirect()->route('employer.signin');
    }

    public function signinSubmitEmployee(Request $request, Employee $employee)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
        ]);

        $employee = Employee::where('username', $request->username)->first();
        if($employee) {
            if(Hash::check($request->password, $employee->password)) {
                if($employee->isverified == 1) {
                    Auth::guard('employee')->login($employee);
                    return redirect()->route('employee.dashboard');
                } else {
                    return redirect()->route('employee.signin')->with('error', 'Your email is not verified');
                }
            } else {
                return redirect()->route('employee.signin')->with('error', 'Incorrect password');
            }
        } else {
            return redirect()->route('employee.signin')->with('error', 'User with that username does not exists');
        }
    }

}
