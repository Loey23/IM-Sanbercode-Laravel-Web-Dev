<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class castController extends Controller
{
    public function create() {
        return view('cast.create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:5',
            'age' => 'required',
            'bio' => 'required',
        ],
        [
            'required' => ':attribute harus diisi.'
        ]);
        
        DB::table('casts')->insert([
            'name' => $request->input('name'),
            'age' => $request->input('age'),
            'bio' =>  $request->input('bio'),
        ]);

        return redirect('/cast');
    }

    public function index(){
        $cast = DB::table('casts')->get();
        return view('cast.index', ['casts' => $cast]);
    }

    public function show($id){
        $kast = DB::table('casts')->find($id);

        return view('cast.detail', ['kast' => $kast]);
    }

    public function edit($id){
        $kast = DB::table('casts')->find($id);

        return view('cast.edit', ['kast' => $kast]);
    }

    public function update(Request $request, $id){
        $validated = $request->validate([
            'name' => 'required|min:5',
            'age' => 'required',
            'bio' => 'required',
        ],
        [
            'required' => ':attribute harus diisi.'
        ]);
        
        DB::table('casts')
              ->where('id', $id)
              ->update([
                'name' => $request->input('name'),
                'age' => $request->input('age'),
                'bio' => $request->input('bio')
              ]);

        return redirect('/cast');
    }

    public function destroy($id){
        DB::table('casts')->where('id', $id)->delete();

        return redirect('/cast');
    }
}
