<x-layout>
    <h1>  Ciao {{Auth::user()->name}}</h1>
    <h2>ARTICOLI CARICATI:</h2>
    @if (Auth::user()->id == $articles->user_id)
    <h3> </h3>
        
    @endif

</x-layout>