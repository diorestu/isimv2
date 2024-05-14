<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Acara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Plusemon\Notify\Facades\Notify;

class AcaraController extends Controller
{
    public function index()
    {
        $acara = Acara::orderBy('tanggal', 'DESC')->orderBy('jam', 'ASC')->get();
        return view('pages.acara.index', compact('acara'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.acara.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input        = $request->all();
        try {
            $awal  = new DateTime($input['tanggal']);
            $akhir = new DateTime(); // waktu sekarang
            if ($awal < $akhir) {
                return redirect()->back()->with('error', 'Anda Menginputkan Tanggal Lampau');
            } else {
                DB::beginTransaction();
                Acara::create($input);
                DB::commit();
                return redirect()->back()->with('success', 'Berhasil');
            }
        } catch (\Throwable $th) {
            DB::rollback();
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $acara = Acara::findOrFail($id);
        return view('pages.acara.detail', compact('acara'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
