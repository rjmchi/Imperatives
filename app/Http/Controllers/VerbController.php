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
        if ($request->regular) {
            $reflexive = ['','',''];
            $flds = $request->validate(['verb'=> 'required']);
            $request->verb = strtolower($request->verb);
            $parts = str_split($request->verb, strlen($request->verb)-2);
            if ($parts[1] == 'se'){
                $reflexive = ['te', 'se', 'se'];
                $verb = str_split($parts[0], strlen($parts[0])-2);
                $root = $verb[0];
                $end = $verb[1];
            } else {
                $root = $parts[0];
                $end = $parts[1];
            }
            if ($end == 'ar'){
                $flds = ['verb'=>$request->verb,
                'informal' => $root.'a' . $reflexive[0],
                'neginformal'=> 'no '.$reflexive[0] .' ' . $root.'es',
                'formal'=> $root.'e'.$reflexive[1],
                'negformal'=> 'no '.$reflexive[1] .' ' . $root.'e',
                'plural'=> $root.'en'.$reflexive[2],
                'negplural'=> 'no '.$reflexive[2] .' ' . $root.'en',
            ];
            } elseif (($end == 'ir') || ($end == 'er')){
                $flds = ['verb'=>$request->verb,
                'informal' => $root.'e'.$reflexive[0],
                'neginformal'=> 'no '.$reflexive[0] .' ' . $root.'as',
                'formal'=> $root.'a'.$reflexive[1],
                'negformal'=> 'no '.$reflexive[1] .' ' . $root.'a',
                'plural'=> $root.'an'.$reflexive[2],
                'negplural'=> 'no '.$reflexive[2] .' ' . $root.'an',
                ];
            }

        } else {
            $flds = $request->validate([
                'verb'=>'required',
                'informal'=>'required',
                'neginformal'=>'required',
                'formal'=>'required',
                'negformal'=>'required',
                'plural'=>'required',
                'negplural'=>'required',
            ]);
        }

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
