<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Booking;
use App\Http\Requests\BookingFormRequest;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
    public function store(BookingFormRequest $request)
    {         

        $validated = $request->validated();

        $newBooking = new Booking();

        $newBooking->$validated['guest_full_name']= $request->input('name');
        $newBooking->$validated['from_date']= $request->input('check_in');
        $newBooking->$validated['to_date']= $request->input('check_out');
        $newBooking->$validated['guest_credit_card']= $request->input('credit_card');
        $newBooking->$validated['room']= $request->input('room');
        $newBooking->$validated['more_details']= $request->input('more_details');

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
