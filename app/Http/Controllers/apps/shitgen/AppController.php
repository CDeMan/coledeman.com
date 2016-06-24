<?php

namespace App\Http\Controllers\apps\shitgen;

use App\Http\Controllers\Controller;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Requests;

class AppController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int $id
     * @return Response
     */
    public function getView(Request $request)
    {
        $data = $request->input('word');
        if (strlen($data) < 1) {
            $data = "good";
        }
        return view('apps.shitgen')->with('data', $data);
    }

    public function postView(Request $request)
    {
        $data = $request->input('word');
        return view('apps.shitgen')->with('data', $data);
    }
}