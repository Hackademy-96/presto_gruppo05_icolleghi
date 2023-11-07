<x-layout>
    <div class="container" style="margin-top:120px">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 m-3 p-5 shadow bg-body-tertiary rounded-5 text-center">
                    {{$article_to_check ? "Ecco l'annuncio da revisionare" : 'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    @if($article_to_check)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" >
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" style="height: 800px">
                      <div class="carousel-item active">
                        <img src="https://picsum.photos/800" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/800" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://picsum.photos/800" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                  
                </div>
              </div>
              <div class="container justify-content-center d-flex mt-5 mb-4 p-3 bg-black text-white shadow rounded-5">
                <div class="row">
                  <div class="col-12 text-center">
                    <h5>Titolo: {{$article_to_check->titolo}}</h5>
                    <p>Descrizione: {{$article_to_check->descrizione}}</p>
                    <p>Pubblicato il: {{$article_to_check->created_at->format('d/m/y')}}</p>
                    <p>Da: {{$article_to_check->user->name}}</p>
                  </div>
                </div>
              </div>

        <div class="container justify-content-center d-flex">
          <div class="row">
            <div class="col-12 d-flex  col-md-6">
                <form action="{{route('revisor.accept_article', ['article'=>$article_to_check])}}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit" class="btn btn-success">Accetta</button>
                </form>
                <form action="{{route('revisor.reject_article', ['article'=>$article_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-danger ms-3" type="submit">Rifiuta</button>
            
                </form>
            </div>
        </div>
      </div>
        
    </div>
@endif
</x-layout>