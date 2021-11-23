<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbController extends Controller
{
    public function index($slug=null)
    {
        if ($slug){
            return view('content', compact("slug"));
        }

        return view('content');

        // return view('index', ['azejob' => $vakansiya]);
    }
}
