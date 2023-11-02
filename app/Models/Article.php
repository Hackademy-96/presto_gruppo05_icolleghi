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

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
