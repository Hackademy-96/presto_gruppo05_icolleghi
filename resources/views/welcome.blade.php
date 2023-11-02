<x-layout>

    {{-- TITOLO --}}
    <h1 class="text-center display-1 m-5">PROVA</h1>

    {{-- INSERIMENTO CAROSELLO --}}
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://picsum.photos/200" class="d-block w-100" alt="https://picsum.photos/200">
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/200" class="d-block w-100" alt="https://picsum.photos/200">
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/200" class="d-block w-100" alt="https://picsum.photos/200">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    
    {{-- FINE CAROSELLO --}}




    {{-- INSERIMENTO CARD --}}
    <div class="container justify-content-center d-flex mt-5">
        <div class="row m-5 ">
            <div class="col-12 col-md-4">
                <div class="card card " style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="immagini">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
                    
            </div>
        </div>
    </div>
<div class="comtainer justify-content-center d-flex">
  <button class="btn  btn-primary">Inserisci Annuncio</button>

</div>
   
</x-layout>

