<?php

namespace App\Http\Controllers;

use App\Models\UsahaMikro;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UsahaMikroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usahamikro = UsahaMikro::select('id', 'judul', 'sampul', 'slug')->latest()->paginate(10);
        return view('usahamikro.v_usahamikro', compact('usahamikro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('usahamikro.v_add');
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



        $path = $request->file('sampul')->store('public/usahamikro');
        $post = new UsahaMikro();
        $post->judul = $request->judul;
        $post->sampul = $path;
        $post->konten = $request->konten;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();


        return redirect('usahamikro')->with('success', 'UsahaMikro baru berhasil ditambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usahamikro = UsahaMikro::select('id', 'judul', 'sampul', 'konten', 'created_at')->whereId($id)->firstOrFail();
        return view('usahamikro.v_show', compact('usahamikro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usahamikro = UsahaMikro::whereId($id)->firstOrFail();
        return view('usahamikro.v_edit', compact('usahamikro'));
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

        $post = UsahaMikro::find($id);
        $usahamikro = UsahaMikro::select('sampul', 'id')->whereId($id)->first();
        if ($request->sampul) {

            File::delete('public/usahamikro/' . $usahamikro->sampul);

            $path = $request->file('sampul')->store('public/usahamikro');
            $post->image = $path;
        }

        $post->judul = $request->judul;
        $post->konten = $request->konten;
        $post->id_kategori =  $request->kategori;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();

        return redirect('usahamikro')->with('success', 'UsahaMikro berhasil diupdate!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usahamikro = UsahaMikro::select('sampul', 'id')->whereId($id)->first();
        File::delete('public/usahamikro/' . $usahamikro->sampul);
        $pkk = UsahaMikro::findOrFail($id);
        $pkk->delete();
        return redirect('usahamikro')->with('success', 'UsahaMikro Berhasil Dihapus !!!');
    }
}
