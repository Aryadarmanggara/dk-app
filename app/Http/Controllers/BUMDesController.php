<?php

namespace App\Http\Controllers;

use App\Models\Bumdes;
use Illuminate\Http\Request;

class BUMDesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bumdes = Bumdes::latest()->paginate(5);

        return view('bumdes.v_bumdes', compact('bumdes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bumdes.v_add');
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
            'nama' => 'required',
            'jabatan' => 'required',
            'nip' => 'required',
            'nohp' => 'required|max:13',
            'email' => 'required',
            'alamat' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $path = $request->file('image')->store('public/images/bumdes');
        $post = new Bumdes();
        $post->nama = $request->nama;
        $post->jabatan = $request->jabatan;
        $post->nip = $request->nip;
        $post->nohp = $request->nohp;
        $post->email = $request->email;
        $post->alamat = $request->alamat;
        $post->image = $path;
        $post->save();

        return redirect('bumdes')->with('success', 'Data berhasil ditambahkan !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bumdes = Bumdes::findOrFail($id);
        return view('bumdes.v_edit', compact('bumdes'));
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
            'nama' => 'required',
            'jabatan' => 'required',
            'nip' => 'required',
            'nohp' => 'required|max:13',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        $post = Bumdes::find($id);
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images/bumdes');
            $post->image = $path;
        }
        $post->nama = $request->nama;
        $post->jabatan = $request->jabatan;
        $post->nip = $request->nip;
        $post->nohp = $request->nohp;
        $post->email = $request->email;
        $post->alamat = $request->alamat;
        $post->save();

        return redirect('bumdes')->with('success', 'Update Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bumdes = Bumdes::findOrFail($id);
        $bumdes->delete();
        return redirect('bumdes')->with('success', 'Data Berhasil Dihapus !!!');
    }
}
