<x-layout>
     <div class="container ">
        <div class="row mt-5 justify-content-center">
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
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form> 
            </div>          
        </div>
    </div>
</x-layout>