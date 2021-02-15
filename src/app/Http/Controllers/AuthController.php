<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    private function checkIfInputIsEmail($input)
    {
        //Find '@' and '.' in Given Input
        $findAtSign = strpos($input, '@');
        $findDot = strpos($input, '.');

        //Return True for Email, otherwise False
        return ($findAtSign !== false && $findDot !== false && $findDot > $findAtSign);
    }

    public function showLoginView()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|string',
                'password' => 'required|string'
            ]
        );
        $loginTokenColumn = ($this->checkIfInputIsEmail(trim($request->email))) ? 'email' : 'msisdn';
        try {
            if (Auth::guard('web')->attempt([$loginTokenColumn => $request->email, 'password' => $request->password])) {
                return redirect('#');
            } else {
                return redirect('login')->with('error', config());
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('errors', $exception);
        }
    }

    public function showResetPassword()
    {
        return view('resetPassword');
    }

    public function resetPassword(Request $request)
    {
        $request->validate(
            [
                'userToken' => 'required|string'
            ]
        );
        $loginTokenColumn = ($this->checkIfInputIsEmail(trim($request->loginToken))) ? 'email' : 'msisdn';
        try {
            $user = User::where($loginTokenColumn, $request->userToken)->get();
            if ($user) {
                $temporaryPassword = mt_rand(100000, 999999);
                $user->update(['password' => Hash::make($temporaryPassword)]);
                if (!App::environment('local')) {
                    MUTHOFUN::message(
                        'Temporary Password for Bondhu Shikhondi is ' . $temporaryPassword . ' Change password after login.'
                    )
                        ->to($user->msisdn)
                        ->send();
                }
                return Redirect::to('/login');
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('errors', $exception);
        }
    }

    public function showPackagesView()
    {
        return view('packages');
    }
}
