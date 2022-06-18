<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmHomeController extends Controller
{
    //
    function index()
    {

        $layout = [];
        $layout['content']='';
        $layout['title']="Home";

        return view('admin.layout', $layout);
    }
}
