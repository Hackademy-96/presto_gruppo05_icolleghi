<nav id="navbar" class="navbar nav-custom navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">iColleghi-Presto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homePage')}}">HomePage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Tutti gli Annunci</a>
          </li>

          <div class="dropdown">
          <li class="nav-item  dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Categorie
            </a>
            <ul class="dropdown-menu">
              @foreach ($categories as $category)
              <li><a class="dropdown-item text-center" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
              
              @endforeach
            </ul>
          </div>

          <li class="nav-item">
            <a class="nav-link active" href="{{route('create_article')}}">Crea Annuncio</a>
          </li>
        </ul>
        @guest
            <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('register')}}">Registrati</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="{{route('login')}}">Accedi</a>
                    </li>
            </ul>
        @endguest
        @auth
        <ul class="navbar-nav  mb-2 mb-lg-0">
         <li class="nav-item  dropdown">
             <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Ciao {{Auth::user()->name}}
             </a>
             <ul class="dropdown-menu">
               <li><a class="dropdown-item text-center" href="#">Profilo</a></li>
              <li class="nav-item">

                <form method="POST" class="justify-content-center d-flex" action="{{route('logout')}}">
                  @csrf
                  <button  class=" btn btn-danger  text-center ">Logout  <i class="fa-solid fa-right-from-bracket fa-beat"></i></button>
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
        
        
          
        
          
       
      </div>
    </div>
  </nav>