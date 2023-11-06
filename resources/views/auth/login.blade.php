<x-layout>
     <div class="container rounded-5 bg-primary-subtle rounded-top-0 shadow p-5  " style="margin-top: 120px">
        <div class="row mb-5 justify-content-center">
            <h2 class="text-center display-4"><strong>Login</strong> </h2>
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
    </div>
</x-layout>