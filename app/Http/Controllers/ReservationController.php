<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Internaute;
use App\Models\Hotel;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::with(['internaute', 'hotel'])->get();
        return view('reservations.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $internautes = Internaute::all();
        $hotels = Hotel::all();
        return view('reservations.create', compact('internautes', 'hotels'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reservation = new Reservation();
        $reservation->id_internaute = $request->id_internaute;
        $reservation->id_hotel = $request->id_hotel;
        $reservation->date_debut_sejour = $request->date_debut_sejour;
        $reservation->date_fin_sejour = $request->date_fin_sejour;
        $reservation->titre = $request->titre;
        $reservation->save();

        return redirect()->route('reservations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $id)
    {
        $reservation = Reservation::with(['internaute', 'hotel'])->findOrFail($id);
        return view('reservations.show', compact('reservation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $id)
    {
        $reservation = Reservation::findOrFail($id);
        $internautes = Internaute::all();
        $hotels = Hotel::all();
        return view('reservations.edit', compact('reservation', 'internautes', 'hotels'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->id_internaute = $request->id_internaute;
        $reservation->id_hotel = $request->id_hotel;
        $reservation->date_debut_sejour = $request->date_debut_sejour;
        $reservation->date_fin_sejour = $request->date_fin_sejour;
        $reservation->titre = $request->titre;
        $reservation->save();

        return redirect()->route('reservations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
        return redirect()->route('reservations.index');
    }
}
