<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TractorController extends Controller
{
    public function search(Request $request)
    {
        
        try {
            $search = $request->input('search'); 
            $marka = $request->input('marka'); //parametri priekš meklēšanas
    
            $query = DB::table('tractor_errors')->where( 'kods', 'like', "%$search%"); //izfiltrē meklēšanans rezultātus par kodu
    
            if ($search) {
                $query->where(function ($query) use ($search) {  //meklē ierakstus datubāzē kods un apraksts
                    $query->where('kods', 'like', "%$search%")
                          ->orWhere('apraksts', 'like', "%$search%");
                });
            }
    
            $tractors = $query->get();
    
            return view('tractor.search', ['tractors' => $tractors]); //izvadīts tiks lietotājam
        } catch (\Exception $e) { 
            return response()->view('errors.500', [], 500);// ja radīsies kļūda tiks izmesta error lapa
        }
        return view('welcome'); 
        
    }

  

    
}



