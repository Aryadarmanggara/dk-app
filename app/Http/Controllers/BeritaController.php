<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::select('id', 'judul', 'sampul', 'slug')->latest()->paginate(10);
        return view('berita.v_berita', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $kategori = Berita::with('kategori')->get();
        $getKategori = Kategori::all();
        return view('berita.v_add', compact('kategori', 'getKategori'));
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
            // 'id_kategori' => 'required'

        ]);

        // $sampul = $request->sampul->getClientOriginalName();
        // $path = $request->file('sampul')->store('public/images', $sampul);

        $path = $request->file('sampul')->store('public/berita');
        $post = new Berita();
        $post->judul = $request->judul;
        $post->sampul = $path;
        $post->id_kategori =  $request->kategori;
        $post->konten = $request->konten;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();
        // Berita::create([
        //     'judul' => $request->judul,
        //     'sampul' => $path,
        //     'konten' => $request->konten,
        //     'slug' => 
        // ]);

        return redirect('berita')->with('success', 'Berita baru berhasil ditambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::select('id', 'judul', 'sampul', 'konten', 'created_at')->whereId($id)->firstOrFail();
        return view('berita.v_show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::whereId($id)->firstOrFail();

        $getKategori = Kategori::all();
        return view('berita.v_edit', compact('berita', 'getKategori'));
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

        $post = Berita::find($id);
        $berita = Berita::select('sampul', 'id')->whereId($id)->first();
        if ($request->sampul) {

            File::delete('public/berita/' . $berita->sampul);

            $path = $request->file('sampul')->store('public/berita');
            $post->image = $path;
        }

        $post->judul = $request->judul;
        $post->konten = $request->konten;
        $post->id_kategori =  $request->kategori;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();

        return redirect('berita')->with('success', 'Berita berhasil diupdate!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::select('sampul', 'id')->whereId($id)->first();
        File::delete('public/berita/' . $berita->sampul);
        $pkk = Berita::findOrFail($id);
        $pkk->delete();
        return redirect('berita')->with('success', 'Berita Berhasil Dihapus !!!');
    }
}
