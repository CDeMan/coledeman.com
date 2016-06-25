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
        $data = array($request->input('adj'), $request->input('noun'));
        if (strlen($data[0]) < 1) {
            $data[0] = "good";
        }
        if (strlen($data[1]) < 1) {
            $data[1] = "shit";
        }
        return view('apps.shitgen')->with('data', $data);
    }

    /**
     * @param Request $request
     * @return $this
     */
    public function postView(Request $request)
    {
        $adj = $request->input('adj');
        $noun = $request->input('noun');
        /*$result = "👌👀👌👀👌👀👌👀👌👀 " . $adj . " shit " . $adj . " sHit👌 thats ✔ some " . $adj . "👌👌shit
                right👌👌there👌👌👌 right✔there ✔✔if i do ƽaү so my self 💯 i say so 💯 thats what im talking about
                right there right there (chorus: ʳᶦᵍʰᵗ ᵗʰᵉʳᵉ) mMMMMᎷМ💯 👌👌 👌НO0ОଠOOOOOОଠଠOoooᵒᵒᵒᵒᵒᵒᵒᵒᵒ👌 👌👌 👌 💯
                👌 👀 👀 👀 👌👌" . $adj . " shit";*/
        $data = array($adj, $noun);
        return view('apps.shitgen')->with('data', $data);
    }
}