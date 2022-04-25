<?php

namespace App\Http\Controllers;

use App\Models\SeniBudaya;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SeniBudayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $senibudaya = SeniBudaya::select('id', 'judul', 'sampul', 'slug')->latest()->paginate(10);
        return view('senibudaya.v_senibudaya', compact('senibudaya'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('senibudaya.v_add');
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



        $path = $request->file('sampul')->store('public/senibudaya');
        $post = new SeniBudaya();
        $post->judul = $request->judul;
        $post->sampul = $path;
        $post->konten = $request->konten;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();


        return redirect('senibudaya')->with('success', 'SeniBudaya baru berhasil ditambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $senibudaya = SeniBudaya::select('id', 'judul', 'sampul', 'konten', 'created_at')->whereId($id)->firstOrFail();
        return view('senibudaya.v_show', compact('senibudaya'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $senibudaya = SeniBudaya::whereId($id)->firstOrFail();
        return view('senibudaya.v_edit', compact('senibudaya'));
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

        $post = SeniBudaya::find($id);
        $senibudaya = SeniBudaya::select('sampul', 'id')->whereId($id)->first();
        if ($request->sampul) {

            File::delete('public/senibudaya/' . $senibudaya->sampul);

            $path = $request->file('sampul')->store('public/senibudaya');
            $post->image = $path;
        }

        $post->judul = $request->judul;
        $post->konten = $request->konten;
        $post->id_kategori =  $request->kategori;
        $post->slug = Str::slug($request->judul, '-');
        $post->save();

        return redirect('senibudaya')->with('success', 'SeniBudaya berhasil diupdate!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $senibudaya = SeniBudaya::select('sampul', 'id')->whereId($id)->first();
        File::delete('public/senibudaya/' . $senibudaya->sampul);
        $pkk = SeniBudaya::findOrFail($id);
        $pkk->delete();
        return redirect('senibudaya')->with('success', 'SeniBudaya Berhasil Dihapus !!!');
    }
}
