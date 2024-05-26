<x-layout>
    <!-- Inserisci il tuo testo qui sopra il carousel -->
    <div class="container text-center">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <p>
                    <br><span class="first-sentence">Sei stanco di dover chiamare ogni volta per prenotare al ristorante o dal parrucchiere?</span><br>
                    Scegli la comodità e la praticità di prenotare online con il nostro servizio semplice e veloce!
                </p>
                <button class="btn btn-primary custom-button">Prenota ora</button>
            </div>
        </div>
    <h1>{{$greeting}} from the homepage</h1>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="Iscriviti">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Accedi">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Prenotati">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</x-layout>

