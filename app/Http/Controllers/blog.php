<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\blogpost;

class blog extends Controller
{
    //
	public function allshow()
	{
			
		//$posts= DB::table('blogpost')->where('slug',$slug)->first(); 
		//dd($posts);
		/* if(!array_key_exists($slug,$posts))
		{
			abort(404,"Sorry The Blog Not Found");
		} */
		//$posts= blogpost::where('slug',$slug)->firstOrFail(); 
		$posts =blogpost::all();
			
		/* if($posts=='')
		{
			abort(404,"Sorry The Blog Not Found");
		} */
		 return view('welcome',[
		'post' =>$posts,
		
		]); 
	}
	public function show($slug)
	{
		
		//$posts= DB::table('blogpost')->where('slug',$slug)->first(); 
		//dd($posts);
		/* if(!array_key_exists($slug,$posts))
		{
			abort(404,"Sorry The Blog Not Found");
		} */
		$posts= blogpost::where('slug',$slug)->firstOrFail(); 
		//$posts =blogpost::all();
		/* if($posts=='')
		{
			abort(404,"Sorry The Blog Not Found");
		} */
		 return view('single',[
		'post' =>$posts
		]); 
	}
	
}
