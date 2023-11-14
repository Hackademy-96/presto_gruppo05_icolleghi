<x-layout>
  
      <div class="container" style="margin-top: 120px">
    <div class="row">
      <h2 class="display-4 text-center">Articoli della Categoria: {{$category->name}}</h2>
    </div>
  </div>
  
  
  
    <div class="container mt-3 ">
        <div class="row m-5 justify-content-center ">
            @forelse ($category->articles as $article)
              <div class="col-12 col-md-3">
                  <div class="card">
                      <img src="{{!$article->images()->get()->isEmpty() ? Storage::url($article->images()->first()->path) : '/img/colleghi.jpg'}}" class="card-img-top img-size" alt="immagini">
                      <div class="card-body">
                        <h5 class="card-title">{{$article->titolo}}</h5>
                        <p class="card-text">{{$article->prezzo}}€</p>
                        <p class="card-text">{{$article->descrizione}}</p>
                        <a href="{{route('showArticle', compact('article'))}}" class="btn mb-2 btn-warning visualizza-articolo justify-content-center d-flex">{{__('ui.visArticolo')}}</a>
                        <p class="card-footer my-2">{{__('ui.pubblicato')}}{{$article->created_at->format('d/m/y')}} - {{__('ui.autore')}}: {{$article->user->name}}</p>
                      </div>
                    </div>
                      
              </div>
              @empty
              <div class="col-12 text-center">
                <h2 class="display-2">{{__('ui.nienteAnnunci')}}</h2>
                <p class="fs-4 mt-5 font-h1">Pubblicane uno: <a class="btn btn-danger" href="{{route('create_article')}}">Nuovo Annuncio</a></p>
              </div>
              @endforelse   
          </div>
      </div>

    
</x-layout>