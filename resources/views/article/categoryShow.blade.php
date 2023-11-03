<x-layout>
    <div class="container justify-content-center d-flex mt-5">
        <div class="row m-5 ">
            @forelse ($category->articles as $article)
              <div class="col-12 col-md-4">
                  <div class="card card " style="width: 18rem;">
                      <img src="https://picsum.photos/200" class="card-img-top" alt="immagini">
                      <div class="card-body">
                        <h5 class="card-title">{{$article->titolo}}</h5>
                        <p class="card-text">{{$article->prezzo}}</p>
                        <p class="card-text">{{$article->descrizione}}</p>
                        <a href="" class="btn btn-primary">Go somewhere</a>
                        <p class="card-footer my-2">Pubblicato il: {{$article->created_at->format('d/m/y')}} - Autore: {{$article->user->name}}</p>
                      </div>
                    </div>
                      
              </div>
              @empty
              <div class="col-12">
                <h1>Non ci sono annunci in questa categoria</h1>
                <h2>Pubblicane uno: <a class="btn btn-danger" href=""{{route('create_article')}}"">Nuovo Annuncio</a></h2>
              </div>
              @endforelse   
          </div>
      </div>

    
</x-layout>