<x-layout>
    <div class="container ">
        <div class="row mt-5 justify-content-center">
            <div class="col-md-6 col-12">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3 ">
                        <label for="name" class="form-label">Nome e Cognome</label>
                        <input type="text" name="name" placeholder="Inserisci Nome e Cognome" class="form-control" id="name">
                    </div>
                    <div class="mb-3 ">
                        <label for="email" class="form-label">Indirizzo E-Mail</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form> 
            </div>          
        </div>
    </div>       
</x-layout>