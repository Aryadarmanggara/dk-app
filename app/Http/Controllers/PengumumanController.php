<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::select('id', 'judul', 'sampul', 'slug')->latest()->paginate(10);
        return view('pengumuman.v_pengumuman', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pengumuman.v_add');
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
            // 'sampul' => 'required|image|mimes:jpg,jpeg,png',
            'konten' => 'required',


        ]);



        $path = $request->file('sampul')->store('public/pengumuman');
        $post = new Pengumuman();
        $post->judul = $request->judul;
        $post->sampul = $path;
        $post->konten = $request->konten;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();


        return redirect('pengumuman')->with('success', 'Pengumuman baru berhasil ditambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengumuman = Pengumuman::select('id', 'judul', 'sampul', 'konten', 'created_at')->whereId($id)->firstOrFail();
        return view('pengumuman.v_show', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengumuman = Pengumuman::whereId($id)->firstOrFail();
        return view('pengumuman.v_edit', compact('pengumuman'));
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
            // 'sampul' => 'image|mimes:jpg,jpeg,png',
            'konten' => 'required',

        ]);

        $post = Pengumuman::find($id);
        $pengumuman = Pengumuman::select('sampul', 'id')->whereId($id)->first();
        if ($request->sampul) {

            File::delete('public/pengumuman/' . $pengumuman->sampul);

            $path = $request->file('sampul')->store('public/pengumuman');
            $post->image = $path;
        }

        $post->judul = $request->judul;
        $post->konten = $request->konten;
        $post->id_kategori =  $request->kategori;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();

        return redirect('pengumuman')->with('success', 'Pengumuman berhasil diupdate!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengumuman = Pengumuman::select('sampul', 'id')->whereId($id)->first();
        File::delete('public/pengumuman/' . $pengumuman->sampul);
        $pkk = Pengumuman::findOrFail($id);
        $pkk->delete();
        return redirect('pengumuman')->with('success', 'Pengumuman Berhasil Dihapus !!!');
    }
}
