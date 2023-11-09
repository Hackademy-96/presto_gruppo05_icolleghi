<x-layout >
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
    {{-- <div class="container-fluid carosello mt-5"data-aos="fade-right"
    data-aos-offset="300"
    data-aos-easing="ease-in-sine">
      <div class="row">
        <div class=" col-12 ">
          <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner col-md-8 col-lg-8 col-xl-8 mx-auto mb-4">
              <div class="carousel-item active">
                <img src="https://cdn.mos.cms.futurecdn.net/8E6totXLziTcHNNtStGadb.jpg" class="d-block immagini-carosello carosello-home img-fluid w-100 rounded-5 " alt="https://picsum.photos/800">
              </div>
              <div class="carousel-item col-md-8 col-lg-8 col-xl-8 mx-auto mb-4">
                <img src="https://www.dexerto.com/cdn-cgi/image/width=3840,quality=75,format=auto/https://editors.dexerto.com/wp-content/uploads/2022/11/28/cm-aorus.jpg" class="d-block carosello-home img-fluid w-100 rounded-5" alt="https://picsum.photos/801">
              </div>
              <div class="carousel-item col-md-8 col-lg-8 col-xl-8 mx-auto mb-4">
                <img src="https://cdn.zoomg.ir/2021/1/spider-man-far-from-home-mysterio-inside-illusion-machine.jpg" class="d-block carosello-home img-fluid w-100 rounded-5" alt="https://picsum.photos/802">
                <div class="bg-danger rounded-5 shadow carousel-caption d-none d-md-block">
                  <h5>Il gioco dell'Anno!</h5>
                  <p>Disponibile gratuitamente su tutte le console.</p>
                </div>
              </div>
            </div>           
          </div>
        </div>
      </div> --}}

      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner carousel-inner col-md-8 col-lg-8 col-xl-8 mx-auto mb-4">
          <div class="carousel-item active" data-bs-interval="3000">
            <img src="https://cdn.mos.cms.futurecdn.net/8E6totXLziTcHNNtStGadb.jpg" class="d-block immagini-carosello carosello-home img-fluid w-100 rounded-5 " alt="https://picsum.photos/800">
          </div>
          <div class="carousel-item col-md-8 col-lg-8 col-xl-8 mx-auto mb-4" data-bs-interval="3000">
            <img src="https://www.dexerto.com/cdn-cgi/image/width=3840,quality=75,format=auto/https://editors.dexerto.com/wp-content/uploads/2022/11/28/cm-aorus.jpg" class="d-block carosello-home img-fluid w-100 rounded-5" alt="https://picsum.photos/801">
          </div>
          <div class="carousel-item col-md-8 col-lg-8 col-xl-8 mx-auto mb-4" data-bs-interval="3000">
            <img src="https://cdn.zoomg.ir/2021/1/spider-man-far-from-home-mysterio-inside-illusion-machine.jpg" class="d-block carosello-home img-fluid w-100 rounded-5" alt="https://picsum.photos/802">
          </div>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      {{-- Categorie   d-md-block --}}
        <div class=" container d-none d-md-block mb-5 box-prodotti bg-body-tertiary p-2 shadow rounded-5 justify-content-center mt-5 ">
          <div class="row m-5 ">
            <h1 class="text-center font-h1 mb-5 display-4 ">Categorie</h1>
                <div class="swiper">
                  <div class="swiper-wrapper">
                    @foreach ($categories as $category)
                    <div class="swiper-slide">
                      <div class="col-12 col-md-8 col-sm-8"data-aos="fade-right"
                      data-aos-offset="300"
                      data-aos-easing="ease-in-sine">
                        <div class=" mb-5 " >
                            <img src="{{$category->img}}" class="categorie-bordo card-img-top hvr-float-shadow rounded-5"  alt="immagini">
                            <div class="card-body">
                              <a class="btn-bordo m-4 fs-3 btn hvr-float-shadow btn-warning justify-content-center d-flex text-center" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a>
                            </div>
                        </div>                 
                    </div> 
                    </div>
                    @endforeach
                  </div>
                  <div class="swiper-button-next"></div>
                  <div class="swiper-button-prev"></div>
                </div>
                
                
            </div>
        </div>
        {{-- fine Categorie Dispositivi grandi --}}
      {{-- Inizio Categorie Dispositivi Piccoli --}}
  <div class="container d-md-none mb-5 bg-card shadow rounded-5 justify-content-center" style="margin-top: 110px" data-aos="fade-right"
          data-aos-offset="300"
          data-aos-easing="ease-in-sine">
      <div class="row m-5 ">
        <div class="col-12">
          <h1 class="text-center font-h1 text-white mb-5 display-4 ">Categorie</h1>
        </div>
          <div class="col-12">
            <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner ">
                @foreach ($categories as $category)
                <div class="carousel-item @if($loop->first) active @endif" >
                  <img src="{{$category->img}}" class=" categorie-bordo-phone fs-5 card-img-top rounded-5 " alt="immagini">
                  <div class="card-body">
                    <a class="btn-bordo m-4 fs-3 btn hvr-float-shadow btn-warning justify-content-center d-flex text-center" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a>
                  </div>
                </div>

                
                @endforeach 
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
    </div>  



  </div>

      {{-- fine Categorie dispositivi piccoli  --}}
    {{-- FINE CAROSELLO --}}

    {{-- INSERIMENTO CARD --}}
    

    <div class="container bg-card p-2 shadow rounded-5" data-aos="fade-right"
    data-aos-offset="300"
    data-aos-easing="ease-in-sine">
      <div class="row justify-content-center">
        <div class="col-12 "data-aos="fade-up"
        data-aos-anchor-placement="bottom-center">
            <div class=" m-5  justify-content-center d-flex">
        <a  class="fs-2 btn btn-dark hvr-bounce-to-right"href="{{route('create_article')}}">Inserisci Annuncio</a>
      </div>
        </div>
      </div>
      <div class="row m-5">
        <h1 class="text-center text-white mb-5">Ultimi Articoli</h1>
           @foreach ($articles as $article)
            <div class="col-12 justify-content-center d-flex hvr-float-shadow col-md-4"data-aos="zoom-in-left">
              <x-carosello-card :article="$article" :index="$loop->index"/>      
            </div>
            @endforeach
      </div>
    </div>

   
</x-layout>

