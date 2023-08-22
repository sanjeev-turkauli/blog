<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public $dropdownVisibility = false;

    public function render()
    {
        return view('livewire.navbar');
    }

    public function logOut(){
        if(Auth::check()){
            Auth::logout();
        }
    }

    public function logIn(){
        return redirect("auth/session");
    }
}
