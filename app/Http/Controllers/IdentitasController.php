<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use Illuminate\Http\Request;

class IdentitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $identitas = Identitas::latest()->paginate(5);

        return view('identitas.v_identitas', compact('identitas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('identitas.v_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_desa' => 'required',
            'nama_kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'alamat' => 'required',
            'nama_kepala_desa' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'instagram' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',

        ]);
        $path = $request->file('image')->store('public/image/logo');
        $post = new Identitas();
        $post->nama_desa = $request->nama_desa;
        $post->nama_kecamatan = $request->nama_kecamatan;
        $post->kabupaten = $request->kabupaten;
        $post->provinsi = $request->provinsi;
        $post->kode_pos = $request->kode_pos;
        $post->alamat = $request->alamat;
        $post->nama_kepala_desa = $request->nama_kepala_desa;
        $post->image = $path;
        $post->instagram = $request->instagram;
        $post->facebook = $request->facebook;
        $post->twitter = $request->twitter;
        $post->save();

        return redirect('identitas')->with('success', 'Data berhasil ditambahkan !!!');
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
        $identitas = Identitas::findOrFail($id);
        return view('identitas.v_edit', compact('identitas'));
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
        $request->validate([
            'nama_desa' => 'required',
            'nama_kecamatan' => 'required',
            'kabupaten' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'alamat' => 'required',
            'nama_kepala_desa' => 'required',
            'instagram' => 'required',
            'facebook' => 'required',
            'twitter' => 'required',
        ]);

        $post = Identitas::find($id);
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/image/logo');
            $post->image = $path;
        }
        $post->nama_desa = $request->nama_desa;
        $post->nama_kecamatan = $request->nama_kecamatan;
        $post->kabupaten = $request->kabupaten;
        $post->provinsi = $request->provinsi;
        $post->kode_pos = $request->kode_pos;
        $post->alamat = $request->alamat;
        $post->nama_kepala_desa = $request->nama_kepala_desa;
        $post->instagram = $request->instagram;
        $post->facebook = $request->facebook;
        $post->twitter = $request->twitter;
        $post->save();

        return redirect('identitas')->with('success', 'Update Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $identitas = Identitas::findOrFail($id);
        $identitas->delete();
        return redirect('identitas')->with('success', 'Data Berhasil Dihapus !!!');
    }
}
