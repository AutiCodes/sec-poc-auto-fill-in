<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class handeFormController extends Controller
{
    public function index(Request $request)
    {
        return dd($request->all());
    }
}
