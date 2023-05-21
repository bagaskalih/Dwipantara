<?php

namespace App\Http\Controllers;

use App\Models\Semarang;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreSemarangRequest;
use App\Http\Requests\UpdateSemarangRequest;

class SemarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('review-semarang', [
            "komentar" => Semarang::all()
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
    public function store(StoreSemarangRequest $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required'
        ]);

        $validatedData['name'] = auth()->user()->name;

        Semarang::create($validatedData);

        return redirect('/review/semarang');
    }

    /**
     * Display the specified resource.
     */
    public function show(Semarang $semarang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Semarang $semarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSemarangRequest $request, Semarang $semarang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Semarang $semarang)
    {
        //
    }
}
