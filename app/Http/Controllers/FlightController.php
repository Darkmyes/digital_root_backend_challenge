<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index(Request $request) {
        $per_page = $request->get('per_page') ?: 15;
        $flights = Flight::paginate($per_page);

        return response()->json($flights);
    }

    public function show(Request $request, $id) {
        $flight = Flight::findOrFail($id);

        return response()->json($flight);
    }
}
