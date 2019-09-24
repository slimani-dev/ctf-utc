<?php

namespace App\Http\Controllers;

use App\Category;
use App\Challenge;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChallengeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $challenges = Challenge::all();
        return view('challenges.index',compact('challenges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::all()->pluck('name','id');
        return view('challenges.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'flag' => 'required',
            'points' => 'required',
            'category_id' => 'required',
            'image' => 'required'
        ]);

        $image = $request->image->store('images');

        $challenge = new Challenge($validatedData);
        $challenge->image = $image;

        $challenge->user_id = auth()->id();

        $challenge->save();

        return redirect()->route('challenges.index')->with(['success' => 'challenge is been reviewed']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Challenge  $challenge
     * @return Response
     */
    public function show(Challenge $challenge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Challenge  $challenge
     * @return Response
     */
    public function edit(Challenge $challenge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Challenge  $challenge
     * @return Response
     */
    public function update(Request $request, Challenge $challenge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Challenge  $challenge
     * @return Response
     */
    public function destroy(Challenge $challenge)
    {
        //
    }
}
