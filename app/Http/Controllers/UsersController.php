<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UsersController extends Controller
{
    public function index(){
        Gate::authorize('view-any', User::class);
        return User::all();                        
            
    }

    public function show(User $user){
        Gate::authorize('view', $user);
        return $user;                              
        
    }

    
}
