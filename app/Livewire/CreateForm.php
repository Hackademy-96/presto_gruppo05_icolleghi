<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateForm extends Component
{
    public $titolo;
    public $categoria;
    public $descrizione;
    public $testo;
    public $prezzo;

    protected $rules=[
        'titolo'=> 'required|min:3',
        'categoria'=> 'required',
        'descrizione'=> 'required|min:3',
        'prezzo'=> 'required|numeric',
        
    ];

    public function store(){

        $article= Article::create([
            'titolo'=> $this->titolo,
            'categoria'=> $this->categoria,
            'descrizione'=> $this->descrizione,
            'prezzo'=> $this->prezzo,
        ]);
        

    }
    public function render()
    {
        return view('livewire.create-form');
    }
   
}
