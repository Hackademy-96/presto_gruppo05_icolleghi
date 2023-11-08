<x-layout>

    {{-- LOGIN PROVA --}}
     <div class="container rounded-5 w-50 justify-content-center d-flex shadow p-5 " style="margin-top: 120px">
        <div class="row mb-5 ">
            <h2 class="display-4"><strong>Accedi</strong> </h2>
            <div class="col-4">
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
                    <div>
                        <p>Accedendo al tuo account dichiari di aver letto e accetti le nostre Condizioni generali di uso e vendita. Prendi visione della nostra Informativa sulla privacy, della nostra Informativa sui Cookie e della nostra Informativa sulla Pubblicità definita in base agli interessi.</p>
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Accedi</button>
                </form> 
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













