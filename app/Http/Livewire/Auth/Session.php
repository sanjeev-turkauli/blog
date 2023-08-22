<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Session extends Component
{
    public $session = 'login';

    // Register Varibles

    public $name = "";
    public $email = "";
    public $password = "";
    public $cpassword = "";


    // Set errors & success

    public $type;
    public $filed;
    public $message;


    public function render()
    {
        return view('livewire.auth.session');
    }

    public function register(){
        $this->session = "register";
    }

    public function login(){
        $this->session = "login";
    }

    public function store(){

        if($this->name == ""){$this->type = "error"; $this->filed = 'name'; $this->message = "Please Fill Name";}
        elseif($this->email == ""){$this->type = "error"; $this->filed = 'email'; $this->message = "Please Fill Email";}
        elseif($this->password == ""){$this->type = "error"; $this->filed = 'password'; $this->message = "Please Fill Password";}
        elseif($this->cpassword == ""){$this->type = "error"; $this->filed = 'confirm password'; $this->message = "Please Fill Confirm Password";}
        elseif($this->password != $this->cpassword){$this->type = "error"; $this->filed = 'confirm password'; $this->message = "Password & Confirm Password Not Match";}
        else{

            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password), // Hash the password
            ]);

            if($user){
                $this->type = "success"; $this->filed = 'Register Success'; $this->message = "Registraion Successful..";
            }else{
                $this->type = "error"; $this->filed = 'Register Faild'; $this->message = "!Oops Something wen,t wrong..";
            }
        }
  
        $this->resetForm();
        $this->dispatchBrowserEvent('showAlertMessage', [
            'type'      => $this->type,
            'title'     => $this->message,
            'message'   => $this->filed
        ]);
        $this->session = "login";
    }

    public function session(){
        $credentials = ["email" => $this->email , 'password' => $this->password];

        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/'); // Redirect to the intended page
        } else {
            // Authentication failed
            $this->type = "error";
            $this->message = "Invalid credentials";
        }

        $this->dispatchBrowserEvent('showAlertMessage', [
            'type'      => $this->type,
            'title'     => $this->message,
        ]);
    }


    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->cpassword = '';
    }
}
