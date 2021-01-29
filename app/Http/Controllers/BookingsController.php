<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::all();

        $columns = [
            'id' => 'Prenotazione',
            'guest_full_name' => 'Ospite',
            'room' => 'Stanza',
            'from_date' => 'Check in',
            'to_date' => 'Check out',
        ];

        return view('bookings.index', compact('bookings', 'columns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newBooking = new Booking();

        $newBooking->guest_full_name= $request->input('name');
        $newBooking->from_date= $request->input('check_in');
        $newBooking->to_date= $request->input('check_out');
        $newBooking->guest_credit_card= $request->input('credit_card');
        $newBooking->room= $request->input('room');
        $newBooking->more_details= $request->input('more_details');

        $newBooking->save();

        return view('bookings.success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booking = Booking::find($id);

        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
