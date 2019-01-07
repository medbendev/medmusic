<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Artist;

class ArtistsController extends Controller
{
    public function index()
	{
		return view('artists.index',['artists'=>Artist::all()]);
	}

	public function create()
	{		
		return view('artists.create',['artists'=>Artist::all()]);
	}

	public function store(Request $request)
	{

		// $request->validate([
		// 	'title' => 'required',
		// 	'filepath' => 'required|file',
		// ]);

			Artist::create([
				'name' => request('name'),
			]);
		return redirect('/artists');   	
	}
}
