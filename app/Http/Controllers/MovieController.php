<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::get();

        return view('movie', compact('movies'));
    }

    public function show(Movie $movie)
    {
        return view('single', compact('movie'));
    }

    public function store(Request $request)
    {

        $this->validate(request(),[
            'name' => 'required|min:3',
            'director' => 'required',
            'country' => 'required',
            'category' => 'required',
            'poster' => 'required',
            'video_file' => 'required',
            'description' => 'required|min:5',
        ]);

        $photoName = time().'.'.request()->file('poster')->getClientOriginalExtension();
        $videoFile = time().'.'.request()->file('video_file')->getClientOriginalExtension();

        request()->file('poster')->move(public_path('movie-posters'), $photoName);
        request()->file('video_file')->move(public_path('movie-files'), $videoFile);
        

        $movie = new Movie;
        $movie->name = request()->input('name');
        $movie->director = request()->input('director');
        $movie->country = request()->input('country');
        $movie->category = request()->input('category');
        $movie->poster = $photoName;
        $movie->video_file = $videoFile;
        $movie->description = request()->input('description');
        $movie->save();

        return redirect('/movie')
                ->with('success', trans('movie.uploadSuccess'));
    }
}
