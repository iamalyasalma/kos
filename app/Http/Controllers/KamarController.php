<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Http\Requests\StoreKamarRequest;
use App\Http\Requests\UpdateKamarRequest;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Psr7\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kamars', [
            "active" => 'kamar'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKamarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kamar $kamar)
    {
        return view('kamar', [
            "kamar" => $kamar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kamar $kamar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kamar $kamar)
    {
        // $affected = DB::table('koskosan')
        //             ->updateOrInsert(
        //                 ['status' => 'Dipesan']
        //             );

        // Kamar::where('no', $kamar->no)
        //         ->update($affected);
        
        // return redirect('/kamar')->with('Kamar akan');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kamar $kamar)
    {
        //
    }


}