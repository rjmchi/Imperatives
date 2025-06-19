<?php

namespace App\Http\Controllers;

use App\Models\Verb;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index() {
        $verbs = Verb::orderBy('verb')->get();

        return Inertia::render('Welcome', ['verbs'=>$verbs]);

    }

    public function create() {
        return Inertia::render('NewVerb');
    }
}
