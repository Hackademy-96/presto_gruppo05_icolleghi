<x-layout>
  <div class="container mb-5 search-design  p-3 bg-body-secondary rounded-5 " style="margin-top: 100px;">
    <div class="row">
      <div class="col-md-12 ">
        <form action="{{route('articles_search')}}" method="GET" class="d-flex" role="search">
          <input name="searched" class="form-control  me-2" type="search" placeholder="Scrivi Qui la Tua Ricerca" aria-label="Search">
          <button class="btn btn-warning " type="submit"><i class="bi bi-search"></i></button>
        </form>
      </div>
    </div>
  </div>
  
@if (session('access.denied'))
              <div class="alert alert-success">
                  {{ session('access.denied') }}
              </div>
    @endif

    {{-- INSERIMENTO CAROSELLO --}}
    <div class="container-fluid fixed carosello position-relative mt-5">
      <div class="row">
        <div class="col-12 p-0">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://picsum.photos/800" class="d-block carosello-home img-fluid w-100 rounded-5 " alt="https://picsum.photos/800">
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/801" class="d-block carosello-home img-fluid w-100 rounded-5" alt="https://picsum.photos/801">
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/802" class="d-block carosello-home img-fluid w-100 rounded-5" alt="https://picsum.photos/802">
              </div>
            </div>           
          </div>
        </div>
      </div>
      {{-- Categorie  --}}
        <div class=" container box-prodotti bg-body-tertiary p-2 shadow rounded-5 justify-content-center mt-5 ">
          <div class="row m-5 ">
            <h1 class="text-center mb-5 font-h1 ">Categorie</h1>
            @php $counter = 0 @endphp 
              @foreach ($categories as $category)
                <div class="col-12 col-md-4">
                    <div class=" mb-5 " style="width: 18rem;">
                        <img src="https://picsum.photos/20{{++$counter}}" class=" categorie-bordo card-img-top rounded-circle " alt="immagini">
                        <div class="card-body">
                          <a class="btn-bordo m-4 fs-3 btn btn-warning justify-content-center d-flex text-center" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a>
                        </div>
                      </div>                 
                </div>
                @endforeach
            </div>
        </div>
        {{-- fine Categorie  --}}
    </div>
    
    {{-- FINE CAROSELLO --}}

    {{-- INSERIMENTO CARD --}}
    

    <div class="container bg-card p-2 shadow rounded-5 justify-content-center   ">
      <div class="row">
        <div class="col-12 ">
            <div class=" m-5  justify-content-center d-flex">
        <a  class="btn fs-2 btn-outline-secondary"href="{{route('create_article')}}">Inserisci Annuncio</a>
      </div>
        </div>
      </div>
      <div class="row m-5 ">
        <h1 class="text-center text-white mb-5">Ultimi Articoli</h1>
          @foreach ($articles as $article)
            <div class="col-12 col-md-4">
              <x-carosello-card :article="$article" :index="$loop->index"/>      
            </div>
            @endforeach
        </div>
    </div>

   
</x-layout>

