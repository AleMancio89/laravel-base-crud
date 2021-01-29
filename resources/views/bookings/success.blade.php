@extends('layouts.main')

@section('title', 'Successo')

@section('content')

    <div class="container">

        <p>Inserimento avvenuto con successo, torna alla <a href="{{ route('bookings.index') }}">lista prenotazioni</a></p>
        
    </div>
    

@endsection