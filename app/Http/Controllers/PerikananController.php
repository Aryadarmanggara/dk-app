<?php

namespace App\Http\Controllers;

use App\Models\Perikanan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PerikananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perikanan = Perikanan::select('id', 'judul', 'sampul', 'slug')->latest()->paginate(10);
        return view('perikanan.v_perikanan', compact('perikanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('perikanan.v_add');
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



        $path = $request->file('sampul')->store('public/perikanan');
        $post = new Perikanan();
        $post->judul = $request->judul;
        $post->sampul = $path;
        $post->konten = $request->konten;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();


        return redirect('perikanan')->with('success', 'Perikanan baru berhasil ditambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perikanan = Perikanan::select('id', 'judul', 'sampul', 'konten', 'created_at')->whereId($id)->firstOrFail();
        return view('perikanan.v_show', compact('perikanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perikanan = Perikanan::whereId($id)->firstOrFail();
        return view('perikanan.v_edit', compact('perikanan'));
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

        $post = Perikanan::find($id);
        $perikanan = Perikanan::select('sampul', 'id')->whereId($id)->first();
        if ($request->sampul) {

            File::delete('public/perikanan/' . $perikanan->sampul);

            $path = $request->file('sampul')->store('public/perikanan');
            $post->image = $path;
        }

        $post->judul = $request->judul;
        $post->konten = $request->konten;
        $post->id_kategori =  $request->kategori;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();

        return redirect('perikanan')->with('success', 'Perikanan berhasil diupdate!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perikanan = Perikanan::select('sampul', 'id')->whereId($id)->first();
        File::delete('public/perikanan/' . $perikanan->sampul);
        $pkk = Perikanan::findOrFail($id);
        $pkk->delete();
        return redirect('perikanan')->with('success', 'Perikanan Berhasil Dihapus !!!');
    }
}
