<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\keluhan;
use App\Models\User;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan nama dan nik
        $data = keluhan::join('users', 'users.id', '=', 'keluhans.user_id')
               ->get(['users.name', 'users.nik','keluhans.*']);
        
        // $data = keluhan::where('id', $id)->get();
        // $data=keluhan::all();

        return view('dashboard.index', [
            'title' => 'pengaduan',
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fromdata=[
            ['select', "Respon Keluhan", ['Pending', 'Diterima', 'Ditolak', 'Diproses']],
        ];
        return view('dashboard.create', compact('fromdata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = keluhan::findOrFail($id);
        // $fromdata=
            
        //         ['name'=> ['select', "Respon Keluhan", ['Pending', 'Diterima', 'Ditolak', 'Diproses']],];
      
        return view('dashboard.edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data = keluhan::findOrFail($id);
        
        // return view('dashboard.edit', compact('data'));
        $data = keluhan::findOrFail($id);
        $fromdata=[
            ['select', "Respon Keluhan", ['Pending', 'Diterima', 'Ditolak', 'Diproses']],
        ];
      
        return view('dashboard.edit', compact('data', 'fromdata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //admin bisa menambahkan statur/respon
        $validate = $request->validate([
            'status' => 'required',
        ]);
       
        keluhan::where('id', $id)
            ->update($validate);
        return redirect('/dashboard')->with('success', 'Data berhasil terubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        keluhan::destroy($id);
        return redirect('/dashboard')->with('success', 'Data berhasil dihapus');
    }
}
