<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kuliner = Kuliner::select('id', 'judul', 'sampul', 'slug')->latest()->paginate(10);
        return view('kuliner.v_kuliner', compact('kuliner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('kuliner.v_add');
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



        $path = $request->file('sampul')->store('public/kuliner');
        $post = new Kuliner();
        $post->judul = $request->judul;
        $post->sampul = $path;
        $post->konten = $request->konten;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();


        return redirect('kuliner')->with('success', 'Kuliner baru berhasil ditambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kuliner = Kuliner::select('id', 'judul', 'sampul', 'konten', 'created_at')->whereId($id)->firstOrFail();
        return view('kuliner.v_show', compact('kuliner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kuliner = Kuliner::whereId($id)->firstOrFail();
        return view('kuliner.v_edit', compact('kuliner'));
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

        $post = Kuliner::find($id);
        $kuliner = Kuliner::select('sampul', 'id')->whereId($id)->first();
        if ($request->sampul) {

            File::delete('public/kuliner/' . $kuliner->sampul);

            $path = $request->file('sampul')->store('public/kuliner');
            $post->image = $path;
        }

        $post->judul = $request->judul;
        $post->konten = $request->konten;
        $post->id_kategori =  $request->kategori;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();

        return redirect('kuliner')->with('success', 'Kuliner berhasil diupdate!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kuliner = Kuliner::select('sampul', 'id')->whereId($id)->first();
        File::delete('public/kuliner/' . $kuliner->sampul);
        $pkk = Kuliner::findOrFail($id);
        $pkk->delete();
        return redirect('kuliner')->with('success', 'Kuliner Berhasil Dihapus !!!');
    }
}
