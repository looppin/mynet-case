<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function index()
    {

        return view('backend.default.index');

    }

    public function newperson()
    {
        return view('backend.default.addperson');
    }
}
