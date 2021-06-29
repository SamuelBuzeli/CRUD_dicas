<?php

namespace App\Http\Controllers;

use App\Models\Dicas;
use App\Models\User;
use App\Http\Requests\DicasRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class DicasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $dicas;
    private $users;


    public function __construct(Dicas $dicas,User $users){

        $this->dicas = $dicas;
        $this->users = $users;



    }
    public function index(Dicas $dicas)
    {
        //
        $dicas = $this->dicas->all();
        $users = $this->users->all();
        return view('admin.dica.index',compact('dicas','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.dica.crud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DicasRequest $request)
    {
        //
        $datas = $request->all();
        $datas['user_send_id'] = Auth::id();
        $this->dicas->create($datas);


        return redirect(route('admin.dica.index'))->with('success','Dica cadastrada com sucesso! ');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dicas  $dicas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $dica = $this->dicas->find($id);
        $user_send = $this->users->where('id', $dica->user_send_id)->first();


        return json_encode([$dica,$user_send]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dicas  $dicas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $dica = $this->dicas->find($id);
        return view("admin.dica.crud",compact('dica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dicas  $dicas
     * @return \Illuminate\Http\Response
     */
    public function update(DicasRequest $request, $id)
    {
        //
         $datas = $request->all();
         $dica = $this->dicas->find($id);

         $dica->update($datas);

         return redirect(route('admin.dica.index'))->with('success','Dica atualizada com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dicas  $dicas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $dica = $this->dicas->find($id);
        $dica->delete();

        return redirect(route('admin.dica.index'))->with('success','Dica deletada com sucesso! ');



    }
}