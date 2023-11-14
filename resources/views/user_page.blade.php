<x-layout>
    <h1>  Ciao {{Auth::user()->name}}</h1>

    <h2>ARTICOLI CARICATI:</h2>
    <div class="container">
        <div class="row">

            @foreach ($articles as $article)
            <div class="col-md-4 col-12 col-lg-8 col-xl-4 mx-auto mb-4 justify-content-center d-flex hvr-float-shadow " data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine">
              <div class="card card mb-5 " style="width: 18rem;">
                    <img src="{{!$article->images()->get()->isEmpty() ? $article->images()->first()->getUrl(400,300) : '/img/colleghi.jpg'}}" class="card-img-top" alt="immagini">
                    <div class="card-body ">
                      <h5 class="card-title text-center">{{$article->titolo}}</h5>
                      <hr>
                      <p class="card-text ">{{__('ui.categoria')}}: <strong> {{$article->category->name}}</strong></p>
                      <p class="card-text text-truncate">{{$article->descrizione}}</p>
                      <p class="card-text">€ {{$article->prezzo}}</p>
                      
                        <div class="card-footer m-3 text-body-secondary">
                          {{__('ui.pubblicato')}} {{$article->created_at->format('d/m/y')}} <hr> - {{__('ui.autore')}}: {{$article->user->name}}
                        </div>
                        <a href="{{route('showArticle', compact('article'))}}" class="btn hvr-forward btn-warning">{{__('ui.visArticolo')}}</a>
                    </div>               
              </div>          
            </div>
        
        
          @endforeach
        </div>
    </div>





</x-layout>