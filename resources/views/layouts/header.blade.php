<nav class="navbar navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo.png') }}" alt=""  height="50">
      </a>
      <form class="form-inline my-2 my-lg-0 align-self-end d-flex" action="{{ route('bookings.create') }}">
        <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">Aggiungi nuova prenotazione</button>
      </form>
    </div>
</nav>