<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'titolo',
        'categoria',
        'descrizione',
        'prezzo'
    ];
    public function articles(){
        return $this->belongsToMany(Article::class);
    }
    public function user(){

        return $this->belongsTo(User::class);
    }
}
