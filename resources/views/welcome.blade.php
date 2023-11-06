<x-layout>
<div class="container mb-5 search-design search-scrolled p-3 bg-body-secondary rounded-5 " style="margin-top: 120px">
  <div class="row">
    <div class="col-md-12 ">
      <form class="d-flex" role="search">
    <input class="form-control  me-2" type="search" placeholder="Scrivi Qui la Tua Ricerca" aria-label="Search">
    <button class="btn btn-warning " type="submit"><i class="bi bi-search"></i></button>
  </form>
    </div>
  </div>
</div>
  

    {{-- INSERIMENTO CAROSELLO --}}
    <div class="container-fluid mt-5">
      <div class="row">
        <div class="col-12">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://picsum.photos/800" height="700px" class="d-block w-100 carosello-home rounded-5 " alt="https://picsum.photos/800">
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/800" height="700px" class="d-block w-100 carosello-home rounded-5" alt="https://picsum.photos/800">
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/800" height="700px" class="d-block w-100 carosello-home rounded-5" alt="https://picsum.photos/800">
              </div>
            </div>           
          </div>
        </div>
      </div>
    </div>
    
    {{-- FINE CAROSELLO --}}

{{-- Categorie  --}}

<div class="container bg-body-tertiary p-2 shadow rounded-5 justify-content-center  mt-5 ">
  <div class="row m-5 ">
    <h1 class="text-center mb-5">Categorie</h1>
      @foreach ($categories as $category)
        <div class="col-12 col-md-4">
            <div class=" mb-5 " style="width: 18rem;">
                <img src="https://picsum.photos/200" class=" card-img-top rounded-circle" alt="immagini">
                <div class="card-body">
                  <p class="m-4 fs-3 btn btn-warning justify-content-center d-flex text-center">{{$category->name}}</p>
                </div>
              </div>                 
        </div>
        @endforeach
    </div>
</div>

{{-- fine Categorie  --}}


    {{-- INSERIMENTO CARD --}}
    
    <div class="container bg-card p-2 shadow rounded-5 justify-content-center  mt-5 ">
      <div class="row m-5 ">
        <h1 class="text-center text-white mb-5">Ultimi Articoli</h1>
          @foreach ($articles as $article)
            <div class="col-12 col-md-4">
                <div class="card card mb-5 " style="width: 18rem;">
                    <img src="https://picsum.photos/200" class="card-img-top" alt="immagini">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->titolo}}</h5>
                      <p class="card-text">Categoria: {{$article->category->name}}</p>
                      <p class="card-text">€ {{$article->prezzo}}</p>
                      <p class="card-text">{{$article->descrizione}}</p>
                      <a href="{{route('showArticle', compact('article'))}}" class="btn btn-primary">Visualizza</a>
                    </div>
                  </div>                 
            </div>
            @endforeach
        </div>
    </div>
<div class="container justify-content-center d-flex">
  <button class="btn  btn-primary">Inserisci Annuncio</button>

</div>
   
</x-layout>

