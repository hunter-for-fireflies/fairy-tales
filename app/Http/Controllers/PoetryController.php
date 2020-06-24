<?php

namespace App\Http\Controllers;

use App\Poetry;
use Illuminate\Http\Request;

class PoetryController extends Controller
{
    public function show()
	{
		return Poetry::all();
	}
}
