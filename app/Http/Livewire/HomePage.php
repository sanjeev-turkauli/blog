<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\like;
use App\Models\share;
use App\Models\heart;
use App\Models\User;

class HomePage extends Component
{
    public $like = 0;
    public $heart = 0;
    public $message = 0;
    public $share = 0;
    public $errorPush = true;
    public $user_id;
    public $user_action = array();


    public $type;
    public $title;

    public function render()
    {
        return view('livewire.home-page');
    }

    public function mount()
    {
        if(Auth::check()){
            $this->user_id = Auth::user()->id;
        }
        $this->fetchData();
    }

    public function share()
    {
        $this->share = $this->share + 1;
        if (!Auth::check()) {
            $this->dispatchBrowserEvent('showAlertMessage', [
                'type'      => 'error',
                'title'     => 'Login require',
                'message'   => '!Oops Please Login First'
            ]);
        }
        $this->fetchData();
    }

    public function likeUnlike()
    {
        if (!Auth::check()) {
            $this->dispatchBrowserEvent('showAlertMessage', [
                'type'      => 'error',
                'title'     => 'Login require',
            ]);
        } else {
            $exist_like = like::where("like_id", $this->user_id)->first();

            if (!empty($exist_like)) {
                $likeCount = $exist_like->like_count == 1 ? 0 : 1;
                $query = like::where("like_id", $this->user_id)->update(["like_count" => $likeCount]);
                $like = like::where("like_id", $this->user_id)->select("id", "like_id", "like_count")->first();
                if ($like) {
                    $this->user_action['like'] = $like;
                }
                if ($likeCount > 0) {
                    $this->type = 'success';
                    $this->title = "Liked";
                } else {
                    $this->type = 'success';
                    $this->title = "Unliked";
                }
            } else {
                $like = new like;
                $like->like_id = Auth::user()->id;
                $like->like_count = 1;
                $query = $like->save();
                $like = like::where("like_id", $this->user_id)->select("id", "like_id", "like_count")->first();
                if ($like) {
                    $this->user_action['like'] = $like;
                }
                $this->type = 'success';
                $this->title = "Liked";
            }



            if ($query) {
                $this->dispatchBrowserEvent('showAlertMessage', [
                    'type'      => $this->type,
                    'title'     => $this->title,
                ]);
            }
        }
    }

    public function message()
    {
        $this->message = $this->message + 1;
        $this->fetchData();
    }

    public function heart()
    {
        $this->heart = $this->heart + 1;
        $this->fetchData();
    }

    public function fetchData(){
        
        if (Auth::check()) {
            $get_like =  like::where("like_id", $this->user_id)->select("*")->first();
            $get_share = share::where("share_id", $this->user_id)->select("*")->first();
            $get_heart = heart::where("heart_id", $this->user_id)->select("*")->first();
            
            if(!empty($get_like)){
                if($get_like->count() > 0){
                    $this->user_action['like'] = $get_like;
                }
            }
            if(!empty($get_share)){
                if($get_share->count() > 0){
                    $this->user_action['share'] = $get_share;
                }
            }
            if(!empty($get_heart)){
                if($get_heart->count() > 0){
                    $this->user_action['heart'] = $get_heart;
                }
            }
            
        }
    }
}
