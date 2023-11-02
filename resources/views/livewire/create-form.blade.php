<div>
    <h2 class="display-2 m-5 bg-danger text-white shadow rounded-5 text-center">Crea il Tuo Annuncio</h2>
    <div class="container mt-5  mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
              @if (session('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
          @endif
          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
                <form wire:submit.prevent='store'>
                    @csrf
                    <div class="mb-3">
                      <label for="titolo" class="form-label">Titolo</label>
                      <input type="text" wire:model.live="titolo" placeholder="Inserisci Titolo" class="form-control" id="titolo">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Categoria</label>
                        <select wire:model.defer="category" id="disabledSelect"  class="form-select">
                          @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                         
                        </select>
                      </div>
                    <div class="mb-3">
                      <label for="descrizione" class="form-label">Descrizione</label>
                      <input type="text" wire:model.live="descrizione" placeholder="Scrivi una breve Descrizione" class="form-control" id="descrizione">
                    </div>
                    <div class="mb-3">
                        <label for="prezzo">Prezzo</label>
                        <input type="number" class="form-control" placeholder="Inserisci il prezzo" id="prezzo" >
                    </div>
                    <button type="submit" class="btn btn-primary">Crea Annuncio</button>
                  </form>
            </div>
        </div>
    </div>
</div>