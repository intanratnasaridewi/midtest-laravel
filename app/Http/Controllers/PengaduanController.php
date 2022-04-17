<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\keluhan;

class pengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //telah menampilkan nama dan nik dengan join
        $id = auth()->user()->id;
         $data = keluhan::join('users', 'users.id', '=', 'keluhans.user_id')
                ->where('user_id', $id)
               ->get(['users.name', 'users.nik','keluhans.*']);
        // $data = keluhan::where('user_id', $id)->get();
        // $data=keluhan::all();

        return view('userpage.list', [
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
        return view('userpage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                // return $request->all();
                $validate = $request->validate([
                    'tanggal_pengaduan' => 'required',
                    'keluhan' => 'required|min:5|max:255',
                ]);
                $validate['user_id'] = auth()->user()->id;
                $validate['excerpt']= Str::limit(strip_tags($request->keluhan), 200);
                //telah menambahkan status
                $validate['updated_at'] = null;
                $validate['status'] = 'terkirim';
                keluhan::create($validate);
                return redirect('/userpage')->with('success', 'Terimakasih telah membuat pengaduan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = keluhan::findOrFail($id);
        
        return view('userpage.edit', compact('data'));
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
        $validate = $request->validate([
            'tanggal_pengaduan' => 'required',
            'keluhan' => 'required|min:5|max:255',
        ]);
       
        keluhan::where('id', $id)
            ->update($validate);
        return redirect('/userpage')->with('success', 'Data berhasil terubah');
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
        return redirect('/userpage')->with('success', 'Data berhasil dihapus');
    }
}
