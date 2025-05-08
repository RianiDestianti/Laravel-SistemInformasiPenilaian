<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Guru;
use App\Models\Murid;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with(['guru', 'murid', 'mataPelajaran'])->get();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        $guru = Guru::all();
        $murid = Murid::all();
        $mataPelajaran = MataPelajaran::all();
        return view('nilai.create', compact('guru', 'murid', 'mataPelajaran'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_guru' => 'required',
            'id_murid' => 'required',
            'id_mata_pelajaran' => 'required',
            'nilai' => 'required|numeric',
            'predikat' => 'required',
            'semester' => 'required',
        ]);

        Nilai::create($request->all());

        return redirect()->route('nilai.index')->with('success', 'Data nilai berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $nilai = Nilai::findOrFail($id);
        $guru = Guru::all();
        $murid = Murid::all();
        $mataPelajaran = MataPelajaran::all();
        return view('nilai.edit', compact('nilai', 'guru', 'murid', 'mataPelajaran'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_guru' => 'required',
            'id_murid' => 'required',
            'id_mata_pelajaran' => 'required',
            'nilai' => 'required|numeric',
            'predikat' => 'required',
            'semester' => 'required',
        ]);

        $nilai = Nilai::findOrFail($id);
        $nilai->update($request->all());

        return redirect()->route('nilai.index')->with('success', 'Data nilai berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();

        return redirect()->route('nilai.index')->with('success', 'Data nilai berhasil dihapus.');
    }
}
