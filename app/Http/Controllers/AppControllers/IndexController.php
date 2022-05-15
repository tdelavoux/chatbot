<?php

namespace App\Http\Controllers\AppControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lib\Proximite;

class IndexController extends Controller
{

    const NICE_STUFF = ['TOP', 'SUPER', 'GENIAL', 'GENIALE'];
    const BAD_STUFF  = ['NUL'];

    public function execute(){
        
        return view('AppViews.index');
    }

    public function reciveDemande(Request $request){
        $uniquid = uniqid();

        $pattern = mb_strtoupper($request->pattern);
        $result  = null;

        foreach(self::NICE_STUFF as $nice){
            if(str_contains($pattern , $nice)){
                $result = view('AppViews.chatRoom.partials.lovelyMessage')->render();
                break;
            }
        }

        foreach(self::BAD_STUFF as $bad){
            if(str_contains($pattern , $bad)){
                $result = view('AppViews.chatRoom.partials.angryMessage')->render();
            }
        }
        
        if(!$result){
            $appProxi = Proximite::searchProxi($pattern);
            $result = view('AppViews.chatRoom.partials.appResponse')->with('app', $appProxi)->render();
        }

        return response()->json([
            'userView' => view('AppViews.chatRoom.partials.userChat')->with('pattern', $request->pattern)->render(),
            'typing'   => view('AppViews.chatRoom.partials.typing')->with('demandId', $uniquid)->render(),
            'response' => $result,
            'demandId' => $uniquid,
        ]);
    }

}
