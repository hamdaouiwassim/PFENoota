<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ErrorController extends Controller
{
    public function notfound()
    {
        return view('404');
    }
    public function fatal()
    {
        return view('500');
    }
}
