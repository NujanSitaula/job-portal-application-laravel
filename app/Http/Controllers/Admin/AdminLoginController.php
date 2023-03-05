<?php

namespace App\Http\Controllers\Admin;
// Import the necessary classes
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin; // The Admin model
use Illuminate\Support\Str; // import Str class for generating random strings
use App\Mail\WebsiteMailController; // The WebMail class for sending emails
use Hash; // The Hash facade for password hashing
use Auth; // The Auth facade for authentication

// Define the AdminLoginController class, which extends Laravel's base Controller class
class AdminLoginController extends Controller
{
    // Define the index method, which returns the admin login view
    public function index()
    {
        // $checkpass = Hash::make('admin123');
        // dd($checkpass);
        // Return the view for the admin login page
        return view('admin.login');
    }

    // Define the recoverPassword method, which returns the admin password recovery view
    public function recoverPassword()
    {
        // Return the view for the admin password recovery page
        return view('admin.recover');
    }

    public function sosLogin()
    {
        // Return the view for the admin password recovery page
        return view('admin.soslogin');
    }

    public function recoverSubmitPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $adminCheck = Admin::where('email', $request->email)->first();
        if(!$adminCheck) {
            return redirect()->route('admin.recover')->with('error', 'User with that email does not exists');
        }

        $token = hash('sha256',time());

        $adminCheck->token = $token;
        $adminCheck->update();
        $resetLink = url('admin/recoverPassword/'.$token.'/'.$request->email);
        $subject = 'Password Reset Link';
        $message = $resetLink;
        \Mail::to($request->email)->send(new WebsiteMailController($subject, $message));

        return redirect()->route('admin.recover')->with('success', 'Password reset link has been sent to your email');

    }

    // Define the loginSubmitPost method, which handles the admin login form submission
    public function loginSubmitPost(Request $request)
    {
        // Validate the email and password inputs from the login form
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Retrieve the email and password credentials from the request
        $credentials = $request->only('email', 'password');

        // Attempt to authenticate the admin user with the given credentials
        if (Auth::guard('admin')->attempt($credentials)) {
            // If the authentication is successful, redirect the user to the admin dashboard
            return redirect()->intended(route('admin.home'));
        }

        // If the authentication fails, redirect the user back to the login page with an error message
        return redirect()->route('admin.login')->with('error', 'Invalid Username or Password');
    }

    // Define the logout method, which logs out the authenticated admin user
    public function logout()
    {
        // Log out the authenticated admin user
        Auth::guard('admin')->logout();

        // Redirect the user to the login page
        return redirect()->route('admin.login');
    }

    public function resetPassword($token, $email)
    {
        $adminCheck = Admin::where('email', $email)->where('token', $token)->first();
        if(!$adminCheck) {
            return redirect()->route('admin.invalid')->with('tokenError', 'Invalid token or email');
        }

        return view('admin.resetPassword', compact('token', 'email'));
    }

    public function enterOTPassword($token)
    {
        $adminCheck = Admin::where('token', $token)->first();
        if(!$adminCheck) {
            return redirect()->route('admin.invalid')->with('tokenError', 'Invalid token or email');
        }

        return view('admin.sosvalidate', compact('token'));
    }

    public function resetPasswordSubmit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'retype_password' => 'required|same:password'
        ]);

        $adminCheck = Admin::where('email', $request->email)->first();
        if(!$adminCheck) {
            return redirect()->route('admin.linkexpired')->with('tokenError', 'Invalid token or email');
        }

        $adminCheck->password = Hash::make($request->password);
        $adminCheck->token = '';
        $adminCheck->update();

        return redirect()->route('admin.login')->with('success', 'Password has been reset successfully');
    }

    public function sosLoginSubmitPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $adminCheck = Admin::where('email', $request->email)->first();
        if(!$adminCheck) {
            return redirect()->route('admin.soslogin')->with('error', 'User with that email does not exists');
        }

        $otp = Str::random(6); // generate a random 6-digit OTP
        $token = hash('sha256',$otp);
        $adminCheck->token = $token;
        $adminCheck->OTP = Hash::make($otp);
        $adminCheck->update();

        $resetLink = url('admin/recoverPassword/'.$token.'/'.$request->email);
        $subject = 'One Time Password Confirmation';
        $message = $otp;
        \Mail::to($request->email)->send(new WebsiteMailController($subject, $message));

        return redirect()->route('admin.enterOTPassword',$token)->with('success', 'Password reset link has been sent to your email');
    }

    public function validateOTPasswordSubmit(Request $request)
    {
        $request->validate([
            'otp' => 'required',
            'token' => 'required'
        ]);

        $adminCheck = Admin::where('token', $request->token)->first();
        if(!$adminCheck) {
            return redirect()->route('admin.linkexpired')->with('tokenError', 'Invalid token or email');
        }

        // dd($adminCheck->otp, Hash::make($request->otp));

            if (Hash::check($request->otp, $adminCheck->otp)) {
                $adminCheck->token = '';
                $adminCheck->update();
        
                // Authenticate the user
                Auth::guard('admin')->login($adminCheck);
                $adminCheck->otp = '';
                $adminCheck->update();

                return redirect()->intended(route('admin.home'));
        }

        return redirect()->route('admin.enterOTPassword',$request->token)->with('error', 'Invalid OTP');
    }
} 