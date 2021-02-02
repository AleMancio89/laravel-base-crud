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

        $newBooking->guest_full_name= $validated['name'];
        $newBooking->from_date= $validated['check_in'];
        $newBooking->to_date= $validated['check_out'];
        $newBooking->guest_credit_card= $validated['credit_card'];
        $newBooking->room= $validated['room'];
        $newBooking->more_details= $validated['more_details'];

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
        $booking = Booking::find($id);

        return view('bookings.edit', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BookingFormRequest $request, $id)
    {
        $validated = $request->validated();

        $editedBooking = Booking::find($id);

        $editedBooking->guest_full_name= $validated['name'];
        $editedBooking->from_date= $validated['check_in'];
        $editedBooking->to_date= $validated['check_out'];
        $editedBooking->guest_credit_card= $validated['credit_card'];
        $editedBooking->room= $validated['room'];
        $editedBooking->more_details= $validated['more_details'];

        $editedBooking->save();

        return redirect()->route('bookings.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::destroy($id);

        return redirect()->route('bookings.index');
    }
}
