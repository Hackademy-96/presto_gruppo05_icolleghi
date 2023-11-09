<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;


class CreateForm extends Component
{
    use WithFileUploads;
    
    public $titolo;
    public $category;
    public $descrizione;
    public $testo;
    public $prezzo;
    public $temporary_images;
    public $images = [];

    
    protected $rules=[
        'titolo'=> 'required|min:2',
        'category'=> 'required',
        'descrizione'=> 'required|min:5',
        'prezzo'=> 'required|numeric',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=>'image|max:1024   '
        
    ];
    
    protected $messages = [
        'titolo.required'=> 'Il testo è obbligatorio',
        'titolo.min'=> 'il titolo deve avere minimo 2 caratteri ',
        'category.required'=> 'La Categoria è obbligatoria',
        'descrizione.required'=>'La descrizione è obbligatoria ',
        'descrizione.min'=>'La descrizione deve essere minimo di 5 caratteri',
        'prezzo.required'=>"L'inserimento del prezzo è obbligatorio",
        'images.max'=>'L\' immagine dev\'essere massimo di 1mb',
        'images.image'=>'Il file deve essere un\'immagine',
        'temporary_images.*.image'=> 'I file devono essere delle immagini',
        'temporary_images.*.max'=>'L\' immagine dev\'essere massimo di 1mb',
        
    ];
    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*'=>"image|max:1024"
        ])){
            foreach ($this->temporary_images as $image) {
                $this->images[]= $image;
            }
        }
    } 

    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }
    

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }


    public function store(){
        $this->validate();
        $category= Category::find($this->category);
       $article= $category->articles()->create([

            'titolo'=> $this->titolo,
            'descrizione'=> $this->descrizione,
            'prezzo'=> $this->prezzo,
        ]);
        $this->article = Category::find($this->category)->articles()->create($this->validate());      
        if (count($this->images)) {
            foreach ($this->images as $image){
                $this->anrticle->images()->create(['path'=>$image->store('images' , 'public')]);
            }
        }   

        Auth::user()->articles()->save($article);
        $this->cleanForm();
        session()->flash('message', 'Articolo creato con successo, sarà pubblicato dopo la revisione.');

    }
    

    public function cleanForm(){
        $this->titolo= '';
        $this->descrizione ='';
        $this->prezzo = '';
        $this->images=[];
        $this->temporary_images=[]; 
    }


    public function render()
    {
        return view('livewire.create-form');
    }
   
}
