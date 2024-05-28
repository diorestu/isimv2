<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class JamaahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Member::get();
        return view('pages.jamaah.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.jamaah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input            = $request->all();
        $input['id_user'] = Auth::user()->id;
        $input['id_pj']   = Auth::user()->id;
        try {
            DB::beginTransaction();
            Member::create($input);
            DB::commit();
            return redirect()->back()->with('success', 'Berhasil');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', 'Gagal: ' . $th->getMessage());
        }
    }

    public function storeKK(Request $request)
    {
        $input                      = $request->all();
        $input['hubungan_keluarga'] = 'KK';
        try {
            DB::beginTransaction();
            Member::create($input);
            DB::commit();
            return redirect()->back()->with('success', 'Berhasil');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->back()->with('error', 'Gagal: ' . $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
