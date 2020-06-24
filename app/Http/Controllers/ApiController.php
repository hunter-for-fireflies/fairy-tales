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
	
	public function content_proseAction()
	{
    return view('content_prose');
	}
	
	public function content_articlesAction()
	{
    return view('content_articles');
	}
	
	public function content_poetryAction()
	{
    return view('content_poetry');
	}
}
