<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'date_start'=>['required', 'date'],
            'date_fin'=>['required', 'date']
        ]);

        $available = Reservation::where('book_id', $request->book_id)
                    ->where('date_start', '<=', $request->date_fin)
                    ->where('date_fin', '>=', $request->date_start)
                    ->count() === 0;
                    
        if($available){
            Reservation::create([
                'user_id' => 1,
                'book_id' => $request->book_id,
                'date_start' => $request->date_start,
                'date_fin' => $request->date_fin
            ]);
        }

        return redirect("/details/$request->book_id");
    }
}
