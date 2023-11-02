<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

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
        'titolo'=> 'required|min:3',
        'category'=> 'required',
        'descrizione'=> 'required|min:3',
        'prezzo'=> 'required|numeric',
        
    ];

    protected $messages = [
        'titolo.required'=> 'Il testo è obbligatorio',
        'category.required'=> 'La Categoria è obbligatoria',
        'descrizione.required'=>' ',
    ];

    public function store(){
        $category= Category::find(this->category);
        $category->annoucements()->create([

            'titolo'=> $this->titolo,
            'descrizione'=> $this->descrizione,
            'prezzo'=> $this->prezzo,
        ]);
        $this->cleanForm();
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
