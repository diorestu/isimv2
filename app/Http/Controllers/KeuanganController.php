<?php

namespace App\Http\Controllers;

use App\Models\Keuangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeuanganController extends Controller
{
    public function informasi()
    {
        $data = Keuangan::all();
        return view('pages.keuangan.index', compact('data'));
    }

    public function debet(Request $request)
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

    public function kredit(Request $request)
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
