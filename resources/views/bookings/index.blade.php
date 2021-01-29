@extends('layouts.main')

@section('title', 'Prenotazioni')

@section('content')
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
            @foreach ($columns as $key => $value)    
                <th scope="col">{{ $value }}</th>
            @endforeach
                <th scope="col">Dettagli</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <th scope="row">{{ $booking->id }}</th>
                    <td>{{ $booking->guest_full_name }}</td>
                    <td>{{ $booking->room }}</td>
                    <td>{{ $booking->from_date }}</td>
                    <td>{{ $booking->to_date }}</td>
                    <td><a href="{{ route('bookings.show', $booking->id) }}">Scheda</a></td>                
                </tr>            
            @endforeach
        </tbody>
    </table>    
</div>    

@endsection
    
