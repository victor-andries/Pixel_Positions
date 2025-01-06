<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('results', ['jobs' => $tag->jobs->load(['employer', 'tags'])]);
    }
}
