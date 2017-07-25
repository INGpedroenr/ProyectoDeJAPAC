<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function getmaster()
    {
        return view('adminlte::master');
    }
}
