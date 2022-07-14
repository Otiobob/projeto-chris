<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    public function index()
    {
        $users = user::get();
         return view('user',[ 
        'users' => $users ]);
    }

    public function create()
    {
        return view('newuser');
    }

    public function store(Request $request)
    {
        $userdados = $request ->except('_token');
        user::create($userdados);
        return redirect('/user');
    }

    public function edit(int $id)
    {
        $user = user::find($id);
        
        return view('edit', [
            'user'=> $user
        ]);
    }

    public function update(int $id, Request $request)
    {
        $user = User::find($id); // vai procurar um cliente no banco de dados 

        $user->update([
            'name' =>$request->name,
            'cpf'=>$request->cpf,
            'matricula'=>$request->matricula,
            'email'=>$request->email,
            'telefone'=>$request->telefone,
            'password'=>$request->password
        ]);

        return redirect('/user');
    }
    





}
