<?php

namespace App\Http\Controllers;

use App\Models\Jogja;
use Illuminate\Routing\Controller;
use App\Http\Requests\StoreJogjaRequest;
use App\Http\Requests\UpdateJogjaRequest;

class JogjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('review-jogja', [
            "komentar" => Jogja::all()
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
    public function store(StoreJogjaRequest $request)
    {
        $validatedData = $request->validate([
            'comment' => 'required'
        ]);

        $validatedData['name'] = auth()->user()->name;

        Jogja::create($validatedData);

        return redirect('/review/jogja');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jogja $jogja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jogja $jogja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJogjaRequest $request, Jogja $jogja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jogja $jogja)
    {
        //
    }
}
