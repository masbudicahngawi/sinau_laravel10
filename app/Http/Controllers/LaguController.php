<?php

namespace App\Http\Controllers;

use App\Models\Lagu;
use App\Models\Genre;
use Illuminate\Http\Request;

class LaguController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $semua = Lagu::all();
        $semua = Lagu::paginate(10);

        return view('lagu.index', ['lagus' => $semua]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all_genre = Genre::all();

        return view('lagu.tambah', ['all_genre' => $all_genre]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $rekues, Lagu $lagu)
    {
        $dataValid = $rekues->validate([
            'judul' => 'required',
            'penyanyi' => 'required',
            'genre_id' => 'required',
        ]);

        $dataValid['user_id'] = '1';
        $dataValid['deskripsi'] = $rekues['deskripsi'];

        // var_dump($rekues['deskripsi']);
        // $lagu->fill($rekues->post())->save();
        $lagu->fill($dataValid)->save();

        return redirect()->route('lagu.all')->with('success','Data berhasil disimpan');

        // dump($dataValid);

    }

    /**
     * Display the specified resource.
     */
    public function show(Lagu $lagu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Lagu $lagu)
    {
        $data = Lagu::where('id', $id)->get();
        $all_genre = Genre::all();

        // dump($data);

        return view('lagu.edit',['datanya' => $data[0], 'all_genre' => $all_genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $rekues, Lagu $lagu)
    {
        $dataValid = $rekues->validate([
            'judul' => 'required',
            'penyanyi' => 'required',
            'genre_id' => 'required',
        ]);

        $dataValid['id'] = $rekues['id'];
        $dataValid['deskripsi'] = $rekues['deskripsi'];

        // dump($dataValid);

        $data = Lagu::find($rekues['id']);

        $data->update([
            'judul' => $dataValid['judul'],
            'penyanyi' => $dataValid['penyanyi'],
            'genre_id' => $dataValid['genre_id'],
            'deskripsi' => $dataValid['deskripsi']
        ]);

        return redirect()->route('lagu.all')->with('success','Data berhasil disimpan');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $rekues, Lagu $lagu)
    {
        // dump($rekues['id']);

        $data = Lagu::find($rekues['id']);
        // Lagu::delete($rekues['id']);
        $data->delete();
        return redirect()->route('lagu.all')->with('success','Data berhasil dihapus');
    }
}
