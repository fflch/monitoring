<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Models;

class SociaisController extends Controller
{
    public function index(){
        return view('sociais.sociais');
    }
}
