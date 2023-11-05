<x-layout>
    <div class="container">
        <div class="row m-5">
            <div class="col-6">
                <h1>{{$article->titolo}}</h1>
                <p>Prezzo: € {{$article->prezzo}}</p>
                <p>Categoria: <a class="btn btn-danger" href="{{route('categoryShow',['category'=>$article->category])}}"> {{$article->category->name}}</a></p>
                <p>{{$article->descrizione}}</p>


            </div>
            <div class="col-6">
                <img src="https://picsum.photos/400" alt="">
            </div>
        </div>
    </div>



</x-layout>