<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function index(Request $request) {
        $per_page = $request->get('per_page') ?: 15;
        $tickets = Ticket::paginate($per_page);

        return response()->json($tickets);
    }

    public function show(Request $request, $id) {
        $ticket = Ticket::findOrFail($id);

        return response()->json($ticket);
    }
}
