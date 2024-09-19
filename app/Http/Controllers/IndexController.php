<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    public function index(){
	return view('index');
    }
}
