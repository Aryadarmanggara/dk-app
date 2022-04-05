<?php

namespace App\Http\Controllers;

use App\Models\Aparatur;
use Illuminate\Http\Request;

class AparaturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('aparatur_desa.v_aparatur_desa');

        $aparaturs = Aparatur::latest()->paginate(5);

        return view('aparatur_desa.v_aparatur_desa', compact('aparaturs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aparatur_desa.v_add');
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
        $path = $request->file('image')->store('public/images');
        $post = new Aparatur();
        $post->nama = $request->nama;
        $post->jabatan = $request->jabatan;
        $post->nip = $request->nip;
        $post->nohp = $request->nohp;
        $post->email = $request->email;
        $post->alamat = $request->alamat;
        $post->image = $path;
        $post->save();
        // $input = $request->all();

        // if ($image = $request->file('image')) {
        //     $destinationPath = 'image/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // }

        // Aparatur::create($input);

        // $aparaturs = new Aparatur($request->all());
        // $aparaturs->save();
        return redirect('aparatur_desa')->with('success', 'Data berhasil ditambahkan !!!');
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
        $aparatur = Aparatur::findOrFail($id);
        return view('aparatur_desa.v_edit', compact('aparatur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'nip' => 'required',
            'nohp' => 'required|max:13',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        $post = Aparatur::find($id);
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            ]);
            $path = $request->file('image')->store('public/images');
            $post->image = $path;
        }
        $post->nama = $request->nama;
        $post->jabatan = $request->jabatan;
        $post->nip = $request->nip;
        $post->save();

        // $input = $request->all();
        // if ($image = $request->file('image')) {
        //     $imageDestinationPath = 'uploads/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($imageDestinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // } else {
        //     unset($input['image']);
        // }
        // $aparatur->update($input);

        return redirect('aparatur_desa')->with('success', 'Update Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aparatur = Aparatur::findOrFail($id);
        // $aparatur->delete_image();
        $aparatur->delete();
        return redirect('aparatur_desa')->with('success', 'Data Berhasil Dihapus !!!');
    }
}
