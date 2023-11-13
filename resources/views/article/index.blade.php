<x-layout>
    <div class="container bg-card shadow rounded-5 justify-content-center" style="margin-top: 110px" data-aos="fade-right"
    data-aos-offset="300"
    data-aos-easing="ease-in-sine">
      <div class="row m-5 ">
        <h2 class="text-white display-4 mt-5 mb-5 text-center"> Tutti Gli Articoli</h2>
        @forelse ($articles as $article)
          <div class="col-md-8 col-lg-8 col-xl-4 mx-auto mb-4 justify-content-center d-flex hvr-float-shadow " data-aos="fade-right"
          data-aos-offset="300"
          data-aos-easing="ease-in-sine">
            <div class="card card mb-5 " style="width: 18rem;">
                  <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : '/img/colleghi.jpg'}}" class="card-img-top" alt="immagini">
                  <div class="card-body ">
                    <h5 class="card-title text-center">{{$article->titolo}}</h5>
                    <hr>
                    <p class="card-text ">Categoria: <strong> {{$article->category->name}}</strong></p>
                    <p class="card-text text-truncate">{{$article->descrizione}}</p>
                    <p class="card-text">€ {{$article->prezzo}}</p>
                    
                      <div class="card-footer m-3 text-body-secondary">
                        Pubblicato il: {{$article->created_at->format('d/m/y')}} <hr> - Autore: {{$article->user->name}}
                      </div>
                      <a href="{{route('showArticle', compact('article'))}}" class="btn hvr-forward btn-warning">Visualizza Articolo</a>
                  </div>               
            </div>          
          </div>
        @empty
        <div class="col-md-8 col-lg-8 col-xl-8 mx-auto mb-4">
            <div class="alert alert-warning py-3 shadow">
              <p class="lead">Non ci sono annunci per questa ricerca.Prova a cambiare la ricerca</p>
            </div>
        </div>
        @endforelse
        <div class="container justify-content-center d-flex">
          <div class="row">
            {{$articles->links()}}
          </div>
        </div>
          
      </div>
    </div>
</x-layout>