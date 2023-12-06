<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'unique:users,email', 'regex:/^.+@[^\.].*\.[a-z]{2,}$/i'],
        ], [
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Insira um endereço de email válido.',
            'email.unique' => 'Este email já está sendo utilizado.',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $user = $request->all();
            $user['password'] = bcrypt($request->password);

            $user = User::create($user);

            Auth::login($user);

            return redirect()->route('admin.conteudo');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
