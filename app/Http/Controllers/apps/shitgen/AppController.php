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
        $result = "👌👀👌👀👌👀👌👀👌👀 " + $data + " shit " + $data + " sHit👌 thats ✔ some " + $data + "👌👌shit
                right👌👌there👌👌👌 right✔there ✔✔if i do ƽaү so my self 💯 i say so 💯 thats what im talking about
                right there right there (chorus: ʳᶦᵍʰᵗ ᵗʰᵉʳᵉ) mMMMMᎷМ💯 👌👌 👌НO0ОଠOOOOOОଠଠOoooᵒᵒᵒᵒᵒᵒᵒᵒᵒ👌 👌👌 👌 💯
                👌 👀 👀 👀 👌👌" + $data + " shit";
        return view('apps.shitgen')->with('result', $result);
    }
}