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
        // This method renders the employer signin view.
        return view('employer.signin');
    }

    public function employee()
    {
        // This method renders the employee signin view.
        return view('employee.signin');
    }

    public function signinSubmit(Request $request, Employer $employer)
    {
        // This method handles the employer signin submission.
        // Validate the request.
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
        ]);

        // Get the employer from the database.
        $employer = Employer::where('username', $request->username)->first();

        // If the employer does not exist, redirect to the signin page with an error message.
        if (!$employer) {
            return redirect()->route('employer.signin')->with('error', 'User with that username does not exists');
        }

        // Check if the password is correct.
        if (!Hash::check($request->password, $employer->password)) {
            return redirect()->route('employer.signin')->with('error', 'Incorrect password');
        }

        // Check if the employer is verified.
        if (!$employer->isverified) {
            return redirect()->route('employer.signin')->with('error', 'Your email is not verified');
        }

        // Login the employer.
        Auth::guard('employer')->login($employer);

        // Redirect to the employer dashboard.
        return redirect()->route('employer.dashboard');
    }

    public function employerLogout()
    {
        // This method logs out the employer.
        Auth::guard('employer')->logout();

        // Redirect to the employer signin page.
        return redirect()->route('employer.signin');
    }

    public function signinSubmitEmployee(Request $request, Employee $employee)
    {
        // This method handles the employee signin submission.
        // Validate the request.
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
        ]);

        // Get the employee from the database.
        $employee = Employee::where('username', $request->username)->first();

        // If the employee does not exist, redirect to the signin page with an error message.
        if (!$employee) {
            return redirect()->route('employee.signin')->with('error', 'User with that username does not exists');
        }

        // Check if the password is correct.
        if (!Hash::check($request->password, $employee->password)) {
            return redirect()->route('employee.signin')->with('error', 'Incorrect password');
        }

        // Check if the employee is verified.
        if (!$employee->isverified) {
            return redirect()->route('employee.signin')->with('error', 'Your email is not verified');
        }

        // Login the employee.
        Auth::guard('employee')->login($employee);

        // Redirect to the employee dashboard.
        return redirect()->route('employee.dashboard');
    }

}
