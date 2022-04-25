<?php

namespace App\Http\Controllers;

use App\Models\Kerajinan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KerajinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kerajinan = Kerajinan::select('id', 'judul', 'sampul', 'slug')->latest()->paginate(10);
        return view('kerajinan.v_kerajinan', compact('kerajinan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('kerajinan.v_add');
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
            'judul' => 'required',
            'sampul' => 'required|image|mimes:jpg,jpeg,png',
            'konten' => 'required',


        ]);



        $path = $request->file('sampul')->store('public/kerajinan');
        $post = new Kerajinan();
        $post->judul = $request->judul;
        $post->sampul = $path;
        $post->konten = $request->konten;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();


        return redirect('kerajinan')->with('success', 'Kerajinan baru berhasil ditambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kerajinan = Kerajinan::select('id', 'judul', 'sampul', 'konten', 'created_at')->whereId($id)->firstOrFail();
        return view('kerajinan.v_show', compact('kerajinan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kerajinan = Kerajinan::whereId($id)->firstOrFail();
        return view('kerajinan.v_edit', compact('kerajinan'));
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
            'judul' => 'required',
            'sampul' => 'image|mimes:jpg,jpeg,png',
            'konten' => 'required',

        ]);

        $post = Kerajinan::find($id);
        $kerajinan = Kerajinan::select('sampul', 'id')->whereId($id)->first();
        if ($request->sampul) {

            File::delete('public/kerajinan/' . $kerajinan->sampul);

            $path = $request->file('sampul')->store('public/kerajinan');
            $post->image = $path;
        }

        $post->judul = $request->judul;
        $post->konten = $request->konten;
        $post->id_kategori =  $request->kategori;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();

        return redirect('kerajinan')->with('success', 'Kerajinan berhasil diupdate!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kerajinan = Kerajinan::select('sampul', 'id')->whereId($id)->first();
        File::delete('public/kerajinan/' . $kerajinan->sampul);
        $pkk = Kerajinan::findOrFail($id);
        $pkk->delete();
        return redirect('kerajinan')->with('success', 'Kerajinan Berhasil Dihapus !!!');
    }
}
