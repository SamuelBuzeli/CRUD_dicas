<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('auth.cadastro');
        
    }

    /**
     * Show the form for cr
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('auth.cadastro');
    }


    public function store(Request $request)
    {
        
        $request['password'] = Hash::make($request->password);
        $datas = $request->all();
        

     
        


        $this->users->create($datas);

 
        return redirect(route('site'))->with('success', 'Usuário cadastrado com sucesso!');
    }




    public function destroy($id)
    {
        $user = $this->users->find($id);
        $user->delete();

        return redirect(route('admin.user.index'))->with('success', 'Usuário deletado com sucesso!');
    }
}