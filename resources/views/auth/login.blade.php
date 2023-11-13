<x-layout>
<div style="background-color: rgb(35, 46, 62)" class="m-3 rounded-5">
    <div class="container" style="margin-top: 120px">
        <div class="row">
            <div class="col-12 justify-content-center d-flex">
                <img class="logo-extend" src="/img/colleghi.jpg" alt="logo">
            </div>
        </div>
    </div>

    {{-- LOGIN PROVA --}}
     <div class="container rounded-5 w-75 justify-content-center d-flex shadow bg-body-secondary ">
        <div class="row mt-3 justify-content-center mb-5 ">
            <h2 class=" display-4 text-center"><strong>Accedi</strong> </h2>
            <div class="col-md-8 col-lg-8 col-xl-8 mx-auto mb-4 ">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="col-md-8 col-lg-8 col-xl-8 mx-auto mb-4 ">
                        <label for="email" class="form-label">Indirizzo E-Mail</label>
                        <input placeholder="Inserisci e-mail" type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="col-md-8 col-lg-8 col-xl-8 mx-auto mb-4 ">
                        <label for="password" class="form-label">Password</label>
                        <input placeholder="Inserisci Password" type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="col-md-8 col-lg-8 col-xl-8 mx-auto mb-4">
                        <p>Accedendo al tuo account dichiari di aver letto e accetti le nostre Condizioni generali di uso e vendita. Prendi visione della nostra Informativa sulla privacy, della nostra Informativa sui Cookie e della nostra Informativa sulla Pubblicità definita in base agli interessi.</p>
                    </div>
                    <div class="justify-content-center mt-3 d-flex">
                        <button type="submit" class="btn btn-warning">Accedi</button>
                    </div>
                    
                </form> 
            </div>          
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 mb-5 justify-content-center d-flex">    
                <div class="justify-content-center d-flex flex-column">
                    <h3 class="text-white mb-4">Non sei ancora Registrato?</h3>
                    <a href="{{route('register')}}" class="btn btn-warning">Registrati</a>
                </div>
            </div>
        </div>
    </div> 
</div>
</x-layout>
