<x-layout>

    {{-- LOGIN PROVA --}}
     <div class="container rounded-5 w-75 justify-content-center d-flex shadow  " style="margin-top: 120px">
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
            <div class="col-12 justify-content-center d-flex">    
                <div class="justify-content-center d-flex flex-column">
                    <h3>Sei Nuovo?</h3>
                    <a href="{{route('register')}}" class="btn btn-warning">Registrati</a >
                </div>
            </div>
        </div>
    </div>
</x-layout>

















































{{-- LOGIN ORIGINALE  --}}

{{-- <div class="container rounded-5 bg-primary-subtle rounded-top-0 shadow p-5  " style="margin-top: 120px">
    <div class="row mb-5 justify-content-center">
        <h2 class="text-center display-4"><strong>Login prova</strong> </h2>
        <div class="col-md-6 col-12">
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3 ">
                    <label for="email" class="form-label">Indirizzo E-Mail</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <button type="submit" class="btn btn-outline-dark">Accedi</button>
            </form> 
        </div>          
    </div>
</div> --}}













