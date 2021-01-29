@extends('layouts.main')

@section('title', 'Dettaglio Prenotazione')

@section('content')
    <div class="container">
       <div class="card" style="width: 100%;">
            <div class="card-body">
              <h5 class="card-title">Numero prenotazione: {{ $booking->id }}</h5>
              <h5 class="card-title">Ospite: {{ $booking->guest_full_name }}</h5>
              <h5 class="card-title">Carta di Credito: {{ $booking->guest_credit_card }}</h5>
              <h5 class="card-title">Numero stanza: {{ $booking->room }}</h5>
              <h5 class="card-title">Check-in: {{ $booking->from_date }}</h5>
              <h5 class="card-title">Check-out: {{ $booking->to_date }}</h5>
              <h5 class="card-title">Dettagli aggiuntivi:</h5>
              <p class="card-text">{{ $booking->more_details }}</p>
              <a href="/bookings" class="btn btn-primary">Torna alle prenotazioni</a>
            </div>
        </div>
    </div>
@endsection