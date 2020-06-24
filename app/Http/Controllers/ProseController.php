<?php

namespace App\Http\Controllers;

use App\Prose;
use Illuminate\Http\Request;

class ProseController extends Controller
{
    public function show()
	{
		return Prose::all();
	}
}
