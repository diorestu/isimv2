<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use App\Models\Keuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeuanganController extends Controller
{
    public function informasi()
    {
        $data = Keuangan::latest()->get();
        return view('pages.keuangan.index', compact('data'));
    }

    public function debet()
    {
        $data = Kas::all();
        return view('pages.keuangan.pemasukan', compact('data'));
    }

    public function kredit()
    {
        $data = Kas::all();
        return view('pages.keuangan.pengeluaran', compact('data'));
    }

    public function saveDebet(Request $request)
    {
        $input = $request->all();
        $input['id_user'] = auth()->user()->id;
        try {
            DB::beginTransaction();
            Keuangan::create($input);
            DB::commit();
            return redirect()->back()->with('success', 'Berhasil');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', 'Gagal: ' . $th->getMessage());
        }
    }

    public function saveKredit(Request $request)
    {
        $input = $request->all();
        $input['id_user'] = auth()->user()->id;
        try {
            DB::beginTransaction();
            Keuangan::create($input);
            DB::commit();
            return redirect()->back()->with('success', 'Berhasil');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', 'Gagal: ' . $th->getMessage());
        }
    }
    public function laporan(Request $request)
    {
        $input = $request->all();
        $input['id_user'] = auth()->user()->id;
        try {
            DB::beginTransaction();
            Keuangan::create($input);
            DB::commit();
            return redirect()->back()->with('success', 'Berhasil');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', 'Gagal: ' . $th->getMessage());
        }
    }
}
