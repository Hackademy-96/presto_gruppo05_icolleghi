<x-layout>
    <div class="container justify-content-center d-flex mt-5">
        <div class="row m-5 ">
            @foreach ($articles as $article)
              <div class="col-12 col-md-4">
                  <div class="card card " style="width: 18rem;">
                      <img src="https://picsum.photos/200" class="card-img-top" alt="immagini">
                      <div class="card-body">
                        <h5 class="card-title">{{$article->titolo}}</h5>
                        <p class="card-text">Categoria: {{$article->category->name}}</p>
                        <p class="card-text">{{$article->prezzo}}</p>
                        <p class="card-text">{{$article->descrizione}}</p>
                        <a href="{{route('showArticle', compact('article'))}}" class="btn btn-primary">Visualizza</a>
                      </div>
                    </div>
                      
              </div>
              @endforeach
              {{$articles->links()}}
          </div>
      </div>
</x-layout>