<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;


class SeanceController extends Controller
{

    public function update(Request $request)
    {
        $seances = Session::all();
        Session::query()->delete();
        $seancesIn = $request->json();
        app('log')->info($seances);
        app('log')->info($request);
        foreach ($seancesIn as $seanceIn) {
            foreach ($seances as $seance) {
                if ($seanceIn['id'] === $seance->id) {
                    Session::query()->create($seanceIn);

                    $s++;
                }
            }
            if ($s == 0) Session::query()->create($seanceIn);
            $s = 0;
        }
        $seancesOut = Session::all();
        return response()->json($seancesOut);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function addSeats(Request $request, Session $seance)
    {
        $seance->selected_seats = $request->input('selected_seats');
        $seance->seance_seats = $request->input('seance_seats');
        $seance->save();
    }
}
