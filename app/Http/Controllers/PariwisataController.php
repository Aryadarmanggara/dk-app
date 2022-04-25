<?php

namespace App\Http\Controllers;

use App\Models\Pariwisata;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PariwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pariwisata = Pariwisata::select('id', 'judul', 'sampul', 'slug')->latest()->paginate(10);
        return view('pariwisata.v_pariwisata', compact('pariwisata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pariwisata.v_add');
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



        $path = $request->file('sampul')->store('public/pariwisata');
        $post = new Pariwisata();
        $post->judul = $request->judul;
        $post->sampul = $path;
        $post->konten = $request->konten;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();


        return redirect('pariwisata')->with('success', 'Pariwisata baru berhasil ditambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pariwisata = Pariwisata::select('id', 'judul', 'sampul', 'konten', 'created_at')->whereId($id)->firstOrFail();
        return view('pariwisata.v_show', compact('pariwisata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pariwisata = Pariwisata::whereId($id)->firstOrFail();
        return view('pariwisata.v_edit', compact('pariwisata'));
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

        $post = Pariwisata::find($id);
        $pariwisata = Pariwisata::select('sampul', 'id')->whereId($id)->first();
        if ($request->sampul) {

            File::delete('public/pariwisata/' . $pariwisata->sampul);

            $path = $request->file('sampul')->store('public/pariwisata');
            $post->image = $path;
        }

        $post->judul = $request->judul;
        $post->konten = $request->konten;
        $post->id_kategori =  $request->kategori;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();

        return redirect('pariwisata')->with('success', 'Pariwisata berhasil diupdate!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pariwisata = Pariwisata::select('sampul', 'id')->whereId($id)->first();
        File::delete('public/pariwisata/' . $pariwisata->sampul);
        $pkk = Pariwisata::findOrFail($id);
        $pkk->delete();
        return redirect('pariwisata')->with('success', 'Pariwisata Berhasil Dihapus !!!');
    }
}
