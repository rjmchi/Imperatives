<?php

namespace App\Http\Controllers;

use App\Models\Verb;
use Illuminate\Http\Request;

class VerbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $flds = $request->validate([
            'verb'=>'required',
            'informal'=>'required',
            'neginformal'=>'required',
            'formal'=>'required',
            'negformal'=>'required',
            'plural'=>'required',
            'negplural'=>'required',
        ]);

        Verb::create($flds);
        return redirect(route('home'))->with('status', 'Verb Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Verb $verb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Verb $verb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Verb $verb)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Verb $verb)
    {
        //
    }
}
