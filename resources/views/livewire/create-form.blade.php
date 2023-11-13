<div class="container p-4 shadow" style="background-color: rgb(35, 46, 62)" style="margin-top: 130px ">
    <div class="container" style="margin-top: 120px">
        <div class="row">
            <div class="col-12 justify-content-center d-flex">
                <img class="logo-extend" src="/img/colleghi.jpg" alt="logo">
            </div>
        </div>
    </div>
    <h2 class=" display-3 m-5 text-center text-white font-creaannuncio ">Crea il Tuo Annuncio:</h2>
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
                      <label for="titolo text-white" class="form-label text-white">Titolo</label>
                      <input type="text" wire:model.live="titolo" placeholder="Inserisci Titolo" class="form-control" id="titolo">
                    </div>
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-labe text-white ">Categoria</label>
                        <select wire:model.defer="category" id="disabledSelect"  class="form-select">
                          <option value="">Scegli una categoria</option>
                          @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                         
                        </select>
                      </div>
                    <div class="mb-3">
                      <label for="descrizione" class="form-label text-white">Descrizione</label>
                      <input type="text" wire:model.live="descrizione" placeholder="Scrivi una breve Descrizione" class="form-control" id="descrizione">
                    </div>
                    <div class="mb-3">
                        <label for="prezzo" class=" text-white">Prezzo</label>
                        <input type="number" wire:model.live="prezzo" class="form-control" placeholder="Inserisci il prezzo" id="prezzo" >
                    </div>
                    <div class="mb-3">
                        <input wire:model="temporary_images" multiple class="form-control shadow" type="file">
                    </div>
                    @if (!empty($images))
                        <div class="row">
                            <div class="col-12">
                                <p>Photo preview:</p>
                                <div class="row border border-4 border-info rounded shadow py-4">
                                    @foreach ($images as $key=>$image)
                                        <div class="col my-3">
                                        <div class="img-preview mx-auto shadow rounded" style="background-image:url({{$image->temporaryUrl()}});"></div>
                                        <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click='removeImage({{$key}})'>Cancella</button>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    
                        
                    @endif
                    <button type="submit" class="btn btn-primary">Crea Annuncio</button>
                  </form>
            </div>
        </div>
    </div>
</div>
