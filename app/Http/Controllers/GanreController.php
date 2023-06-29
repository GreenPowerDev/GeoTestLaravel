<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ganre;
use App\Models\Province;
use App\Models\Test;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class GanreController extends Controller
{
    //
    public function ganre_selected($id){
        if(!Auth::check()) return redirect()->route('_login');
        
        $ganre = Ganre::find($id);
        $tests = Test::where('test_date', '>=', Carbon::now())
            ->where('ganre_id', $id)
            ->orderBy('test_date')
            ->paginate(4);
        return view('ganre', [
            'tests' => $tests
        ]);
    }
}
