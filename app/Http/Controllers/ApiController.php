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
    return view('content_prose',['content_prose'=>(new ProseController())->show()]);
	}
	
	public function content_articlesAction()
	{
    return view('content_articles',['content_articles'=>(new ArticleController())->show()]);
	}
	
	public function content_poetryAction()
	{
    return view('content_poetry',['content_poetry'=>(new PoetryController())->show()]);
	}
	
	public function authAction()
	{
    return view('auth');
	}
	
	public function search(Request $request)
	{
    return view('content_articles',['content_articles'=>(new ArticleController())->search($request->title)]);
	}
}
