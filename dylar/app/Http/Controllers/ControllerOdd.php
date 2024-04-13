<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerOdd extends Controller
{
    public function show()
    {
        return view('odd');
    }
}
