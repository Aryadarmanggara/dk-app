<?php

namespace App\Http\Controllers;

use App\Models\Perkebunan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PerkebunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perkebunan = Perkebunan::select('id', 'judul', 'sampul', 'slug')->latest()->paginate(10);
        return view('perkebunan.v_perkebunan', compact('perkebunan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('perkebunan.v_add');
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



        $path = $request->file('sampul')->store('public/perkebunan');
        $post = new Perkebunan();
        $post->judul = $request->judul;
        $post->sampul = $path;
        $post->konten = $request->konten;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();


        return redirect('perkebunan')->with('success', 'Perkebunan baru berhasil ditambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perkebunan = Perkebunan::select('id', 'judul', 'sampul', 'konten', 'created_at')->whereId($id)->firstOrFail();
        return view('perkebunan.v_show', compact('perkebunan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perkebunan = Perkebunan::whereId($id)->firstOrFail();
        return view('perkebunan.v_edit', compact('perkebunan'));
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

        $post = Perkebunan::find($id);
        $perkebunan = Perkebunan::select('sampul', 'id')->whereId($id)->first();
        if ($request->sampul) {

            File::delete('public/perkebunan/' . $perkebunan->sampul);

            $path = $request->file('sampul')->store('public/perkebunan');
            $post->image = $path;
        }

        $post->judul = $request->judul;
        $post->konten = $request->konten;
        $post->id_kategori =  $request->kategori;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();

        return redirect('perkebunan')->with('success', 'Perkebunan berhasil diupdate!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perkebunan = Perkebunan::select('sampul', 'id')->whereId($id)->first();
        File::delete('public/perkebunan/' . $perkebunan->sampul);
        $pkk = Perkebunan::findOrFail($id);
        $pkk->delete();
        return redirect('perkebunan')->with('success', 'Perkebunan Berhasil Dihapus !!!');
    }
}
