<?php

namespace App\Http\Controllers\apps\shitgen;

use App\Http\Controllers\Controller;
use App\ShitgenWord;
use Illuminate\Http\Request;
use Illuminate\Database\Query;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
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
        $this->addWord($request);
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

    public function addWord(Request $request)
    {
        //make sure all fields are valid
        $v = Validator::make($request->all(), [
            'noun' => 'required',
            'adj' => 'required',
        ]);
        //if input is invalid, go back with errors and old input
        if ($v->fails()) {
            return redirect()->back()->withInput()->withErrors($v->errors());
        }

        $word = new ShitgenWord();
        $word->word = $request->input('noun');
        $result = ShitgenWord::where('word', '=', $request->input('noun'))->get();
        $word->type = 'noun';
        if (!$result->count()) {
            $word->save();
        } else {
            ShitgenWord::where('word', '=', $request->input('noun'))->increment('count');
        }
        $word = new ShitgenWord();
        $word->word = $request->input('adj');
        $exists = ShitgenWord::where('word', '=', $request->input('adj'))->get();
        $word->type = 'adj';
        if (!$result->count()) {
            $word->save();
        } else {
            ShitgenWord::where('word', '=', $request->input('adj'))->increment('count');
        }
    }
}