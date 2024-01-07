<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TransaksiRequest;
use App\Models\Transaksi;
use App\Models\Member;
use App\Models\User;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Transaksi::with('member')->with('operator')->get();
        return view('transaksi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $operator = User::all();
        $member = Member::all();
        return view('transaksi.create', compact('operator', 'member'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(TransaksiRequest $request)
    {
        $data = $request->validated();
        $transaksi = new Transaksi($data);
        $transaksi->save();
        return redirect()->route('transaksi');
        // dd($data);
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
        $operator = User::all();
        $member = Member::all();

        $data = Transaksi::find($id);
        return view('transaksi.edit', compact('data', 'operator', 'member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TransaksiRequest $request, string $id)
    {
        $data = $request->validated();

        Transaksi::whereId($id)->update($data);
        return redirect()->route('transaksi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Transaksi::find($id);
        $data->delete();
        return redirect()->route('transaksi');
    }
}
