<x-layout>


    {{-- INSERIMENTO CAROSELLO --}}
    <div class="container" style="margin-top: 100px">
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
                <img src="https://picsum.photos/800" height="700px" class="d-block w-100 p-2 bg-body-tertiary rounded-5 " alt="https://picsum.photos/800">
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/800" height="700px" class="d-block w-100 p-2 bg-body-tertiary rounded-5" alt="https://picsum.photos/800">
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/800" height="700px" class="d-block w-100 p-2 bg-body-tertiary rounded-5" alt="https://picsum.photos/800">
              </div>
            </div>           
          </div>
        </div>
      </div>
    </div>
    
    {{-- FINE CAROSELLO --}}




    {{-- INSERIMENTO CARD --}}
    
    <div class="container justify-content-center d-flex mt-5 ">
      <div class="row m-5 ">
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
<div class="comtainer justify-content-center d-flex">
  <button class="btn  btn-primary">Inserisci Annuncio</button>

</div>
   
</x-layout>

