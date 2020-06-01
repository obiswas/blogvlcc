<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\blogpost;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /*  public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
		 $search = $request->input('keywords');
		 
		$posts =DB::table('blogposts')
		->where('slug','LIKE',"%{$search}%")
		->paginate(15);
		$recent_posts=$this->show_recent_post();
		
        return view('home',[
		'post' =>$posts,
		'recent_post'=>$recent_posts,
		]);
    }
	public function show_recent_post()
	{
		$lastposts= blogpost::orderBy('id', 'desc')->take(5)->get();
		return $lastposts;
	}
}
