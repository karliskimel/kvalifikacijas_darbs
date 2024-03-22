<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TractorController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search');
    
        $tractors = DB::table('tractor_errors')
            ->where('kods', 'like', "%$search%")
            ->get();
    
        return view('tractor.search', ['tractors' => $tractors]);
    }

    // public function welcome(Request $request) {
    //     return view('welcome');
    // }
}



// public function search(Request $request)
//     {
//         $search = $request->input('search');
//         $tractors = DB::table('massey_fergusson', 'case')
//             ->where('kods', 'like', "%$search%")
//             ->where('apraksts', 'like', "%$search%")
//             ->where('skaidrojums', 'like', "%$search%")
//             ->get();

//         return view('tractor.search', ['tractors' => $tractors]);
//     }