<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    function index()
    {
        return view('admin.login');
    }

    function submit(Request $request)
    {
        $success = false;
        $message = "";
        $data = [];

        $email = $request->input('email');
        $password = $request->input('password');
        $password = md5($password);

        $users = DB::table('users')
            ->where('email', $email)
            ->where('password', $password)
            ->first();

        if ($users) {
            $userdata = (array) $users;
            session($userdata);
            $success=true;
        } else {
            $success=false;
            $message="Maaf Email dan Password Tidak Dikenali";
        }

        $res=array(
            'success'=>$success,
            'message'=>$message,
            'data'=>$data,
        );

        return response()->json($res);
    }

    function logout(Request $request)
    {
        $request->session()->flush();

        return redirect('login');
    }
}
