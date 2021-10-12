<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\HealthcheckRequest;

class HealthCheckController extends Controller
{
    public function index()
    {
        $userid = Auth::id();

        $histories = History::where('user_id', $userid)->get()->sortByDesc('created_at');

        return view('index', ['histories' => $histories, 'userid' => $userid,]);
    }

    public function record(HealthcheckRequest $request, History $histories)
    {
        $histories->status = $request->status;
        $histories->memo = $request->memo;
        $histories->score = $request->score;
        $histories->user_id = $request->user()->id;
        $histories->save();
        return redirect()->route('index');   
    }
}
