@extends('layouts.main')

@section('title', 'Aggiungi prenotazione')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('bookings.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome e Cognome</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="check-in" class="form-label">Check in</label>
            <input type="text" class="form-control" id="check-in" name="check_in" aria-describedby="checkInHelp">
            <div id="checkInHelp" class="form-text">Formato data gg/mm/yyyy</div>
        </div>
        <div class="mb-3">
            <label for="check-out" class="form-label">Check out</label>
            <input type="text" class="form-control" id="check-out" name="check_out">
            <div id="checkInHelp" class="form-text">Formato data gg/mm/yyyy</div>
        </div>
        <div class="mb-3">
            <label for="credit-card" class="form-label">Numero carta di Credito</label>
            <input type="number" class="form-control" id="name" name="credit_card">
        </div>
        <div class="mb-3">
            <label for="room" class="form-label">Numero Camera</label>
            <input type="number" class="form-control" id="room" name="room">
        </div>
        <div class="mb-3">
            <label for="textarea" class="form-label">Dettagli aggiuntivi</label>
            <textarea class="form-control" id="textarea" name="more_details"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
    </form>    
</div>
@endsection