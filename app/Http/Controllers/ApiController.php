<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
	public function indexAction()
	{
    return view('index');
	}
	
	public function textAction()
	{
    return view('text');
	}
	
	public function lkAction()
	{
    return view('lk');
	}
	
}
