<x-layout>
    <div class="container bg-card shadow rounded-5 justify-content-center" style="margin-top: 110px">
      <div class="row m-5 ">
        <h2 class="text-white display-4 m-5 text-center"> Tutti Gli Articoli</h2>
        @foreach ($articles as $article)
          <div class="col-12 col-md-4">
            <div class="card card mb-5 " style="width: 18rem;">
                  <img src="https://picsum.photos/200" class="card-img-top" alt="immagini">
                  <div class="card-body ">
                    <h5 class="card-title text-center">{{$article->titolo}}</h5>
                    <hr>
                    <p class="card-text ">Categoria: <strong> {{$article->category->name}}</strong></p>
                    <p class="card-text text-truncate">{{$article->descrizione}}</p>
                    <p class="card-text">€ {{$article->prezzo}}</p>
                    
                      <div class="card-footer m-3 text-body-secondary">
                        Pubblicato il: {{$article->created_at->format('d/m/y')}} <hr> - Autore: {{$article->user->name}}
                      </div>
                      <a href="{{route('showArticle', compact('article'))}}" class="btn btn-warning">Visualizza Articolo</a>
                  </div>               
            </div>          
          </div>
        @endforeach
        <div class="container justify-content-center d-flex">
          <div class="row">
            {{$articles->links()}}
          </div>
        </div>
          
      </div>
    </div>
</x-layout>