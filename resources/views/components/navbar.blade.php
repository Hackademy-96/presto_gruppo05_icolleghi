<nav id="navbar" class="navbar  nav-custom navbar-expand-lg fixed-top">
  
    <div class="container">
      <div class="">
        <a class="navbar-brand text-white" href="{{route('homePage')}}"><img class="logo" src="/img/colleghi.jpg" alt="logo"></a>
      </div>
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="navbar-toggler-icon text-white "></i> 
      </button>
      <div class="collapse text-white navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
          <li class="nav-item ms-3" data-bs-toggle="tooltip" data-bs-placement="bottom" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine" data-bs-title="Home">
            <a class=" nav-link hvr-underline-from-left text-white active" aria-placeholder="Home" aria-current="page" href="{{route('homePage')}}"><i  class="bi fs-4  bi-house-fill"></i></a>  
          </li>

          <li class="nav-item ms-3"data-bs-toggle="tooltip" data-bs-placement="bottom" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine" data-bs-title="{{__('ui.tuttiipost')}}">
            <a class="nav-link hvr-underline-from-left text-white active" href="{{route('indexArticle')}}"><i class="bi fs-4 bi-file-post"></i></a>
          </li>

          <div class="dropdown"data-bs-toggle="tooltip" data-bs-placement="bottom" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine" data-bs-title="{{__('ui.categhover')}}">
          <li class="nav-item ms-3 dropdown">
            <a class="nav-link hvr-underline-from-left dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi fs-4 text-white bi-three-dots"></i>
            </a>
            <ul class="dropdown-menu">
              @foreach ($categories as $category)
              <li><a class="dropdown-item hvr-trim " href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
              
              @endforeach
            </ul>
          </div>
          
          <li class="nav-item ms-3" data-bs-toggle="tooltip" data-bs-placement="bottom" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine" data-bs-title="{{__('ui.posthover')}}">
            <a class="nav-link hvr-underline-from-left text-white active" href="{{route('create_article')}}"><i class="bi fs-4 bi-plus-square"></i></a>
          </li>
          
          <div class="dropdown ms-3"data-bs-toggle="tooltip" data-bs-placement="bottom" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine" data-bs-title="{{__('ui.lingue')}}">

          <button class="nav-link hvr-underline-from-left dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi fs-4 text-white bi bi-globe2"></i>
          </button>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="#">
                <x-_locale lang="it"> </x-_locale>ITA
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <x-_locale lang="en"></x-_locale>ENG
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="#">
                <x-_locale lang="es"></x-_locale>ESP
              </a>
            </li>
          </ul>
        
        </div>
        @guest
        <div class="container ms-auto me-auto ">
          <ul class="navbar-nav mb-2  mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link hvr-underline-from-left text-white active" aria-current="page" href="{{route('register')}}">{{__('ui.registratinav')}}</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link hvr-underline-from-left text-white active" aria-current="page" href="{{route('login')}}">{{__('ui.accedinav')}}</a>
                    </li>
            </ul>
        @endguest
        @auth
        <ul class="navbar-nav  mb-2 mb-lg-0">
         <li class="nav-item  dropdown">
             <a class="nav-link hvr-underline-from-left text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{__('ui.ciao')}} {{Auth::user()->name}}
             </a>
             <ul class="dropdown-menu">
              {{-- Revisore --}}
              @if (Auth::user()->is_revisor)
                  <li>
                <a class="dropdown-item text-center" href="{{route('indexRevisor')}}">
                  Zona revisore
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{App\Models\Article::toBeRevisionedCount()}}</span>
                </a>
              </li>
              @endif
               
              
               
                            <li class="nav-item">
                              <form method="POST" class="justify-content-center d-flex" action="{{route('logout')}}">
                                @csrf
                                <button  class=" btn  bottone-logout text-center ">{{__('ui.logout')}}  <i class="fa-solid fa-right-from-bracket fa-beat"></i></button>
                              </form>
                            </li>
                          </ul>
                        </li>
                        @endauth
                      </ul>
        </div>
            
          <div>
        </div>
      </div>
    </div>
    
    <li class="nav-item ms-3" data-bs-toggle="tooltip" data-bs-placement="bottom" data-aos="fade-right"
    data-aos-offset="300"
    data-aos-easing="ease-in-sine" data-bs-title="Crea Post">
    <a class="nav-link hvr-underline-from-left text-white active" href="{{route('create_article')}}"><i class="bi fs-4 bi-plus-square"></i></a>
  </li>
  
  <div class="dropdown ms-3"data-bs-toggle="tooltip" data-bs-placement="bottom" data-aos="fade-right"
  data-aos-offset="300"
  data-aos-easing="ease-in-sine" data-bs-title="Lingue">
  
  <button class="nav-link hvr-underline-from-left dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="bi fs-4 text-white bi bi-globe2"></i>
  </button>
  <ul class="dropdown-menu">
    <li>
      <a class="dropdown-item" href="#">
        <x-_locale lang="it"> </x-_locale>ITA
      </a>
    </li>
    <li>
      <a class="dropdown-item" href="#">
        <x-_locale lang="en"></x-_locale>ENG
      </a>
    </li>
    <li>
      <a class="dropdown-item" href="#">
        <x-_locale lang="es"></x-_locale>ESP
      </a>
    </li>
  </ul>
</ul>
</div>
@guest

  <ul class="navbar-nav mb-2  mb-lg-0">
    <li class="nav-item">
      <a class="nav-link hvr-underline-from-left text-white active" aria-current="page" href="{{route('register')}}">{{__('ui.registratinav')}}</a>
    </li>
    <li class="nav-item">
      <a class="nav-link hvr-underline-from-left text-white active" aria-current="page" href="{{route('login')}}">{{__('ui.accedinav')}}</a>
    </li>
  </ul>
  @endguest
  @auth
  <ul class="navbar-nav  mb-2 mb-lg-0">
    <li class="nav-item  dropdown">
      <a class="nav-link hvr-underline-from-left text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Ciao {{Auth::user()->name}}
      </a>
      <ul class="dropdown-menu">
        {{-- Revisore --}}
        @if (Auth::user()->is_revisor)
        <li class="nav-item">
          <a class="text-center  btn btn-dark  bottone-logout " href="{{route('indexRevisor')}}">
            Zona revisore
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{App\Models\Article::toBeRevisionedCount()}}</span>
          </a>
        </li>
        @endif
        
        
        
        <li class="nav-item">
          <form method="POST" class="justify-content-center d-flex" action="{{route('logout')}}">
            @csrf
            <button  class=" btn  bottone-logout text-center ">Logout  <i class="fa-solid fa-right-from-bracket fa-beat"></i></button>
          </form>
        </li>
      </ul>
    </li>
    @endauth
  </ul>



</div>
</div>

</nav>


<div class="container mb-5 search-design  p-3 bg-body-secondary rounded-5 " style="margin-top: 100px;">
  <div class="row">
    <div class="col-md-12 ">
      <form action="{{route('articles_search')}}" method="GET" class="d-flex" role="search">
        <input name="searched" class="form-control  me-2" type="search" placeholder="{{__('ui.ricerca')}}" aria-label="Search">
        <button class="btn btn-warning " type="submit"><i class="bi bi-search"></i></button>
      </form>
    </div>
  </div>
</div>
