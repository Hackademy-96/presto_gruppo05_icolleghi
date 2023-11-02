<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateForm extends Component
{
    public $titolo;
    public $category;
    public $descrizione;
    public $testo;
    public $prezzo;

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    protected $rules=[
        'titolo'=> 'required|min:2',
        'category'=> 'required',
        'descrizione'=> 'required|min:5',
        'prezzo'=> 'required|numeric',
        
    ];

    protected $messages = [
        'titolo.required'=> 'Il testo è obbligatorio',
        'titolo.min'=> 'il titolo deve avere minimo 2 caratteri ',
        'category.required'=> 'La Categoria è obbligatoria',
        'descrizione.required'=>'La descrizione è obbligatoria ',
        'descrizione.min'=>'La descrizione deve essere minimo di 5 caratteri',
        'prezzo.required'=>"L'inserimento del prezzo è obbligatorio",
        
    ];

    public function store(){
       $category= Category::find($this->category);
       $article= $category->articles()->create([

            'titolo'=> $this->titolo,
            'descrizione'=> $this->descrizione,
            'prezzo'=> $this->prezzo,
        ]);
        $this->cleanForm();
        Auth::user()->articles()->save($article);
        session()->flash('message', 'Articolo creato con successo!');

    }
    

    public function cleanForm(){
        $this->titolo= '';
        $this->descrizione ='';
        $this->prezzo = '';
    }


    public function render()
    {
        return view('livewire.create-form');
    }
   
}
