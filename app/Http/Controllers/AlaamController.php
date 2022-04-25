<?php

namespace App\Http\Controllers;

use App\Models\Alam;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AlaamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alam = Alam::select('id', 'judul', 'sampul', 'slug')->latest()->paginate(10);
        return view('alam.v_alam', compact('alam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('alam.v_add');
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



        $path = $request->file('sampul')->store('public/alam');
        $post = new Alam();
        $post->judul = $request->judul;
        $post->sampul = $path;
        $post->konten = $request->konten;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();


        return redirect('alam')->with('success', 'Alam baru berhasil ditambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alam = Alam::select('id', 'judul', 'sampul', 'konten', 'created_at')->whereId($id)->firstOrFail();
        return view('alam.v_show', compact('alam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alam = Alam::whereId($id)->firstOrFail();
        return view('alam.v_edit', compact('alam'));
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

        $post = Alam::find($id);
        $alam = Alam::select('sampul', 'id')->whereId($id)->first();
        if ($request->sampul) {

            File::delete('public/alam/' . $alam->sampul);

            $path = $request->file('sampul')->store('public/alam');
            $post->image = $path;
        }

        $post->judul = $request->judul;
        $post->konten = $request->konten;
        $post->id_kategori =  $request->kategori;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();

        return redirect('alam')->with('success', 'Alam berhasil diupdate!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alam = Alam::select('sampul', 'id')->whereId($id)->first();
        File::delete('public/alam/' . $alam->sampul);
        $pkk = Alam::findOrFail($id);
        $pkk->delete();
        return redirect('alam')->with('success', 'Alam Berhasil Dihapus !!!');
    }
}
