<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \App\Music;
use \App\Artist;

use Session;
use App\Administrator;
use App\Http\Controllers\Input;

class MusicsController extends Controller
{
	public function index()
	{
		return view('musics.index',['ziks'=>Music::all()]);
	}

	public function create()
	{		
		return view('musics.create',['artists'=>Artist::all()]);
	}

	public function store(Request $request)
	{

		$request->validate([
			'title' => 'required',
			'filepath' => 'required|file',
		]);


		$generatedname = $request->filepath->store('zik');

		if ($generatedname!==false){
			Music::create([
				'title' => request('title'),
				'artist_id' => request('artistsel'),
				'album' => request('album'),
				'genre' => request('genre'),
				'year' => request('year'),
				'filepath' => $generatedname,
			]);
		}
		return redirect('/musics');   	
	}

	public function show(Music $music)
	{
		return view('musics.show',compact('music'));
	}

	public function edit(Music $music)
	{
		return view('musics.edit',['music'=>$music,'artists'=>Artist::all()]);
	}

	public function update(Music $music)
	{	


		$music->title = request('title');
		$music->artist_id = request('artistsel');
		$music->album = request('album');
		$music->genre = request('genre');
		$music->year = request('year');

		$music_file = request('filepath');

		if (request()->hasFile('filepath')) {
			$generatedname = request('filepath')->store('zik');
			$filename = $music_file->getClientOriginalExtension();

			$filename = $music_file->getClientOriginalExtension();
        	$location = public_path($generatedname.'.'.$filename);

			if ($generatedname!==false){
				$music->filepath = $generatedname;
			}

		}

		$music->save();
		return redirect('/musics');
	}

	public function destroy(Music $music)
	{
		$music->delete();
		return redirect('/musics');
	}

}
