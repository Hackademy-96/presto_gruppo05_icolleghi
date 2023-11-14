<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_page(User $user){
        $user = User::findOrFail($user->id);
        $articles = $user->articles;
        return view('user_page', compact('articles'));
    }
}
