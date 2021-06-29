<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dicas;
use App\Models\User;



class SiteController extends Controller
{
    //

    public function index()
    {
        $dicas = Dicas::all();
        $users = User::all();


        return view('home.index',compact('dicas','users'));
        

    }

    public function show($id)
    {
        //
        $dica = $this->dicas->find($id);
        $user_send = $this->users->where('id', $dica->user_send_id)->first();


        return json_encode([$dica,$user_send]);
    }
    
}