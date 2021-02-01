@extends('layouts.main')

@section('title', 'Aggiungi prenotazione')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('bookings.update', $booking['id']) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome e Cognome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $booking['guest_full_name'] }}">
            @error('name')
            <div class="alert">
                Inserire correttamente nome e cognome.
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="check-in" class="form-label">Check in</label>
            <input type="text" class="form-control" id="check-in" name="check_in" aria-describedby="checkInHelp" value="{{ $booking['from_date'] }}">
            <div id="checkInHelp" class="form-text">Formato data gg/mm/yyyy</div>
            @error('check_in')
                <div class="alert">
                    Inserire correttamente data.
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="check-out" class="form-label">Check out</label>
            <input type="text" class="form-control" id="check-out" name="check_out" value="{{ $booking['to_date'] }}">
            <div id="checkInHelp" class="form-text">Formato data gg/mm/yyyy</div>
            @error('check_out')
                <div class="alert">
                    Inserire correttamente data.
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="credit-card" class="form-label">Numero carta di Credito</label>
            <input type="number" class="form-control" id="name" name="credit_card" value="{{ $booking['guest_credit_card'] }}">
            @error('credit_card')
                <div class="alert">
                    Inserire correttamente numero carta di credito.
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="room" class="form-label">Numero Camera</label>
            <input type="number" class="form-control" id="room" name="room" value="{{ $booking['room'] }}">
            @error('room')
                <div class="alert">
                    Inserire correttamente numero della stana.
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="textarea" class="form-label">Dettagli aggiuntivi</label>
            <textarea class="form-control" id="textarea" name="more_details">{{ $booking['more_details'] }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
    </form>    
</div>
@endsection