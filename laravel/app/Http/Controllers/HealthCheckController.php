<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\StreamedResponse;
use App\Http\Requests\HealthcheckRequest;


class HealthCheckController extends Controller
{
    public function index()
    {
        $userid = Auth::id();

        // ページネーションのため10件ずつ取得
        if(History::where('user_id', $userid)->count() >= 10){
            $histories = History::where('user_id', $userid)->latest()->paginate(10);
        }else{
            $histories = History::where('user_id', $userid)->latest()->paginate(History::where('user_id', $userid)->count());
        }
        // チャートでの表示のため30件を取得
        if(History::where('user_id', $userid)->count() >= 30){
            $histories_thirty = History::where('user_id', $userid)->latest()->paginate(30);
        }else{
            $histories_thirty = History::where('user_id', $userid)->latest()->paginate(History::where('user_id', $userid)->count());
        }

        $histories_all = History::where('user_id', $userid)->latest()->get();

        return view('index', 
        ['histories' => $histories,
         'histories_thirty' => $histories_thirty,
         'histories_all' => $histories_all,
          'userid' => $userid,]);
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

    public function delete(Request $request)
    {
        $userid = Auth::id();
        History::where('user_id', $userid)->where('id', $request->id)->delete();
        return redirect()->route('index');   
    }


}
