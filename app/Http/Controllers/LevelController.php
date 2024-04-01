<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use Illuminate\Http\Request;
use App\DataTables\LevelDataTable;

class LevelController extends Controller
{
    public function index(LevelDataTable $dataTable)
    {
        return $dataTable->render('level.index');
    }

    public function create()
    {
        return view('level.create');
    }
    
    public function store(Request $request)
    {
        LevelModel::create([
            'level_code' => $request->codelevel,
            'level_nama' => $request->namalevel,
        ]);
        
        return redirect('/level');
    }

    public function edit($id)
    {
        $level = LevelModel::find($id);
        return view('level.edit', compact('level'));
    }

    public function update($id, Request $request)
    {
        $level = LevelModel::find($id);
        if (!$level) {
            return redirect()->back()->with('error', 'Level tidak ditemukan.');
        }

        $level->level_code = $request->codelevel;
        $level->level_nama = $request->namalevel;
        $level->save();

        return redirect('/level')->with('success', 'Level berhasil diperbarui.');
    }


    public function destroy($id)
    {
        LevelModel::destroy($id);
        return redirect('/level');
    }
}
