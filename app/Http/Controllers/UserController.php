<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\LevelModel;
use Illuminate\Http\Request;
use App\DataTables\UserDataTable;

class UserController extends Controller
{
    public function index(UserDataTable $dataTable)
    {
        return $dataTable->render('user.index');
    }

    public function create()
    {
        $levels = LevelModel::all();
        return view('user.create', compact('levels'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'level_id' => 'required', 
        ]);
        UserModel::create([
            'level_id' => $request->level_id,
            'username' => $request->usernameuser,
            'nama' => $request->namauser,
            'password' => $request->passworduser,
        ]);
        
        return redirect('/user');
    }

    public function edit($id)
    {
        $user = UserModel::find($id);
        $levels = LevelModel::all();
        return view('user.edit', compact('user', 'levels'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'level_id' => 'required',
        ]);
        $user = UserModel::find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }

        $user->level_id = $request->level_id;
        $user->username = $request->usernameuser;
        $user->nama = $request->namauser;
        $user->password = $request->passworduser;
        $user->save();

        return redirect('/user')->with('success', 'User berhasil diperbarui.');
    }


    public function destroy($id)
    {
        LevelModel::destroy($id);
        return redirect('/user');
    }
}
