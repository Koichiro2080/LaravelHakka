<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class MusicController extends Controller
{
    public function main(Request $request){
        return view('music.main');
    }

    public function create(Request $request){
        $param = [
            'date' => $request->date,
            'place' => $request->place,
            'time' => $request->time
        ];
        DB::insert('insert into touroku(date,place,time) values (:date,:place,:time)', $param);
        return redirect('main');
    }

    public function show(Request $request){
        $items = DB::select('select * from touroku');
            return view('music.show',['items' => $items]);
        }
}
