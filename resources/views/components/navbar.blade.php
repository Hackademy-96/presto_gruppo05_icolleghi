<nav id="navbar" class="navbar nav-custom navbar-expand-lg fixed-top">
    <div class="container-fluid  mb-2 mb-lg-0 ">
      <a class="navbar-brand text-white" href="#">iColleghi-Presto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
          <li class="nav-item ms-3">
            <a class=" nav-link hvr-underline-from-left text-white active" aria-current="page" href="{{route('homePage')}}"><i class="bi fs-4  bi-house-fill"></i></a>
          </li>
          <li class="nav-item ms-3">
            <a class="nav-link hvr-underline-from-left text-white active" href="{{route('indexArticle')}}"><i class="bi fs-4 bi-file-post"></i></a>
          </li>

          <div class="dropdown">
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

          <li class="nav-item ms-3">
            <a class="nav-link hvr-underline-from-left text-white active" href="{{route('create_article')}}"><i class="bi fs-4 bi-plus-square"></i></a>
          </li>
        </ul>
        @guest
            <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link hvr-underline-from-left text-white active" aria-current="page" href="{{route('register')}}">Registrati</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link hvr-underline-from-left text-white active" aria-current="page" href="{{route('login')}}">Accedi</a>
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
               <li>
                <a class="dropdown-item text-center" href="{{route('indexRevisor')}}">
                  Zona revisore
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">{{App\Models\Article::toBeRevisionedCount()}}</span>
                </a>
              </li>
               
              <li class="nav-item">
                <form method="POST" class="justify-content-center d-flex" action="{{route('logout')}}">
                  @csrf
                  <button  class=" btn  bottone-logout text-center ">Logout  <i class="fa-solid fa-right-from-bracket fa-beat"></i></button>
                </form>
              </li>
            </ul>
          </li>
        </ul> 
        
        @endauth
                  
                    

                      </ul>
                    </li>       
                  </ul>
        </ul>
        
        
          
        
          
       
        <div>
          
        </div>
      </div>
    </div>
  </nav>
  